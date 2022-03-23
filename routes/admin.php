<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\SectionController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('configuration', ConfigurationController::class)->names('admin.configuration');
Route::resource('sections', SectionController::class)->names('admin.sections');
Route::put('sections/{section}', [SectionController::class, 'archive'])->name('admin.sections.archive');