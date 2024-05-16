<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //si el usuario es admin, mostrar todos los pedidos (con paginación) sino mostrar solo los pedidos del usuario logueado
        if (auth()->user()->rol === 'admin') {
            $pedidos = Pedido::orderBy('fecha', 'desc')->paginate(10);
        } else {
            $pedidos = Pedido::where('user_id', auth()->user()->id)->orderBy('fecha', 'desc')->paginate(10);
        }
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pizza $pizza)
    {
        return view('pedidos.create', ['pizza' => $pizza]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pizza = Pizza::find($request->pizza_id);
        //Guardar el pedido en la tabla pedidos
        $pedido = Pedido::create([
            'fecha' => now(),
            'estado' => 'pendiente',
            'user_id' => auth()->user()->id,
        ]);
        //Guardar los pizzas en la tabla pivote (pedido_pizza)
        $pedido->pizzas()->attach($pizza->id, [
            'cantidad' => $request->cantidad,
            'precio' => $pizza->precio,
        ]);

        //Restamos la cantidad de pizzas pedidos al stock
        $pizza->stock -= $request->cantidad;
        $pizza->save();

        return to_route('pizzas.index')->with('info', 'Pedido realizado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', ['pedido' => $pedido]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->estado = $request->estado;
        $pedido->save();
        return to_route('pedidos.index')->with('info', 'Se cambió el estado del pedido');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //Eliminar el pedido de la tabla pivote (pedido_pizza)
        $pedido->pizzas()->detach();
        //Eliminar el pedido de la tabla pedidos
        $pedido->delete();
        return to_route('pedidos.index')->with('info', 'Pedido eliminado con éxito');
    }
}
