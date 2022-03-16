<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

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

Route::get( "/uj-dolgozo", [ WorkerController::class, "addWorker" ]);
Route::post( "/tarol-dolgozo", [ WorkerController::class, "storeWorker" ]);
Route::get( "/kiir-dolg", [ WorkerController::class, "getWorker"]);
