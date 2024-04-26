<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\Pagina2Controller;
use App\Http\Controllers\Pagina3Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [PaginaController::class, 'index'])->name('home');

Route::get('/reservas', [Pagina2Controller::class, 'reservas']);

Route::get('/criarsala', [Pagina3Controller::class, 'criarsala']);

Route::get('/enviar', [Pagina3Controller::class, 'enviar'])->name('reservas');





