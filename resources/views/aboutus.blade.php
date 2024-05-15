@extends('layouts.app2')
@section('titulo','acerca de nosotros')
@section('content')
    <div class="bg-white py-24 text-center">
        <h2 class="text-5xl text-black uppercase mb-5">Acerca de nosotros</h2>
        <p class="text-xl text-black mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="flex sm:flex-col lg:flex-row">
            <div class="py-4 px-14">
                <img class="mx-auto mb-5" src="img/mision.jpg" alt="Mision">
                <h3 class="text-4xl text-black uppercase">Mision</h3>
                <p class="text-xl my-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nisi tempore molestias cum amet? Numquam optio voluptas 
                    consequuntur sunt qui hic illum adipisci, commodi, quidem 
                    quis sit porro. Cum, inventore molestias.
                </p>
            </div>

            <div class="py-4 px-14">
                <img class="mx-auto mb-5" src="img/vision.jpg" alt="Vision">
                <h3 class="text-4xl text-black uppercase">Vision</h3>
                <p class="text-xl my-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nisi tempore molestias cum amet? Numquam optio voluptas 
                    consequuntur sunt qui hic illum adipisci, commodi, quidem 
                    quis sit porro. Cum, inventore molestias.
                </p>
            </div>
        </div>
    </div>
@endsection

