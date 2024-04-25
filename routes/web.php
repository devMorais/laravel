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

  route::get('pessoa/{id?}', function($id = null){
    return [
        'id' => $id,
        'nome' => 'fernando morais'
    ];
});

//  Route::get('pessoa/{id}/post/{post_id}', function($id, $postId){
//     return [
//         'id' => $id,
//         'Nome' => 'Fernando Morais',
//         'post_id' => $postId
//     ];
// });

