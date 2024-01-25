<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return redirect(route('login'));
});

Route::middleware('auth')->group(function () {
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/tasks',[TaskController::class,'index'])->name('tasks');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
