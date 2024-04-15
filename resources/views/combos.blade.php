<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Combos</title>
</head>
<body>
    
<header>
    <div class="h-20 bg-cyan-400">
        <div class="flex items-center justify-between">
            <a href="/" class="text-2xl ml-4">LOGO</a>
            <nav >
                <ul class="flex items-center">
                    <li class="mx-4 my-6 hover:text-white"><a href="#">MENÚ</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">COMBOS</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">PROMOCIONES</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">ACERCA DE NOSOTROS</a></li>
                    <li class="mx-4 my-6 hover:text-white"><a href="#">INICIAR SESIÓN</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section>
    <div class="bg-orange-300">
        <h2 class="pt-10 text-6xl text-center">Nuestros combos</h2>
        <ul class="pt-10 text-center">
            @foreach ( $comboz as $combo )
            <li class="pb-14">
                {{ $combo['nombre'] }} con
                {{ $combo['bebida'] }} y
                {{ $combo['complemento'] }}
                <img class="block my-0 mx-auto pt-10 w-64" src="https://panpaya.com.co/storage/products/203/37fb8283fe6cba24f55f35552fe9d323.jpg" alt="">
            </li>
            @endforeach
        </ul>
    </div>
</section>

</body>
</html>