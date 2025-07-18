<?php

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/index', [AccomodationController::class, 'index'])->name('accomodation.index');

