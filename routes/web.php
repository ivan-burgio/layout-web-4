<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rutas públicas
Route::get('/', [PageController::class, 'index']);