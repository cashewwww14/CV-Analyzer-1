<?php

namespace App\Services;

use Smalot\PdfParser\Parser;

class LocalAnalyzerService
{
    protected Parser $parser;

    public function __construct()
    {
        $this->parser = new Parser();
    }

    /**
     * Extract text from PDF binary (base64 or raw string). Accepts base64-encoded PDF or raw path.
     */
    public function extractTextFromBase64(string $base64): string
    {
        $pdfData = base64_decode($base64);
        $tmp = tempnam(sys_get_temp_dir(), 'cv_') . '.pdf';
        file_put_contents($tmp, $pdfData);

        $pdf = $this->parser->parseFile($tmp);
        $text = $pdf->getText();

        // Clean up
        @unlink($tmp);

        return $text;
    }

    /**
     * Analyze extracted CV text against job requirements
     * Returns an array with match metrics, missing skills and recommendations
     */
    public function analyze(string $cvText, string $jobRequirements): array
    {
        // Normalize and tokenization
        $cvLower = strtolower($cvText);
        $jobLower = strtolower($jobRequirements);

        // Heuristics: extract skills from job requirements using simple patterns
        $skillCandidates = $this->extractSkillsFromText($jobRequirements);

        // Count found skills in CV text
        $foundSkills = [];
        $missingSkills = [];

        foreach ($skillCandidates as $skill) {
            $skillLower = strtolower($skill);
            if (stripos($cvLower, $skillLower) !== false) {
                $foundSkills[] = $skill;
            } else {
                $missingSkills[] = $skill;
            }
        }

        // Experience heuristic: look for years numbers and senior keywords
        preg_match_all('/(\d+)\+?\s*years?/', $cvLower, $yearsMatches);
        $years = 0;
        if (!empty($yearsMatches[1])) {
            // take the largest number found
            $years = max(array_map('intval', $yearsMatches[1]));
        }

        $isSenior = (stripos($cvLower, 'senior') !== false) || $years >= 5;

        // Role match: check if job title words appear in CV
        $titleMatchScore = $this->titleMatchScore($cvLower, $jobLower);

        // Match percentage: weighted by skills and experience/title
        $skillScore = count($skillCandidates) ? (count($foundSkills) / count($skillCandidates)) : 0;
        $experienceScore = $isSenior ? 1 : min(1, $years / 5);
        $matchPercentage = intval(round(($skillScore * 0.6 + $experienceScore * 0.3 + $titleMatchScore * 0.1) * 100));

        // Strengths and weaknesses
        $strengths = array_slice($foundSkills, 0, 5);
        $weaknesses = array_slice($missingSkills, 0, 5);

        // Recommendations: for missing skills, suggest learning resources (simple mapping)
        $recommendations = $this->buildRecommendations($missingSkills);

        return [
            'overall_score' => $matchPercentage,
            'match_percentage' => $matchPercentage,
            'summary' => "The CV matches approximately {$matchPercentage}% of the job requirements.",
            'strengths' => $strengths,
            'weaknesses' => $weaknesses,
            'missing_skills' => $missingSkills,
            'detailed_analysis' => [
                'technical_skills' => "Found skills: " . implode(', ', $foundSkills),
                'experience' => "Years detected: {$years}",
                'education' => "Education parsing not implemented (fallback)",
                'soft_skills' => "Soft skills parsing is heuristic"
            ],
            'recommendations' => $recommendations,
            'interview_preparation' => $this->buildInterviewQuestions($jobRequirements),
            'action_plan' => $this->buildActionPlan($missingSkills),
        ];
    }

    protected function extractSkillsFromText(string $text): array
    {
        $textLower = strtolower($text);

        // Common separators and patterns: commas, newlines, bullets, 'Experience:', 'Required Qualifications:'
        // We'll look for known technology keywords and also parse capitalized phrases
        $knownTech = [
            'react', 'javascript', 'node.js', 'node', 'django', 'python', 'java', 'postgresql', 'mysql', 'sql', 'nosql', 'aws', 'git', 'c++', 'docker', 'kubernetes', 'redis'
        ];

        $found = [];

        foreach ($knownTech as $tech) {
            if (strpos($textLower, strtolower($tech)) !== false) {
                $found[] = $tech;
            }
        }

        // Additional heuristic: capture words after 'Experience:' or in 'Required Qualifications' block
        if (preg_match_all('/(experience|required qualifications|skills|additional skills|front-end development|back-end development):?\s*([\s\S]{0,200})/i', $text, $blocks)) {
            foreach ($blocks[2] as $block) {
                // split by commas and semicolons
                $parts = preg_split('/[\n,;•\-]+/', $block);
                foreach ($parts as $p) {
                    $p = trim($p);
                    if (strlen($p) > 2 && strlen($p) < 60) {
                        // keep phrases that look like skills (contain letters and maybe dots/slashes)
                        if (preg_match('/[a-zA-Z]/', $p)) {
                            // avoid duplicates and very generic words
                            $lower = strtolower($p);
                            if (!in_array($lower, $found)) {
                                $found[] = $p;
                            }
                        }
                    }
                }
            }
        }

        // Deduplicate and normalize
        $unique = array_values(array_unique(array_map('trim', $found)));

        return $unique;
    }

