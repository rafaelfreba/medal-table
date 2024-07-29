<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedalTableController;

Route::get('medals', MedalTableController::class)->name('medals.index');
