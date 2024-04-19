<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

class Controller extends Controller
{
    public function metodo ()
    {
        return view('tela1');
    }
}