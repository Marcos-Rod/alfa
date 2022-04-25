<?php

use App\Http\Controllers\Admin\CKEditorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageGalleryController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('configuration', ConfigurationController::class)->names('admin.configuration');

Route::resource('sections', SectionController::class)->names('admin.sections');
Route::put('sections/{section}/archive', [SectionController::class, 'archive'])->name('admin.sections.archive');

Route::resource('galleries', GalleryController::class)->names('admin.galleries');
Route::resource('gallery/image', ImageGalleryController::class)->names('admin.galleryimages');

Route::resource('services', ServiceController::class)->names('admin.services');

Route::resource('team', TeamController::class)->names('admin.teams');

Route::resource('contact', ContactController::class)->names('admin.contacts');

//Ruta para la carga de imágenes de ckeditor
Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');

//Respuesta de contactos
Route::post('/contact', [ContactController::class, 'submit'])->name('admin.response.submit');
