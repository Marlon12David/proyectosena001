@extends('layouts.app2')
@section('titulo', 'Carrito')

@section('content')
    <div class="mb-20">
        @if (Cart::count() > 0)
            <div class="flex items-center justify-center mt-20">
                <table class="border-collapse">
                    <thead>
                        <tr>
                            <th class=" bg-indigo-500 text-black px-5 py-2">IMAGEN</th>
                            <th class=" bg-indigo-500 text-black px-5 py-2">NOBMRE</th>
                            <th class=" bg-indigo-500 text-black px-5 py-2">PRECIO</th>
                            <th class=" bg-indigo-500 text-black px-5 py-2">CANTIDAD</th>
                            <th class=" bg-indigo-500 text-black px-5 py-2">TOTAL</th>
                            <th class=" bg-indigo-500 text-black px-5 py-2">ACCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr class="border-b-2">
                                <td class="px-2 py-2"><img src="{{ asset('images/pizzas/pizza_'.$item->id.'.jpg') }}" alt="{{ $item->name }}" width="90"></td>
                                <td class="text-center px-2">{{ $item->name }}</td>
                                <td class="text-center px-2">${{ number_format($item->price, 0, ',', '.') }}</td>
                                <td class="text-center px-2">
                                    <div class="flex justify-evenly">
                                        <form action="{{ route('carrito.decrease') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <input type="submit" name="btn" class="btn bg-red-900 hover:bg-red-900 btn-sm" value="-">
                                        </form>
                                            <p class="pt-1"> {{ $item->qty }} </p>
                                        <form action="{{ route('carrito.increase') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <input type="submit" name="btn" class="btn bg-green-900 hover:bg-green-900 btn-sm" value="+">
                                        </form>
                                    </div>
                                    
                                </td>
                                <td class="text-center px-2">${{ number_format($item->subtotal(), 0, ',', '.') }}</td>
                                <td class="text-center px-2">
                                    <form action="{{ route('carrito.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                        <input type="submit" name="btn" class="cursor-pointer" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <div class="flex justify-around mt-10">
                    <a class="btn btn-primary btn-xs text-xl h-auto" href="{{ route('pizzas.index') }}">Seguir Comprando</a>
                    <form action="{{ route('carrito.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary btn-xs text-xl h-auto" type="submit">Vaciar Carrito</button>
                    </form>
                </div>
            </div>
            <div class="flex items-center justify-center mt-10">
                <div class="flex flex-col items-center text-xl bg-indigo-700 w-60 rounded-xl text-white">
                    <p class="my-3 font-extrabold">Total carrito</p>
                    <p class="mb-2">Subtotal: ${{ number_format(Cart::subtotal(), 0, ',', '.')}}</p>
                    <p class="mb-2">IVA: {{ Cart::tax() }}%</p>
                    <p class="mb-2">Total: ${{ number_format(Cart::total(), 0, ',', '.')}}</p>
                    <a class="bg-indigo-900 w-full py-2 text-center rounded-xl" href="{{ route('pedido.checkout') }}">Realizar Checkout</a>
                </div>
            </div>
          
        @else

            <div class="flex flex-col items-center my-24 py-1">
                <p class="mb-5 text-2xl">¡Tu carrito está vacío!</p>
                <a class="btn btn-primary btn-xs text-2xl h-auto" href="{{ route('pizzas.index') }}">Ver Productos</a>
            </div>

        @endif
    </div>
@endsection
    