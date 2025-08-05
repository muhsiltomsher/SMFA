<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoreFunctionsController;
use App\Http\Controllers\CorporateGovernanceController;
use App\Http\Controllers\PhilanthropyController;
use App\Http\Controllers\ContactController;

// Route 'about' as home page
Route::get('/', [AboutController::class, 'index'])->name('about'); 
Route::get('/about', [AboutController::class, 'index']); // optional alias

Route::get('/core-functions', [CoreFunctionsController::class, 'index'])->name('core-functions');

Route::get('/corporate-governance', [CorporateGovernanceController::class, 'index'])->name('corporate-governance');

Route::get('/philanthropy', [PhilanthropyController::class, 'index'])->name('philanthropy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
