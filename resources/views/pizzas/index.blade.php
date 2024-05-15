@extends('layouts.app2')
@section('titulo', 'Mostar pizzas')

@section('content')
    <div class="mb-20">
        <div class="flex justify-end m-4">
            <a href="{{ route('pizzas.create') }}" class="btn btn-outline btn-sm">Crear Pizza</a>
        </div>
        <div class="flex justify-center mx-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
                @foreach ($pizzas as $pizza)
                    <div class="card w-64 bg-base-100 shadow-xl">
                        <figure>
                            @if(file_exists('images/pizzas/pizza_' . $pizza->id . '.jpg'))
                                <img src="{{ asset('images/pizzas/pizza_' . $pizza->id . '.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg h-40 w-full object-cover">
                            @else
                                <img src="{{ asset('images/pizzas/default.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg">
                            @endif
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{$pizza->nombre}}</h2>
                            <div class="badge badge-success badge-outline">Categoría: {{$pizza->categoria->nombre}}</div>
                            <p>{{Str::limit($pizza->descripcion, 80)}}</p>

                            {{-- precio y stock--}}
                            <div class="flex space-x-4">
                                <div class="badge badge-neutral">${{number_format($pizza->precio, 0, ',', '.')}}</div>
                                <div class="badge badge-ghost">{{$pizza->stock}} en stock</div>
                            </div>
                        
                            <div class="card-actions justify-end mt-5">
                                {{-- Editar --}}
                                <a href="{{ route('pizzas.edit', $pizza->id) }}" class="btn btn-warning btn-xs">Editar</a>
                                {{-- Eliminar --}}
                                {{-- Si existen pedidos con esta pizza no se puede eliminar --}}
                                {{-- @if ($pizza->pedidos->count() == 0) --}}
                                    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Desea eliminar el pizza {{ $pizza->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
                                    </form>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection