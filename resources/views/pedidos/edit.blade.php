@extends('layouts.app2')
@section('titulo', 'Estado pedido')

@section('content')
    <div class="my-10">
        <div class="flex justify-center">
            <div class="card w-96 shadow-2xl bg-base-100">
                <div class="card-body">
                    <p>Cantidad: {{$pedido->pizzas[0]->pivot->cantidad}}</p>
                    <p>Precio: {{ '$'.number_format($pedido->pizzas[0]->pivot->precio, 0, ',', '.') }}</p>
                    <p>Total: {{ '$'.number_format($pedido->pizzas[0]->pivot->precio * $pedido->pizzas[0]->pivot->cantidad, 0, ',', '.') }}</p>
                    
                    <form action="{{route('pedidos.update', $pedido)}}" method="POST">
                        @csrf
                        @method('put')
                        
                        <div class="form-control mb-2">
                            <label for="estado">Estado del pedido:</label>
                            <select name="estado" id="estado" class="select select-bordered">
                                @if ($pedido->estado == 'pendiente')
                                    <option value="pendiente" selected>Pendiente</option>
                                    <option value="enviado">Enviado</option>
                                    <option value="entregado">Entregado</option>
                                @elseif ($pedido->estado == 'enviado')
                                    <option value="pendiente">Pendiente</option>
                                    <option value="enviado" selected>Enviado</option>
                                    <option value="entregado">Entregado</option>
                                @else
                                    <option value="pendiente">Pendiente</option>
                                    <option value="enviado">Enviado</option>
                                    <option value="entregado" selected>Entregado</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-control">
                            <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
                            <a href="{{ route('pedidos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection