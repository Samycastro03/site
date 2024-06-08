<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function quemSomos()
    {
        return view('quem-somos');
    }

    public function contato()
    {
        return view('contato');
    }
}
