<?php

use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [PointController::class, 'show'])->name('dashboard');
  

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/registerTeacher', [TeacherController::class, 'create'])->name('registerTeacher');
    Route::post('/registerTeacher', [TeacherController::class, 'store']);
    Route::get('/teacher/{id}', [TeacherController::class, 'show']);
    Route::post('/registerPoint', [PointController::class, 'store'])->name('registerPoint');
    Route::post('/registerExit/{id}', [PointController::class, 'registerExit'])->name('registerExit');
    Route::PUT('/updatePoint/{id}', [PointController::class, 'update'])->name('updatePoint');
    
    Route::get('/indexTeachers', [TeacherController::class, 'index'])->name('indexTeachers');
    Route::get('/showTeachers', [TeacherController::class, 'index'])->name('showTeachers');

    
});


require __DIR__.'/auth.php';
