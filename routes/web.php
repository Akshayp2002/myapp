<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NotesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});




Route::get('/dashboard',[ DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resources([
    'notes' => NotesController::class,
]);
});

require __DIR__ . '/auth.php';
