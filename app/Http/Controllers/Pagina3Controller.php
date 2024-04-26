<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina3Controller extends Controller
{
    public function criarsala(){
        return view('criarsala');


    }
    //

    public function enviar(Request $request)
    {
        return redirect('reservas');
    }
}
