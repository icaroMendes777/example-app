<?php

use App\Http\Controllers\HomeController2;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\testemid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', /App/Http/Controllers/HomeController2::class, 'index');

Route::get('/', [HomeController2::class, 'index']);

Route::get('/smth', [HomeController2::class, 'doingSomething'])->middleware(testemid::class);
