<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CvAnalysis;
use App\Models\User;
use Illuminate\Support\Str;

class CvAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        if (! $user) {
            $this->command->info('No users found, skipping CvAnalysis seeder.');
            return;
        }

        CvAnalysis::create([
            'user_id' => $user->id,
            'cv_filename' => 'sample_cv.pdf',
            'cv_file_path' => 'uploads/cvs/sample_cv.pdf',
            'extracted_text' => 'Sample CV text with experience in PHP, Laravel, JavaScript and React.',
            'parsed_data' => ['skills' => ['php','laravel','javascript','react'], 'years_experience' => 3],
            'ai_summary' => 'Experienced backend developer with focus on Laravel and PHP.',
            'career_recommendations' => ['learn'=>['TypeScript','Docker'], 'courses'=>['Advanced Laravel']],
            'job_requirements' => 'We are looking for a PHP/Laravel developer with 3+ years experience and knowledge of JS frameworks.',
            'comment' => 'Applying for backend developer role — open to relocation.',
            'status' => 'completed',
        ]);

        $this->command->info('Created sample CvAnalysis for user: ' . $user->email);
    }
}
