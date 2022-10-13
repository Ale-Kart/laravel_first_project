<?php

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

use App\Http\Controllers\EventController;

// * Routes : Events
Route::get('/', [EventController::class, 'Index']);
Route::get('/events/create', [EventController::class, 'Create']);
Route::post('/events/', [EventController::class, 'store']);
