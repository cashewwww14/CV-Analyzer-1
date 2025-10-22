<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVAnalyzerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CvAnalysisCommentController;
use App\Http\Controllers\AdminController;

// Root redirect
Route::get('/', function () {
    if (auth()->check()) {
        $user = auth()->user();
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        }
        return redirect('/home');
    }
    return redirect('/login');
});

// Public routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected routes - User only
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [CVAnalyzerController::class, 'index'])->name('home');
    Route::get('/analyze-cv', [CVAnalyzerController::class, 'index'])->name('analyze.cv.form');
    Route::post('/analyze-cv', [CVAnalyzerController::class, 'analyze'])->name('analyze.cv');
    Route::post('/cv-analysis/{id}/comment', [CvAnalysisCommentController::class, 'store'])->name('cv.analysis.comment');
});

// Logout route for all authenticated users
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin only routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Job Description Management
    Route::get('/job-desc-management', [AdminController::class, 'jobDescManagement'])->name('admin.job-desc');
    Route::get('/job-desc-management/create', [AdminController::class, 'createJobDesc'])->name('admin.job-desc.create');
    Route::post('/job-desc-management', [AdminController::class, 'storeJobDesc'])->name('admin.job-desc.store');
    Route::get('/job-desc-management/{id}/edit', [AdminController::class, 'editJobDesc'])->name('admin.job-desc.edit');
    Route::put('/job-desc-management/{id}', [AdminController::class, 'updateJobDesc'])->name('admin.job-desc.update');
    Route::delete('/job-desc-management/{id}', [AdminController::class, 'deleteJobDesc'])->name('admin.job-desc.delete');
    
    Route::get('/monitoring', [AdminController::class, 'monitoring'])->name('admin.monitoring');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    
    // User manager - only accessible to admins. Additional domain-check will be enforced in controller.
    Route::get('/user-manager', [AdminController::class, 'userManager'])->name('admin.user-manager');
    Route::post('/user-manager/{id}/role', [AdminController::class, 'updateUserRole'])->name('admin.user-manager.update-role');
});