<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        var_dump($request->all());
        // Aqui você pode salvar os dados no banco de dados se desejar
        return view('contato');
    }
}
