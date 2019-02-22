<?php

Route::middleware('auth:api')->prefix('v1')->group(function () {
    route::get('/usuario/info', function () {
        return \Auth::user();
        // return request()->user();
    });

    Route::resources([
        'produtos' => 'Api\ProdutoController',
        'usuarios' => 'Api\UserController'
    ]);
});

/*
    Route::resource('produtos', 'ProdutoController');

    Essa declaração de rota resource cria várias rotas para manipular
    uma variedade de ações RESTful no recurso de foto.
    Da mesma forma, o controlador gerado já terá métodos para cada uma
    dessas ações, incluindo notas informando quais URIs e verbos eles
    manipulam.

    +-----------+--------------------------+------------------+----------------------------+
    | Method    | URI                      | Name             | Action                     |
    +-----------+--------------------------+------------------+----------------------------+
    | GET|HEAD  | /produtos                | produtos.index   | ProdutoController@index    |
    | GET|HEAD  | /produtos/{produto}      | produtos.show    | ProdutoController@show     |
    | GET|HEAD  | /produtos/create         | produtos.create  | ProdutoController@create   |
    | POST      | /produtos                | produtos.store   | ProdutoController@store    |
    | GET|HEAD  | /produtos/{produto}/edit | produtos.edit    | ProdutoController@edit     |
    | PUT|PATCH | /produtos/{produto}      | produtos.update  | ProdutoController@update   |
    | DELETE    | /produtos/{produto}      | produtos.destroy | ProdutoController@destroy  |
    +-----------+--------------------------+------------------+----------------------------+

    // Rotas manuais que o tipo resource faz

    Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');
    Route::get('/produtos/{produto}', 'ProdutoController@show')->name('produtos.show');
    Route::get('/produtos/create', 'ProdutoController@create')->name('produtos.create');
    Route::post('/produtos', 'ProdutoController@store')->name('produtos.store');
    Route::get('/produtos/{produto}/edit', 'ProdutoController@edit')->name('produtos.edit');
    Route::put('/produtos/{produto}', 'ProdutoController@update')->name('produtos.update');
    Route::delete('/produtos/{produto}', 'ProdutoController@destroy')->name('produtos.destroy');
*/
