<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','proyectosena001')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    
    <header>
        {{-- navbar --}}
        @include('layouts.navbar')
    </header>
    <section>
        @yield('contenido')
    </section>
    <footer>
         {{-- footer --}}
         @include('layouts.footer')
    </footer>

</body>
</html>
