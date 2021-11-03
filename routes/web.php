<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\FileUploadController;

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

Route::get('/', [FileUploadController::class, 'index']);

Route::resource('files', FileUploadController::class);

Route::get('/data-insights', [FileUploadController::class, 'presentation'])->name('presentation');



