<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Biblioteca IU Digital</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

 
</head>

<body>

    <section>
		<div class="row g-0">
			<div class="col-lg-7">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-secondary" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-secondary" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item  min-vh-100 active">
                            <img src="{{ asset('images/img01.png') }}">
						</div>
						<div class="carousel-item min-vh-100">
                            <img src="{{ asset('images/img02.png') }}">
						</div>
						<div class="carousel-item  min-vh-100">
                            <img src="{{ asset('images/img03.png') }}">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
            <div class="col-lg-5">
				<div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
					<img src="{{ asset('images/logoLogin1.png') }}" class="img-fluid">
				</div>
				<div class="px-lg-5 py-lg-4 p-4">
					<h1 class="font-weigth-blod mb-4">Sistema de Biblioteca</h1>
					<form class="mb-5">
						<!--<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label font-weigth-blod">Email</label>
							<input type="email"  class="form-control" placeholder="Ingresa tu email" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label font-weigth-blod">Contraseña</label>
							<input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
							<a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a>
						</div>
						<a href="#"><button type="button" class="btn btn-primary w-100">Iniciar sesión</button></a> -->
            				@if (Route::has('login'))
								@auth
								<a href="{{ url('dashboard') }}" class="btn btn-primary w-100 mb-2">Iniciar sesión</a>
							@else
								<a href="{{ url('/login') }}" class="btn btn-primary w-100 mb-2">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ url('/register') }}" class="btn btn-dark w-100">Registrarse</a>
           					 @endif
        					@endauth
        					@endif
					</form>
				</div>
			</div>
		</div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>

</html>
