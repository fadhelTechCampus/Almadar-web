<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [DemoController::class, 'Index']);
