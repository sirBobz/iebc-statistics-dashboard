<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\DemographicsController;

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

Route::get('/', [DemographicsController::class, 'index']);

Route::resource('files', DemographicsController::class);

Route::get('/data-insights', [DemographicsController::class, 'presentation'])->name('presentation');

Route::get('/all-get-counties', [DemographicsController::class, 'counties'])->name('get-counties');
