<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'index'])->name('home');

    Route::get('reservas', function(){
        return view('reservas');
        });
