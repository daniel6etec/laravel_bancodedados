<?php

use App\Models\Servico;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $meuPrimeiroServico = new Servico;
    $meuPrimeiroServico->nome = "pintura";
    $meuPrimeiroServico->telefone = "(11)99999-5555";
    $meuPrimeiroServico->save();

    return view('welcome');
});
