<?php

use App\Http\Controllers\SectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'sections', 'as' => 'section.', 'controller' => SectionController::class], function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/update-position', 'updatePosition')->name('update.position');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'controller' => ProfileController::class], function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });
});

require __DIR__ . '/auth.php';
