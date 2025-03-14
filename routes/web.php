<?php

use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [PointController::class, 'show'])->name('dashboard');
  

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/registerTeacher', [TeacherController::class, 'create'])->name('register.teacher');
    Route::post('/registerTeacher', [TeacherController::class, 'store']);
    Route::get('/teacher/{id}', [TeacherController::class, 'show']);
    Route::post('/registerPoint', [PointController::class, 'store'])->name('registerPoint');
    Route::post('/registerExit/{id}', [PointController::class, 'registerExit'])->name('registerExit');
    Route::PUT('/updatePoint/{id}', [PointController::class, 'update'])->name('updatePoint');
    Route::get('/indexTeachers', [TeacherController::class, 'index'])->name('indexTeachers');
    Route::PUT('/updateTeacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::POST('/deleteTeacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
   
    Route::get('/indexUser', [UserController::class, 'index'])->name('allUser');
    
    Route::PUT('/updateUser/{user}', [UserController::class, 'update'])->name('user.update');
    Route::POST('/deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    
    
    Route::get('/showTeachers', [TeacherController::class, 'index'])->name('showTeachers');

    
});


require __DIR__.'/auth.php';
