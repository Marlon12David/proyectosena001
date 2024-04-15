<?php

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
    return view('welcome');
});

Route::get('/combos', function () {
    $comboz = [
        ['nombre' => 'Pizzaroni', 'bebida' => 'CocaCola', 'complemento' => 'Palitos de queso  y arequipe'],
        ['nombre' => 'Pizzaiana', 'bebida' => 'Pepsi', 'complemento' => 'Chocomaní'],
        ['nombre' => 'Pizzollo', 'bebida' => 'Sprite', 'complemento' => 'Cupcake'],

    ];
    return view('combos', ['comboz' => $comboz]);
});