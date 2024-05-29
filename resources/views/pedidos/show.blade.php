@extends('layouts.app2')
@section('titulo', 'Detalles pedido')

@section('content')

<div class="mb-20">
    
    <div class="flex items-center justify-center mt-10">
        <div class="bg-indigo-700 w-fit px-5 text-center text-white rounded-xl">
            <h1 class="py-2">Pedido #{{ $pedido->id }}</h1>
            <p class="py-2">Dirección: {{ $pedido->direccion }}</p>
            <p class="py-2">Método de Pago: {{ $pedido->metodo_pago }}</p>
            <p class="py-2">Estado: {{ $pedido->estado }}</p>
            <p class="py-2">Fecha: {{ $pedido->fecha }}</p>
            
            <h2 class="text-xl font-bold py-2">pizzas del Pedido</h2>
            <table>
                <thead>
                    <tr>
                        <th class="px-2 text-center">Nombre</th>
                        <th class="px-2 text-center">Cantidad</th>
                        <th class="px-2 text-center">Precio</th>
                        <th class="px-2 text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedido->pizzas as $pizza)
                        <tr>
                            <td class="px-2 text-center">{{ $pizza->nombre }}</td>
                            <td class="px-2 text-center">{{ $pizza->pivot->cantidad }}</td>
                            <td class="px-2 text-center">${{ number_format($pizza->precio, 0, ',', '.') }}</td>
                            <td class="px-2 text-center">${{ number_format($pizza->pivot->cantidad * $pizza->pivot->precio, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <p class="py-2">Total del Pedido: ${{ number_format($pedido->total, 0, ',', '.') }}</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <a class="btn btn-primary btn-xs text-xl h-auto" href="{{ route('pedidos.index') }}">Volver a mis pedidos</a>
    </div>
</div>

@endsection