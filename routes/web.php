<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;

Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');