@extends('layouts.app2')
@section('titulo','menu')
@section('contenido')
    <div class="py-24 bg-orange-300 text-center">
        <h2 class="text-5xl text-black uppercase mb-4">Nuestro menu</h2>
        <p class="text-xl text-black mb-8 sm:px-0 md:px-20 lg:px-60">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nisi tempore molestias cum amet? Numquam optio voluptas 
            consequuntur sunt qui hic illum adipisci, commodi, quidem 
            quis sit porro. Cum, inventore molestias.
        </p>

        <div class="flex mt-16 sm:flex-col lg:flex-row justify-evenly">
            <div class="px-6 sm:mb-5">
                <a href="#"><img class="w-52 h-36 mx-auto mb-5" src="img/pizzamenu.png" alt="Pizzas"></a>
                <a class="my-2 text-black" href="#">Pizzas</a>
            </div>
        
            <div class="px-6 sm:mb-5">
                <a href="#"><img class="w-52 h-36 mx-auto mb-5" src="img/bebidasmenu.jpg" alt="Bebidas"></a> 
                <a class="my-2 text-black" href="#">Bebidas</a>
            </div>

            <div class="px-6 sm:mb-5">
                <a href="#"><img class="w-52 h-36 mx-auto mb-5" src="img/complementomenu.jpg" alt="Complementos"></a>
                <a class="my-2 text-black" href="#">Complementos</a>
            </div>
        </div>  
    </div>
@endsection
