<?php

namespace App\Http\Controllers;

use App\Services\GeminiAIService;
use App\Services\PDFProcessingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class CVAnalyzerController extends Controller
{
    private $aiService;
    private $pdfService;

    public function __construct(GeminiAIService $aiService, PDFProcessingService $pdfService)
    {
        $this->aiService = $aiService;
        $this->pdfService = $pdfService;
    }

    public function index()
    {
        return view('cv-analyzer');
    }

    public function analyze(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'cv_file' => 'required|file|mimes:pdf|max:10240',
            'job_requirements' => 'required|string|min:50|max:5000'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Process PDF
            $file = $request->file('cv_file');
            $pdfBase64 = $this->pdfService->convertToBase64($file);
            
            // Get job requirements
            $jobRequirements = $request->input('job_requirements');

            // Analyze with AI
            $analysis = $this->aiService->analyzeCV($pdfBase64, $jobRequirements);

            // Return results
            return view('cv-results', compact('analysis'));

        } catch (Exception $e) {
            return back()
                ->with('error', 'Analysis failed: ' . $e->getMessage())
                ->withInput();
        }
    }
}