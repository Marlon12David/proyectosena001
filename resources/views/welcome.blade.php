<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    
<header>
    <div class="h-20 bg-cyan-400">
        <div class="flex items-center justify-between">
            <a href="#" class="text-2xl ml-4">LOGO</a>
            <nav >
                <ul class="flex items-center">
                    <li class="mx-4 my-6 hover:text-white"><a href="#">MENÚ</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="combos">COMBOS</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">PROMOCIONES</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">ACERCA DE NOSOTROS</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">INICIAR SESIÓN</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    <div class="h-96 bg-lime-200">
        <h1 class="text-7xl pt-14 text-center uppercase">Nombre empresa</h1>
            <p class="text-xl pt-14 px-64 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Nisi tempore molestias cum amet? Numquam optio voluptas 
                consequuntur sunt qui hic illum adipisci, commodi, quidem 
                quis sit porro. Cum, inventore molestias.
            </p>
    </div>
</main>

<section class="flex">
    <div class="w-1/2 bg-cyan-200 pt-28 pl-28 pb-28 pr-32">
        <h2 class="text-5xl font-bold">Promocion 1</h2>
        <p class="text-2xl mt-6 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" class="bg-white px-8 py-4">Conoce más</a>
    </div>
        <div class="w-1/2 bg-[url('https://panpaya.com.co/storage/products/203/37fb8283fe6cba24f55f35552fe9d323.jpg')]"></div>
</section>

<section class="flex">
    <div class="w-1/2 bg-[url('https://panpaya.com.co/storage/products/203/37fb8283fe6cba24f55f35552fe9d323.jpg')]"></div>
    <div class="w-1/2 bg-cyan-200 pt-28 pl-28 pb-28 pr-32">
        <h2 class="text-5xl font-bold">Promocion 2</h2>
        <p class="text-2xl mt-6 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#" class="bg-white px-8 py-4">Conoce más</a>
    </div>
</section>
</body>
</html>