<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return 'Essa é a página sobre';
});

Route::get('contact', function(){
    return [
        'Nome' => 'Fernando Morais',
        'Idade' => '31',
        'Cidade' => 'Brasília'
    ];
});

/** Route methods */

/**
 * 1. GET
 * 2. POST
 * 3. PUT
 * 4. PATCH
 * 5. DELETE
 */

 /** Route Parameters */

 Route::get('Pessoa', function(){
    return 'Eu vou vencer';
});

