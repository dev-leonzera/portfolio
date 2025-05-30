<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContactController;
use App\Models\Skill;
use App\Models\Experience;
use App\Http\Controllers\MentoriaController;
use Illuminate\Support\Facades\Route;

// Rotas públicas
Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/ebook', [EbookController::class, 'index'])->name('ebook');

Route::get('/metodo-com-proposito', [MentoriaController::class, 'index'])->name('mentoria.index');

// Rotas autenticadas (painel admin)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas de gerenciamento de conteúdo
    Route::resource('skills', SkillController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('posts', PostController::class);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
