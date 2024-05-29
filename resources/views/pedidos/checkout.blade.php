@extends('layouts.app2')
@section('titulo', 'Checkout')

@section('content')
    <div class="mb-20">
        @if (Cart::count() > 0)
            <div class="flex flex-col items-center mt-10">
                <h2 class="mb-5 text-3xl">Resumen del Pedido</h2>
                <table class="border-collapse">
                    <thead>
                        <tr>
                            <td class=" bg-indigo-500 text-black px-5 py-2">Imagen</td>
                            <td class=" bg-indigo-500 text-black px-5 py-2">Nombre</td>
                            <td class=" bg-indigo-500 text-black px-5 py-2">precio</td>
                            <td class=" bg-indigo-500 text-black px-5 py-2">cantidad</td>
                            <td class=" bg-indigo-500 text-black px-5 py-2">total</td>
                        </tr>
                    </thead>
                    @foreach ($cartItems as $item)
                    <tbody>
                        <tr class="border-b-2">
                            <td class="px-2 py-2"><img src="{{ asset('images/pizzas/pizza_'.$item->id.'.jpg') }}" alt="{{ $item->name }}" width="90"></td>
                            <td class="text-center px-2">{{ $item->name }}</td>
                            <td class="text-center px-2">${{ number_format($item->price, 0, ',', '.') }}</td>
                            <td class="text-center px-2">{{ $item->qty }}</td>
                            <td class="text-center px-2">${{ number_format($item->subtotal(), 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-center mt-10">
                <div class="bg-indigo-700 w-fit px-5 text-center text-white rounded-xl">
                    <div class="py-1"> 
                        <p class="text-2xl">Total del Pedido: ${{number_format(Cart::total(), 0, ',', '.') }}</p>
                    </div>
                
                    <h2 class="text-2xl my-3">Información de Envío</h2>
                    <form action="{{route('pedidos.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="total" value="{{ Cart::total() }}">
                        <div class="mb-4">
                            <p class="text-xl">
                                <span class="font-semibold">Dirección de envío:</span><br>
                                {{auth()->user()->address}}
        
                            </p>
                        </div>
                        <div class="mb-4">
                            <label class="text-xl" for="metodo_pago">Método de Pago:</label><br>
                            <select class="text-black" id="metodo_pago" name="metodo_pago" required>
                                <option class="text-black" value="tarjeta_credito">Tarjeta de Crédito</option>
                                <option class="text-black" value="paypal">PayPal</option>
                                <option class="text-black" value="contra_entrega">Contra Entrega</option>
                            </select>
                        </div>
                        <div class="text-xl bg-indigo-900 mb-5 w-fit p-3 mx-auto rounded-xl">
                            <button type="submit">Confirmar Pedido</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="btn btn-primary btn-xs text-xl h-auto ml-5 mb-5">
                <a class="text-xl" href="{{ route('carrito.index') }}">Volver al Carrito</a>
            </div>

        @else

            <div class="flex flex-col items-center my-24 py-1">
                <p class="mb-5 text-2xl">¡No tienes nada por confirmar!</p>
                <a class="btn btn-primary btn-xs text-2xl h-auto" href="{{ route('pizzas.index') }}">Ver Productos</a>
            </div>

        @endif
    </div>
@endsection