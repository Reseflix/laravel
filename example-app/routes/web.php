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
    $nome = 'Robocsomonoclayton';
    $idade = 24;
    return view('welcome',['nome' => $nome,'idade' => $idade]);
});

Route::get('/contato', function () {
    return view('contact');
});


Route::get('/produtos', function () {
    return view('products');
});
