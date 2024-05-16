<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizza::orderBy('nombre')->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();

        if ($categorias->isEmpty()) {
            return redirect()->route('categorias.create')->with('info', '¡Primero debes crear una categoría!');
        }

        return view('pizzas.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {       
            Pizza::create($request->all());
            //Guardar imagen
            $pizza = Pizza::latest('id')->first();
            $imageName= 'pizza_'.$pizza->id.'.'.$request->imagen->extension();
            $request->imagen->move(public_path('images/pizzas'), $imageName);
            return redirect()->route('pizzas.index')->with('info', '¡Pizza creada exitosamente!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        $categorias = Categoria::all();

        return view('pizzas.edit', ['pizza' => $pizza, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update($request->all());
        //Actualizar imagen si existe
        if ($request->imagen) {
            $request->validate([
                'imagen' => 'image|max:4096',
            ],
            [
                'imagen.max' => 'La imagen de la pizza no debe pesar más de 4MB'
            ]);
            $imageName= 'pizza_'.$pizza->id.'.'.$request->imagen->extension();
            $request->imagen->move(public_path('images/pizzas'), $imageName);
        }
        return redirect()->route('pizzas.index')->with('info', '¡Pizza actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        //eliminar imagen si existe
        if (file_exists(public_path('images/pizzas/pizza_'.$pizza->id.'.jpg'))) {
            unlink(public_path('images/pizzas/pizza_'.$pizza->id.'.jpg'));
        }
        return redirect()->route('pizzas.index')->with('info', '¡Pizza eliminada exitosamente!');
    }
}
