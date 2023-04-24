{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Libro')
@section('contenido')
@include('dashboard.partials.validation-error')


    <div class="bt-20">
        <div>
            <section class="p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/libro') }}" class="btn btn-primary">Libros</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-secondary text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-person-workspace"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/autor') }}" class="btn btn-dark">Autores</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </section>
        </div>

    </div>

    <div class="bt-20">
        <div>
            <section class="p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-houses-fill"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/editorial') }}" class="btn btn-primary">Editoriales</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-secondary text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-stack"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/ejemplar') }}" class="btn btn-dark">Ejemplares</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </section>
        </div>

    </div>


    @endsection
