<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Exception;
use Smalot\PdfParser\Parser as PdfParser;

class PDFProcessingService
{
    /**
     * Convert uploaded PDF to base64
     */
    public function convertToBase64(UploadedFile $file): string
    {
        $this->validatePDF($file);
        return base64_encode(file_get_contents($file->getRealPath()));
    }

    /**
     * Validate PDF file
     */
    private function validatePDF(UploadedFile $file): void
    {
        if (!$file->isValid()) {
            throw new Exception('Uploaded file is not valid');
        }

        if ($file->getClientOriginalExtension() !== 'pdf') {
            throw new Exception('File must be a PDF');
        }

        $maxSize = 10 * 1024 * 1024; // 10MB
        if ($file->getSize() > $maxSize) {
            throw new Exception('PDF file is too large. Maximum size is 10MB');
        }
    }

    /**
     * Get file information
     */
    public function getFileInfo(UploadedFile $file): array
    {
        return [
            'original_name' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'size_mb' => round($file->getSize() / 1024 / 1024, 2),
            'mime_type' => $file->getMimeType(),
        ];
    }

    /**
     * Extract plain text from PDF file using smalot/pdfparser
     */
    public function extractText(UploadedFile $file): string
    {
        $this->validatePDF($file);

        $parser = new PdfParser();
        $pdf = $parser->parseFile($file->getRealPath());
        $text = $pdf->getText();

        // Basic cleanup
        $text = trim(preg_replace('/\s+/', ' ', $text));

        return $text;
    }
}