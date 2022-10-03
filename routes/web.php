<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfalioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('home', [PortfalioController::class, 'index']);

Route::get('contact', [PortfalioController::class, 'contact']);

Route::get('portfolio', [PortfalioController::class, 'portfolio']);

Route::get('about', [PortfalioController::class, 'about']);

Route::post('/sendForm', [PortfalioController::class, 'contactForm']);