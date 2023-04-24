<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <nav class="nnavbar navbar-light menu">
        <div class="container-fluid">
        <a href="{{ url('/dashboard') }}" >
            <img src="{{ asset('images/logoLogin1.png') }}" >
        </a>
        <div class="d-flex" role="search" id="navbarNav">
            <div class="dropdown">
                <button class="btn menu dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        ERICK ZAMBRANO
                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard') }}" class="nav-link">Iinicio</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard/libro') }}" class="nav-link">Libro</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard/ejemplar') }}" class="nav-link">Ejemplar</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard/autor') }}" class="nav-link">Autor</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard/editorial') }}" class="nav-link">Editorial</a>
                </li>
            </ul>
            </div>
        </div>    
        </div>  


        {{--  --}}
        <x-dropdown-link :href="route('profile.edit')">
            {{ __('Perfil') }}
        </x-dropdown-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Salir') }}
            </x-dropdown-link>
        </form>
         {{--  --}}

    </nav>   
    
    

    @yield('contenido')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



</body>
</html>