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

Route::get('/', 'Controller@Index')->name('index');

Route::get('/submit-a-sound', 'Controller@SubmitSoundPage')->name('submit-a-sound');
Route::post('/submit-a-sound', 'Controller@SubmitSound');
