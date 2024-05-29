<x-app-layout>
   
    <div class="h-96 bg-orange-100 text-center">
        <h1 class="text-black text-5xl font-bold uppercase pt-28 mb-5">Nombre empresa</h1>
        <p class="text-xl text-black sm:px-0 md:px-20 lg:px-64">
          Nisi tempore molestias cum amet? Numquam optio voluptas 
          consequuntur sunt qui hic illum adipisci, commodi, quidem 
          quis sit porro. Cum, inventore molestias.
        </p>
    </div>


    <div class="py-24 bg-gray-600 text-center">
        <h2 class="text-5xl text-white uppercase mb-4">Nuestro menu</h2>
        <p class="text-xl text-white mb-8 sm:px-0 md:px-20 lg:px-60">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Nisi tempore molestias cum amet? Numquam optio voluptas 
          consequuntur sunt qui hic illum adipisci, commodi, quidem 
          quis sit porro. Cum, inventore molestias.
        </p>

      <div class="flex mt-16 sm:flex-col lg:flex-row">
            <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/pizzamenu.png" alt="Pizzas">
                <h3 class="my-2 text-white">Pizzas</h3>
                <p class="mb-4 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="{{ route('pizzas.index') }}" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>
      
          <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/bebidasmenu.jpg" alt="Bebidas">
                <h3 class="my-2 text-white">Bebidas</h3>
                <p class="mb-4 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
          </div>

            <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/complementomenu.jpg" alt="Complementos">
                <h3 class="my-2 text-white">Complementos</h3>
                <p class="mb-4 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>
        </div>  
    </div>

    <div class="py-24 bg-orange-100 text-center">
            <h2 class="text-5xl text-black uppercase mb-4">Nuestros combos</h2>
            <p class="text-xl text-black mb-8 sm:px-0 md:px-20 lg:px-60">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nisi tempore molestias cum amet? Numquam optio voluptas 
            consequuntur sunt qui hic illum adipisci, commodi, quidem 
            quis sit porro. Cum, inventore molestias.
            </p>

        <div class="flex mt-16 sm:flex-col lg:flex-row">
            <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/pizzapromocion.jpg" alt="Pizzas">
                <h3 class="my-2 text-black">Comobo 1</h3>
                <p class="mb-4 text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>
        
            <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/pizzapromocion.jpg" alt="Bebidas">
                <h3 class="my-2 text-black">Comobo 2</h3>
                <p class="mb-4 text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>

            <div class="px-6 sm:mb-5">
                <img class="w-52 h-36 mx-auto" src="images/pizzapromocion.jpg" alt="Complementos">
                <h3 class="my-2 text-black">Comobo 3</h3>
                <p class="mb-4 text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>
        </div>  
    </div>

    <div class="flex">
        <div class="bg-gray-600 lg:w-1/2 py-28 pl-28 pr-32 sm:max-md:py-6 md:max-lg:py-6">
            <h2 class="text-5xl text-white font-bold">Promocion 1</h2>
            <p class="text-2xl text-white my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8 sm:">Conoce más</a>
        </div>
        <div class="lg:w-1/2 bg-cover bg-[url('https://panpaya.com.co/storage/products/203/37fb8283fe6cba24f55f35552fe9d323.jpg')]"></div> 
    </div>

    <div class="flex">
        <div class="lg:w-1/2 bg-cover bg-[url('https://panpaya.com.co/storage/products/203/37fb8283fe6cba24f55f35552fe9d323.jpg')]"></div>
        <div class="bg-gray-600 lg:w-1/2 py-28 pl-28 pr-32 sm:max-md:py-6 md:max-lg:py-6">
            <h2 class="text-5xl text-white font-bold ">Promocion 2</h2>
            <p class="text-2xl text-white my-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
        </div>
    </div>

    <div class="bg-white py-24 text-center">
        <h2 class="text-5xl text-black uppercase mb-5">Acerca de nosotros</h2>
        <p class="text-xl text-black mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="flex sm:flex-col lg:flex-row">
            <div class="py-4 px-14">
                <img class="mx-auto mb-5" src="images/mision.jpg" alt="Mision">
                <h3 class="text-4xl text-black uppercase">Mision</h3>
                <p class="text-xl my-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nisi tempore molestias cum amet? Numquam optio voluptas 
                    consequuntur sunt qui hic illum adipisci, commodi, quidem 
                    quis sit porro. Cum, inventore molestias.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>

            <div class="py-4 px-14">
                <img class="mx-auto mb-5" src="images/vision.jpg" alt="Vision">
                <h3 class="text-4xl text-black uppercase">Vision</h3>
                <p class="text-xl my-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nisi tempore molestias cum amet? Numquam optio voluptas 
                    consequuntur sunt qui hic illum adipisci, commodi, quidem 
                    quis sit porro. Cum, inventore molestias.
                </p>
                <a href="#" class="bg-orange-300 text-black uppercase py-3 px-8">Conoce más</a>
            </div>
        </div>
    </div>


</x-app-layout>