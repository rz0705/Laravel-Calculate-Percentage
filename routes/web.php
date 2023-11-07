<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PercentageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/calculate', [PercentageController::class, 'calculatePercentage'])->name('calculate');
Route::get('/calculate', function () {
    return view('percentage_form');
});
