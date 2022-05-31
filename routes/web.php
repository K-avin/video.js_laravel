<?php

use Illuminate\Support\Facades\Route;
use Iman\Streamer\VideoStreamer;
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

// Route::get('/', function () {
//     $path = public_path('https://mtoczko.github.io/hls-test-streams/test-group/playlist.m3u8');
    
//     VideoStreamer::streamFile($path)->name('stream');
// });