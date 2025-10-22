<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class HuggingFaceAIService
{
    private $apiKey;
    private $model;
    private $endpoint;

    public function __construct()
    {
        $this->apiKey = config('services.huggingface.api_key');
        $this->model = config('services.huggingface.model');
        $this->endpoint = config('services.huggingface.endpoint');

        if (!$this->apiKey) {
            throw new Exception('Hugging Face API key is not configured');
        }

        if (!$this->model && !$this->endpoint) {
            throw new Exception('Hugging Face model or endpoint must be configured');
        }
    }

    /**
     * Analyze CV text against job requirements using Hugging Face model.
     * We expect $cvText to be plain text extracted from the PDF.
     */
    public function analyzeCVText(string $cvText, string $jobRequirements): array
    {
        $prompt = $this->buildAnalysisPrompt($cvText, $jobRequirements);

        $responseText = $this->callHuggingFaceAPI($prompt);

        return $this->parseResponse($responseText);
    }

    private function callHuggingFaceAPI(string $input): string
    {
        // Prefer direct endpoint if provided (useful for private HF endpoints), otherwise use model inference API
        if ($this->endpoint) {
            $url = rtrim($this->endpoint, '/');
        } else {
            // public inference endpoint
            $url = "https://api-inference.huggingface.co/models/" . $this->model;
        }

        $headers = [
            'Authorization' => "Bearer {$this->apiKey}",
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $payload = ['inputs' => $input, 'options' => ['wait_for_model' => true]];

        $response = Http::withHeaders($headers)->timeout(60)->post($url, $payload);

        if (!$response->successful()) {
            throw new Exception('Hugging Face API request failed: ' . $response->body());
        }

        $data = $response->json();

        // Inferencing API can return array of generated sequences or object with "generated_text"
        if (is_array($data) && isset($data[0]['generated_text'])) {
            return $data[0]['generated_text'];
        }

        if (is_array($data) && isset($data['generated_text'])) {
            return $data['generated_text'];
        }

        // Some custom endpoints return text directly
        if (is_string($data)) {
            return $data;
        }

        // Fallback: return JSON-encoded response
        return json_encode($data);
    }

    private function buildAnalysisPrompt(string $cvText, string $jobRequirements): string
    {
        return "You are an expert CV/Resume analyzer. Given the candidate CV text and the job requirements, produce a JSON-formatted analysis in the exact schema required.\n\nCV_TEXT:\n" . $cvText . "\n\nJOB_REQUIREMENTS:\n" . $jobRequirements . "\n\nReturn only a single JSON object with keys: overall_score, match_percentage, summary, strengths, weaknesses, missing_skills, detailed_analysis, recommendations, interview_preparation, action_plan.";
    }

    private function parseResponse(string $rawResponse): array
    {
        $jsonStart = strpos($rawResponse, '{');
        $jsonEnd = strrpos($rawResponse, '}');

        if ($jsonStart === false || $jsonEnd === false) {
            return $this->createErrorResponse('Invalid response format', $rawResponse);
        }

        $jsonString = substr($rawResponse, $jsonStart, $jsonEnd - $jsonStart + 1);
        $analysis = json_decode($jsonString, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->createErrorResponse('JSON parsing failed: ' . json_last_error_msg(), $rawResponse);
        }

        return $this->validateAndNormalizeResponse($analysis);
    }

    private function validateAndNormalizeResponse(array $analysis): array
    {
        $defaults = [
            'overall_score' => 0,
            'match_percentage' => 0,
            'summary' => 'Analysis completed.',
            'strengths' => [],
            'weaknesses' => [],
            'missing_skills' => [],
            'detailed_analysis' => [],
            'recommendations' => [],
            'interview_preparation' => [],
            'action_plan' => []
        ];

        return array_merge($defaults, $analysis);
    }

    private function createErrorResponse(string $error, string $rawResponse): array
    {
        return [
            'overall_score' => 0,
            'match_percentage' => 0,
            'summary' => 'Analysis completed but response format needs adjustment.',
            'error' => $error,
            'raw_response' => $rawResponse,
            'strengths' => [],
            'weaknesses' => [],
            'missing_skills' => [],
        ];
    }
}
