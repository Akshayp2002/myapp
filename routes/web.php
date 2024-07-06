<?php

use App\Http\Controllers\Admin\NotesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('login');
});
Route::get('/notes', function () {
    return view('app.notes-view');
})->name('notes');


Route::get('/form', function () {
    return view('app.notes-form');
})->name('form');


Route::post('save-notes',[NotesController::class, 'store'])->name('save-notes');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
