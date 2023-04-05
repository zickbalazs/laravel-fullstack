<?php

use App\Http\Controllers\TrainingDayController;
use App\Models\TrainingDay;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[TrainingDayController::class, 'index']);
Route::get('/delete/{id}', [TrainingDayController::class, 'delete']);
Route::get('/mod/{id}', [TrainingDayController::class, 'show']);