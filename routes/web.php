<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route: :get('/', function () {
//     return view('welcome');
// });       You, 1 second ago . Uncomtted changes

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
