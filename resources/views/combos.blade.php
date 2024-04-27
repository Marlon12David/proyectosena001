@extends('layouts.app2')
@section('titulo','Combos')
@section('contenido')
    <div class="bg-orange-300">
        <h2 class="pt-10 text-5xl text-black text-center uppercase">Nuestros combos</h2>
        <div class="grid grid-cols md:grid-cols-2 xl:grid-cols-3 gap-5 mt-10 pb-10 justify-items-center">
            @foreach ( $comboz as $combo )
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                  <img src="https://www.saborusa.com/ni/wp-content/uploads/sites/19/2019/11/Animate-a-disfrutar-una-deliciosa-pizza-de-salchicha-Foto-destacada.png" alt="Shoes" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">{{ $combo['nombre'] }}</h2>
                  <p>Incluye {{ $combo['bebida'] }} y   {{ $combo['complemento'] }}</p>
                  <div class="card-actions">
                    <button class="btn btn-primary">{{ $combo['precio'] }}</button>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection 
  