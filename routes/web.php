<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);  // This should call the 'index' method of HomeController
