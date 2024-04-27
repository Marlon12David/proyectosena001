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


Route::get('/menu', function () {
    return view('menu');
});


Route::get('/combos', function () {
    $comboz = [
        ['nombre' => 'Pizzaroni', 'bebida' => 'CocaCola', 'complemento' => 'Palitos de queso  y arequipe', 'precio' => '$35.000'],
        ['nombre' => 'Pizzariana', 'bebida' => 'Pepsi', 'complemento' => 'Chocomaní', 'precio' => '$43.000'],
        ['nombre' => 'Pizzollo', 'bebida' => 'Sprite', 'complemento' => 'Cupcake', 'precio' => '$38.000'],
        ['nombre' => 'Pizzaroni', 'bebida' => 'CocaCola', 'complemento' => 'Palitos de queso  y arequipe', 'precio' => '$35.000'],
        ['nombre' => 'Pizzariana', 'bebida' => 'Pepsi', 'complemento' => 'Chocomaní', 'precio' => '$43.000'],
        ['nombre' => 'Pizzollo', 'bebida' => 'Sprite', 'complemento' => 'Cupcake', 'precio' => '$38.000'],

    ];
    return view('combos', ['comboz' => $comboz]);
});

Route::get('/promociones', function () {
    $promos = [
        ['nombre' => 'Pizza extragrande', 'descripcion' => 'Pizza Extragrande Masa Original 4 Ing + Acompañamiento + Gaseosa 3L', 'precio' => '$50.000'],
        ['nombre' => 'Pizza grande', 'descripcion' => 'Pizza Grande Masa Original 3 Ing + Acompañamiento + Gaseosa 2L', 'precio' => '$45.000'],
        ['nombre' => 'Pizza mediana', 'descripcion' => 'Pizza Mediana Masa Original 2 Ing + Acompañamiento + Gaseosa 1,5L', 'precio' => '$40.000'],
        ['nombre' => 'Pizza pequeña', 'descripcion' => 'Pizza Pequeña Masa Original 1 Ing + Acompañamiento + Gaseosa 600ml', 'precio' => '$35.000'],
    ];
    return view('promociones', ['promos' => $promos]);
});

Route::get('/aboutus', function () {
    return view('aboutus');
});