@extends('layouts.app2')
@section('titulo', 'Mostrar pedidos')

@section('content')
    <div class="flex justify-center my-11">
        <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                    @if(auth()->user()->rol == 'admin')
                        <th>Id Pedido</th>
                        <th>Fecha y hora</th>
                        <th>Cliente</th>
                        <th>Dirección</th>
                        <th>Método de pago</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    @else
                        <th>Id pedido</th>
                        <th>Fecha y hora</th>
                        <th>Dirección</th>
                        <th>Método de pago</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    @endif

                </tr>
              </thead>
              <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        @if(auth()->user()->rol == 'admin')
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->fecha }}</td>
                            <td>{{ $pedido->user->name }}</td>
                            <td>{{ $pedido->user->address }}</td>
                            <td>{{ $pedido->metodo_pago }}</td>
                            <td>{{ $pedido->user->email }}</td>
                            <td>
                                @if ($pedido->estado == 'pendiente')
                                    <span class="badge badge-warning">{{ $pedido->estado }}</span>
                                @elseif ($pedido->estado == 'enviado')
                                    <span class="badge badge-primary">{{ $pedido->estado }}</span>
                                @else
                                    <span class="badge badge-success">{{ $pedido->estado }}</span>
                                @endif
                            </td>
                            <td>{{ '$'.number_format($pedido->total, 0, ',', '.') }}</td>
                            {{-- Botones para editar o eliminar pedido para el administrador --}}
                            <td class="flex space-x-2">
                                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning btn-xs normal-case">Estado</a>
                                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar el pedido {{ $pedido->id }}?')" class="btn btn-error btn-xs normal-case">Eliminar</button>
                                </form>
                            </td>
                        @else
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->fecha }}</td>
                            <td>{{ $pedido->direccion }}</td>
                            <td>{{ $pedido->metodo_pago }}</td>
                            <td>{{ '$'.number_format($pedido->total, 0, ',', '.') }}</td>
                            <td>
                                @if ($pedido->estado == 'pendiente')
                                    <span class="badge badge-warning">{{ $pedido->estado }}</span>
                                @elseif ($pedido->estado == 'enviado')
                                    <span class="badge badge-primary">{{ $pedido->estado }}</span>
                                @else
                                    <span class="badge badge-success">{{ $pedido->estado }}</span>
                                @endif
                            </td>
                            <td><a href="{{ route('pedidos.show', $pedido->id) }}">Detalles</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{-- Paginacion --}}
            <div class="flex justify-center mt-4">
                {{ $pedidos->links() }}
            </div>
        </div>
    </div>
@endsection