<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');

// Route::get('/menu', function () {
//     return view('menu');
// })->name('menu');

Route::resource('/pizzas', PizzaController::class);
Route::resource('/categorias', CategoriaController::class);

Route::get('/combos', function () {
    return view('combos');
})->name('combos');

Route::get('/promos', function () {
    return view('promos');
})->name('promos');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/carrito', [CartController::class, 'index'])->name('carrito.index');
Route::post('/carrito', [CartController::class, 'store'])->name('carrito.store');
Route::post('/carrito/increase', [CartController::class, 'increaseQuantity'])->name('carrito.increase');
Route::post('/carrito/decrease', [CartController::class, 'decreaseQuantity'])->name('carrito.decrease');
Route::post('/carrito/removeItem', [CartController::class, 'removeItem'])->name('carrito.remove');
Route::delete('/carrito/destroy', [CartController::class, 'destroy'])->name('carrito.destroy');

Route::get('/checkout', [PedidoController::class, 'checkout'])->name('pedido.checkout');
Route::resource('/pedidos', PedidoController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
