@extends('layouts.app2')
@section('titulo', 'Editar Pizza')

@section('content')
    <div class="my-10">
        <div class="flex justify-center">
            <div class="card w-96 shadow-2xl bg-base-100">
                <div class="card-body">
                    {{-- Imagen --}}
                    <div>
                        @if(file_exists('images/pizzas/pizza_' . $pizza->id . '.jpg'))
                            <img src="{{ asset('images/pizzas/pizza_' . $pizza->id . '.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg h-40 w-full object-cover">
                        @else
                            <img src="{{ asset('images/pizzas/default.jpg') }}" alt="{{$pizza->nombre}}" class="rounded-t-lg">
                        @endif
                    </div>
                    <form action="{{route('pizzas.update', $pizza)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- Categoria --}}
                        <div class="form-control">
                            <label class="label" for="categoria_id">
                                <span class="label-text">Categoría</span>
                            </label>
                            <select name="categoria_id" class="select select-bordered">
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->id == $pizza->categoria_id)
                                        <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                                    @else
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        {{-- Nombre --}}
                        <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del pizza" class="input input-bordered" maxlength="100" value="{{$pizza->nombre}}" required />
                        </div>
                        {{-- Imagen --}}
                        <div class="form-control">
                            <label class="label" for="imagen">
                                <span class="label-text">Cambiar imagen</span>
                            </label>
                            <input type="file" name="imagen" class="file-input file-input-bordered file-input-success file-input-sm w-full max-w-xs"  accept=".jpg" />
                        </div>
                        {{-- Descripcion --}}
                        <div class="form-control">
                            <label class="label" for="descripcion">
                                <span class="label-text">Descripción</span>
                            </label>
                            <input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered" maxlength="255" value="{{$pizza->descripcion}}" />
                        </div>
                        {{-- Precio --}}
                        <div class="form-control">
                            <label class="label" for="precio">
                                <span class="label-text">Precio</span>
                            </label>
                            <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{$pizza->precio}}" required />
                        </div>
                        {{-- Stock --}}
                        <div class="form-control">
                            <label class="label" for="stock">
                                <span class="label-text">Stock</span>
                            </label>
                            <input type="number" name="stock" placeholder="Escriba el stock" class="input input-bordered" value="{{$pizza->stock}}" required />
                        </div>

                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Actualizar pizza</button>
                            <a href="{{ route('pizzas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection