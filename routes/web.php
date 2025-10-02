<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVAnalyzerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CVAnalyzerController::class, 'index'])->name('home');
Route::post('/analyze-cv', [CVAnalyzerController::class, 'analyze'])->name('analyze.cv');