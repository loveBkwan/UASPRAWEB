<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('dosens', DosenController::class);
Route::resource('staff', StaffController::class);
