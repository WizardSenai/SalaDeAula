<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ReservaDeSalaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'index'])->name('home');

    Route::get('/reservas', function(){
        return view('reservas');
        });

        Route::get('/pagina', function () {
            return view('pagina');
        });

        Route::get('/reserva_de_sala_de_aula/create',[ReservaDeSalaController::class,'create'])->name('reserva_de_sala_de_aula.create');
        Route::post('/reserva_de_sala_de_aula/create', [ReservaDeSalaController::class, 'store']);

        Route::get('/reserva_de_sala_de_aula/update/{id}', [ReservaDeSalaController::class, 'update'])->name('reserva_de_sala_de_aula.update');
        Route::post('/reserva_de_sala_de_aula/update/{id}', [ReservaDeSalaController::class, 'edit']);

        Route::get('/reserva_de_sala_de_aula/delete/{id}', [ReservaDeSalaController::class, 'delete'])->name('reserva_de_sala_de_aula.delete');
