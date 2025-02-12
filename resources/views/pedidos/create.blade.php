@extends('layouts.app2')
@section('titulo', 'Ordenar pizza')

@section('content')
    <div class="my-10">
        <div class="flex justify-center">
            <div class="card w-96 shadow-2xl bg-base-100">
                <div class="card-body">
                    <figure>
                        @if(file_exists('images/pizzas/pizza_' . $pizza->id . '.jpg'))
                            <img src="{{ asset('images/pizzas/pizza_' . $pizza->id . '.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg h-40 w-full object-cover">
                        @else
                            <img src="{{ asset('images/pizzas/default.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg">
                        @endif
                    </figure>
                    <p class="text-sm">{{$pizza->descripcion}}</p>

                    {{-- precio y stock--}}
                    <div class="flex space-x-4">
                        <div class="badge badge-neutral">${{number_format($pizza->precio, 0, ',', '.')}}</div>
                        <div class="badge badge-ghost">{{$pizza->stock}} en stock</div>
                    </div>
                    <form action="{{route('pedidos.store')}}" method="POST">
                        @csrf
                            <input type="hidden" name="pizza_id" value="{{$pizza->id}}">
                            <input type="hidden" name="precio" value="{{$pizza->precio}}">
                        {{-- Cantidad --}}
                        <div class="form-control">
                            <label class="label" for="cantidad">
                                <span class="label-text">Cantidad</span>
                            </label>
                            <select name="cantidad" class="select select-bordered">
                                <option value="1">1</option>
                                @if ($pizza->stock >= 2)
                                    <option value="2">2</option>
                                @endif
                                @if ($pizza->stock >= 3)
                                    <option value="3">3</option>
                                @endif
                            </select>
                        </div>
                        {{-- Dirección de envío --}}
                        <p class="mt-2">
                            <span class="font-semibold">Dirección de envío</span><br>
                            {{auth()->user()->address}}

                        </p>
                        
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Ordenar</button>
                            <a href="{{ route('pizzas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection