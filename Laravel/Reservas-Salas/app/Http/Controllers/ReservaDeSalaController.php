<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class ReservaDeSalaController extends Controller
{
    public function create(){
        return view('reserva_de_sala_de_aula');
    }

    public function store(Request $request){
        $request->validate(['name'=>['required','max:255']
        ]);
    
        $reservas = new Reservas();
        $reservas->name = $request->name;
        $reservas->date = $request->date;
        $reservas->hour = $request->hour;
        $reservas->responsible = $request->responsible;

        $reservas->save();

        return redirect()->route('reserva_de_sala_de_aula.create')->with('success', 'Reserva feita com sucesso');
    }

    public function update($id){
        $reservas = Reservas::find($id);

        return view('reserva_de_sala_de_aula', compact('reservas'));
    }

    public function edit(Request $request, $id){
        $request->validate([
            'name' => ['required', 'max:255']
        ]);

        $reservas = Reservas::find($id);
        $reservas->name = $request->name;
        $reservas->date = $request->date;
        $reservas->hour = $request->hour;
        $reservas->responsible = $request->responsible;

        $reservas->save();

        return redirect()->route('reserva_de_sala_de_aula.update', ['id' => $id])->with('success', 'Reserva atualizada com sucesso');
    }

    public function delete($id){
        $reservas = Reservas::find($id);

        $reservas->delete();

        return view('reserva_de_sala_de_aula')->with('success', 'Reserva excluída com sucesso');
    }
}