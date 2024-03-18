<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgettoController;
use Illuminate\Support\Facades\Route;

Route::resource("/progetti",ProgettoController::class);