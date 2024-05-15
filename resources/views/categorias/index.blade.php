@extends('layouts.app2')
@section('titulo', 'Mostrar categorías')

@section('content')
    <div class="mb-20">
      <div class="flex justify-end m-4">
          <a href="{{ route('categorias.create') }}" class="btn btn-outline btn-sm">Crear Categoría</a>
      </div>
      <div class="flex justify-center">
          <div class="overflow-x-auto">
              <table class="table table-zebra">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorias as $categoria)
                      <tr>
                          <td>{{ $categoria->nombre }}</td>
                          <td>{{ $categoria->descripcion }}</td>
                          <td class="flex space-x-2">
                              <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-xs">Editar</a>
                              {{-- si la categoria no tiene productos asociados, se puede eliminar --}}
                              @if($categoria->pizzas->count() == 0)
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar la categoría {{ $categoria->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
                                </form>
                              @endif
                          </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
      </div>
    </div>
@endsection