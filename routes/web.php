<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ExperienceController;
use App\Http\Controllers\backend\HeaderController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\frontend\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Frontend All Routes
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Backend All Routes
Route::controller(HeaderController::class)->group(function () {
    Route::get('/header/create', 'create')->name('header.create');
    Route::put('/header/update/{id}', 'update')->name('header.update');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about/create', 'create')->name('about.create');
    Route::put('/about/update/{id}', 'update')->name('about.update');
});

Route::controller(SkillController::class)->group(function () {
    Route::get('/skill/create', 'create')->name('skill.create');
    Route::post('/skill/store', 'store')->name('skill.store');
    Route::get('/skill/show', 'show')->name('skill.show');
    Route::get('/skill/edit/{id}', 'edit')->name('skill.edit');
    Route::put('/skill/update/{id}', 'update')->name('skill.update');
    Route::delete('/skill/destroy/{id}', 'destroy')->name('skill.destroy');
});

Route::controller(ExperienceController::class)->group(function () {
    Route::get('/experience/create', 'create')->name('experience.create');
    Route::post('/experience/store', 'store')->name('experience.store');
    Route::get('/experience/show', 'show')->name('experience.show');
    Route::get('/experience/edit/{id}', 'edit')->name('experience.edit');
    Route::put('/experience/update/{id}', 'update')->name('experience.update');
    Route::delete('/experience/destroy/{id}', 'destroy')->name('experience.destroy');
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/project/create', 'create')->name('project.create');
    Route::post('/project/store', 'store')->name('project.store');
    Route::get('/project/show', 'show')->name('project.show');
    Route::get('/project/edit/{id}', 'edit')->name('project.edit');
    Route::put('/project/update/{id}', 'update')->name('project.update');
    Route::put('/update/multiimage/{id}', 'MultiImageUpdate')->name('project.multiimage.update');
    Route::delete('/project/destroy/{id}', 'destroy')->name('project.destroy');
    Route::get('/project/multiimage/{id}', 'MultiImageDelete')->name('project.multiimage.destroy');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/create', 'create')->name('contact.create');
    Route::put('/contact/update/{id}', 'update')->name('contact.update');
});

Route::controller(MessageController::class)->group(function () {
    Route::get('/message/create', 'create')->name('message.create');
    Route::post('/message/store', 'store')->name('message.store');
    Route::get('/message/show/{id}', 'show')->name('message.show');
    Route::delete('/message/destroy/{id}', 'destroy')->name('message.destroy');
});
