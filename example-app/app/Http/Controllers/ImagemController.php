<?php

// app/Http/Controllers/ImagemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $caminho = public_path('images');
            $imagem->move($caminho, $nomeImagem);
        }

        return redirect()->back();
    }
}
