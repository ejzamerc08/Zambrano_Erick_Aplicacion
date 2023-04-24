{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Autor')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Editar Autor</h1></center>
    
    <form action="{{ url('dashboard/autor/' . $libro->codigo) }}" method="post">
        @method('PUT')
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">
                <div class="row">
                    {{-- Row para crear una fila --}}

                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo', $libro->codigo) }}">
                    </div>               
    
                    {{-- Fila 2 --}}
                    <div class="form-group">
                        <label for="nombre">Autor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $libro->nombre }}">
                    </div>
                    
                    <br>
                    <br>
                    <br>
    
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/autor') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>
            </div>
        </main>
    </form>
@endsection
