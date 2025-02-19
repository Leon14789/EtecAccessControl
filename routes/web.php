<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.registerVigilant');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // dashboard
    Route::get('/home', function () {
        return view('pages.index');
    })->name('home');

    Route::get('/registerTeacher', [TeacherController::class, 'create'])->name('registerTeacher');
    Route::post('/registerTeacher', [TeacherController::class, 'store']);
});

require __DIR__.'/auth.php';
