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

Route::get('/', function () {
    $data = [
        'title' => 'Hello World!'
    ];
    return view('home', $data);
});

Route::get('/chi-siamo', function () {
    $data = [
        'title' => 'Chi siamo'
    ];
    return view('chi-siamo', $data);
});

Route::get('/contatti', function () {
    $data = [
        'title' => 'Contatti'
    ];
    return view('contatti', $data);
});

