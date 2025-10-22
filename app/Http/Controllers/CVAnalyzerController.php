<?php

namespace App\Http\Controllers;

use App\Services\LocalAnalyzerService;
use App\Services\PDFProcessingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use App\Models\CvAnalysis;

class CVAnalyzerController extends Controller
{
    private $aiService;
    private $pdfService;
    public function __construct(LocalAnalyzerService $aiService, PDFProcessingService $pdfService)
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
            ,'comment' => 'nullable|string|max:2000'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Process PDF
            $file = $request->file('cv_file');

            // store file
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads/cvs', $filename, 'public');

            $pdfBase64 = $this->pdfService->convertToBase64($file);

            // Extract text using local PDF parser
            $extractedText = $this->aiService->extractTextFromBase64($pdfBase64);

            // Get job requirements and comment
            $jobRequirements = $request->input('job_requirements');
            $comment = $request->input('comment');

            // Analyze locally
            $analysis = $this->aiService->analyze($extractedText, $jobRequirements);

            // Persist analysis record
            $cvAnalysis = CvAnalysis::create([
                'user_id' => auth()->id(),
                'cv_filename' => $filename,
                'cv_file_path' => $path,
                'extracted_text' => $extractedText,
                'parsed_data' => $analysis['parsed'] ?? null,
                'ai_summary' => $analysis['summary'] ?? null,
                'career_recommendations' => $analysis['recommendations'] ?? null,
                'job_requirements' => $jobRequirements,
                'comment' => $comment,
                'status' => 'completed',
            ]);

            // Return results
            return view('cv-results', compact('analysis', 'cvAnalysis'));

        } catch (Exception $e) {
            return back()
                ->with('error', 'Analysis failed: ' . $e->getMessage())
                ->withInput();
        }
    }
}