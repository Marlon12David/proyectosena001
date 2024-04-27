@extends('layouts.app2')
@section('titulo','promociones')
@section('contenido')
    <div class="bg-orange-300">
        <h2 class="pt-10 text-5xl text-black text-center uppercase">Nuestras promociones</h2>
        <div class="grid grid-cols lg:grid-cols-2 gap-5 mt-10 pb-10 justify-items-center">
            @foreach ($promos as $promo)
            <div class="card card-compact w-96 bg-base-100 shadow-xl">
                <figure><img src="https://www.laespanolaaceites.com/wp-content/uploads/2019/06/pizza-con-chorizo-jamon-y-queso-1080x671.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">{{ $promo['nombre'] }}</h2>
                <p>{{ $promo['descripcion'] }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">{{ $promo['precio'] }}</button>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

