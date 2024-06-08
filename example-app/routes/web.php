<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/quem-somos', [PageController::class, 'quemSomos'])->name('quem-somos');
Route::get('/contato', [PageController::class, 'contato'])->name('contato');
Route::get('/upload-imagem', function () {
    return view('form');
});
Route::post('/enviar-contato', 'App\Http\Controllers\ContatoController@enviar')->name('enviar-contato');
Route::post('/upload-imagem', [ImagemController::class, 'upload'])->name('upload.imagem');