    protected function titleMatchScore(string $cvLower, string $jobLower): float
    {
        // Basic keyword overlap between job title and CV
        $jobWords = preg_split('/[^a-z0-9]+/i', $jobLower);
        $matches = 0;
        $total = 0;
        foreach ($jobWords as $w) {
            $w = trim($w);
            if (strlen($w) < 3) continue;
            $total++;
            if (stripos($cvLower, $w) !== false) $matches++;
        }
        return $total ? ($matches / $total) : 0;
    }

    protected function buildRecommendations(array $missingSkills): array
    {
        $skillResources = [
            'react' => ['name' => 'React - The Complete Guide', 'provider' => 'Udemy', 'priority' => 'High'],
            'node' => ['name' => 'The Complete Node.js Developer Course', 'provider' => 'Udemy', 'priority' => 'High'],
            'django' => ['name' => 'Django for Everybody', 'provider' => 'Coursera', 'priority' => 'Medium'],
            'python' => ['name' => 'Python for Everybody', 'provider' => 'Coursera', 'priority' => 'High'],
            'java' => ['name' => 'Java Programming and Software Engineering Fundamentals', 'provider' => 'Coursera', 'priority' => 'High'],
            'aws' => ['name' => 'AWS Certified Solutions Architect - Associate', 'provider' => 'AWS / A Cloud Guru', 'priority' => 'High'],
            'git' => ['name' => 'Introduction to Git and GitHub', 'provider' => 'Coursera', 'priority' => 'Low'],
            'c++' => ['name' => 'Beginning C++ Programming', 'provider' => 'Udemy', 'priority' => 'Low'],
            'postgresql' => ['name' => 'The Complete SQL Bootcamp', 'provider' => 'Udemy', 'priority' => 'Medium'],
        ];

        $immediate = [];
        $skillDev = [];

        foreach ($missingSkills as $s) {
            $key = strtolower($s);
            // normalize some known variants
            if (str_contains($key, 'react')) $key = 'react';
            if (str_contains($key, 'node')) $key = 'node';
            if (str_contains($key, 'django')) $key = 'django';
            if (str_contains($key, 'python')) $key = 'python';
            if (str_contains($key, 'java')) $key = 'java';
            if (str_contains($key, 'aws')) $key = 'aws';
            if (str_contains($key, 'git')) $key = 'git';
            if (str_contains($key, 'c++')) $key = 'c++';
            if (str_contains($key, 'postgres')) $key = 'postgresql';

            if (isset($skillResources[$key])) {
                $res = $skillResources[$key];
                // create a human-readable entry for skill_development
                $skillDev[] = ($res['name'] ?? $key) . ' — ' . ($res['provider'] ?? 'Various') . ' (' . ($res['priority'] ?? 'Medium') . ')';
                $immediate[] = "Learn {$res['name']} ({$res['provider']})";
            } else {
                $skillDev[] = $s;
                $immediate[] = "Gain experience or training in {$s}";
            }
        }

        return [
            'immediate_improvements' => array_slice($immediate, 0, 5),
            'skill_development' => array_slice($skillDev, 0, 5),
            'courses_bootcamps' => [],
            'projects' => [],
            'certifications' => []
        ];
    }

    protected function buildInterviewQuestions(string $jobRequirements): array
    {
        return [
            'Explain a system you designed that scaled to high load. What was your approach?',
            'Describe a challenging bug or performance issue you fixed and how you diagnosed it.',
            'How do you balance speed of delivery with system maintainability?',
            'Describe how you mentor junior engineers or interns.',
            'Which cloud services have you used in production and how did you use them?'
        ];
    }

    protected function buildActionPlan(array $missingSkills): array
    {
        return [
            'week_1' => 'Review missing skills list and start a focused tutorial for one high-priority skill.',
            'month_1' => 'Complete a small project demonstrating new skills and update CV with outcomes.',
            'month_3' => 'Target an advanced course and contribute to an open-source project or build a production-like system.'
        ];
    }
}
