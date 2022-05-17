<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevStagram - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="bg-gray-200">

    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            <nav class="flex gap-2">
                <a  href="" 
                    class="font-bold uppercase text-gray-600">
                    Login
                </a>
                <a  href="{{ route('register') }}" 
                    class="font-bold uppercase text-gray-600">
                    Crear Cuenta
                </a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('title')
        </h2>

        @yield('content')
    </main>
    
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados &copy; {{ now()->year }}
    </footer>

</body>
</html>