<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouroController;

Route::resource('touros', TouroController::class);
