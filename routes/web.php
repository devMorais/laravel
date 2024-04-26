<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas web para sua aplicação.
| Essas rotas são carregadas pelo RouteServiceProvider e todas elas serão
| atribuídas ao grupo de middleware "web". Faça algo ótimo!
|
 */

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para a página "about"
Route::get('about', function () {
    return view('info.about');
});

// Rota para a página de contato, retornando informações como JSON
Route::get('contact', function () {
    return [
        'Nome' => 'Fernando Morais',
        'Idade' => '31',
        'Cidade' => 'Brasília',
    ];
});

/** Métodos de Rota */

/**
 * 1. GET
 * 2. POST
 * 3. PUT
 * 4. PATCH
 * 5. DELETE
 */

/** Parâmetros de Rota */

// Rota com parâmetro opcional
route::get('pessoa/{id?}', function ($id = null) {
    return [
        'id' => $id,
        'nome' => 'fernando morais',
    ];
});

// Rota com múltiplos parâmetros
// route::get('pessoa/{id}/post/{post_id}', function($id, $postId){
//     return [
//         'id' => $id,
//         'Nome' => 'Fernando Morais',
//         'post_id' => $postId
//     ];
// });

// Rota simples para mostrar uma mensagem
Route::get('animais', function () {
    return 'Cachorro e gato';
})->name('teste');

/** GRUPOS DE ROTAS */

// Grupo de rotas para animais
Route::group(['as' => 'animais.', 'prefix' => 'animais'], function () {
    // Rota para cachorro
    Route::get('cachorro', function () {
        return 'Woof!';
    })->name('cachorro');

    // Rota para gato
    Route::get('gato', function () {
        return 'Meow!';
    })->name('gato');

    // Rota para macaco
    Route::get('macaco', function () {
        return 'Ho ho!';
    })->name('macaco');
});

// Rota para testar a view blade-test
Route::get('blade-test', function () {
    return view('blade-test');
})->name('blade-test');

// Rota para a página de contato com controlador
Route::get('contact', [TestController::class, 'contact'])->name('contact');
Route::get('contact/store', [TestController::class, 'store'])->name('contact.store');

// Rota para a página de contato com controlador de recursos
Route::resource('blog', BlogController::class);
