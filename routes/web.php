<?php

use App\Http\Controllers\LayerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('site');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Slide
Route::get('/slides', [SliderController::class, 'index'])->name('slide.show');
Route::get('/slides/create', [SliderController::class, 'create'])->name('slide.create');
Route::get('/slides/edit/{id}', [SliderController::class, 'edit'])->name('slide.edit');
Route::get('/slides/destroy/{id}', [SliderController::class, 'destroy'])->name('slide.destroy');
Route::post('/slides/store', [SliderController::class, 'store'])->name('slide.store');
Route::post('/slides/update/{id}', [SliderController::class, 'update'])->name('slide.update');


// Section
Route::get('/sections', [SectionController::class, 'index'])->name('section.show');
Route::get('/sections/create', [SectionController::class, 'create'])->name('section.create');
Route::get('/sections/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
Route::get('/sections/destroy/{id}', [SectionController::class, 'destroy'])->name('section.destroy');
Route::post('/sections/store', [SectionController::class, 'store'])->name('section.store');
Route::post('/sections/update/{id}', [SectionController::class, 'update'])->name('section.update');

// Layer
Route::get('/layers', [LayerController::class, 'index'])->name('layer.show');
Route::get('/layers/edit/{id}', [LayerController::class, 'edit'])->name('layer.edit');
Route::get('/layers/destroy/{id}', [LayerController::class, 'destroy'])->name('layer.destroy');
Route::post('/layers/store', [LayerController::class, 'store'])->name('layer.store');
Route::post('/layers/update/{id}', [LayerController::class, 'update'])->name('layer.update');
