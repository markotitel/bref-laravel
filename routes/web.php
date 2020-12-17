<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Jobs\ProcessPodcast;
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
Route::get('/env', function () {
    Log::debug($_ENV);
    return '_ENV is logged in CloudWatch';
});
Route::get('/queue', function () {
    Log::info('Dispatching the job in background');
    ProcessPodcast::dispatch(123456);

    return view('welcome');
});
