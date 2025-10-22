<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Services\LocalAnalyzerService;

$s = new LocalAnalyzerService();
$cv = 'Experienced software engineer with React and Node.js, 6 years experience.';
$job = "Senior Software Engineer\nRequired Qualifications:\nExperience: 5-7 years\nFront-End Development: React\nBack-End Development: Java or Python or Node.js\nDatabases: PostgreSQL";
$res = $s->analyze($cv, $job);
echo json_encode(['score' => $res['match_percentage'], 'found' => $res['strengths'], 'missing' => $res['missing_skills']], JSON_PRETTY_PRINT);
