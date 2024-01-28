<?php

use App\Http\Controllers\SectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'sections', 'as' => 'section.', 'controller' => SectionController::class], function () {
        Route::get('/', 'index')->name('index');
        Route::post('/create', 'create')->name('create');
        Route::patch('/update-position', 'updatePosition')->name('update.position');
        Route::patch('/update-title/{section}', 'updateTitle')->name('update.title');
    });

    Route::group(['prefix' => 'task', 'as' => 'task.', 'controller' => TaskController::class], function () {
        Route::post('/create', 'create')->name('create');
        Route::delete('/destroy/{task}', 'destroy')->name('destroy');
        Route::patch('/complete/{task}', 'complete')->name('complete');
        Route::patch('/update-title/{task}', 'updateTitle')->name('update.title');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'controller' => ProfileController::class], function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });
});

require __DIR__ . '/auth.php';
