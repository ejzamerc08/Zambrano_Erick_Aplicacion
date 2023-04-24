{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Ejemplar')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Ejemplar</h1></center>
    
    <form action="{{ route('ejemplar.store') }}" method="post">
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">

                <div class="row">
                    {{-- Row para crear una fila --}}
                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" name="codigo" id="codigo">
                    </div>
    
    
                    <div class="row form-group">
                        <label for="libro">Libro</label>
                        <select class="form-select" name="libro" id="libro" required="">
                            <option value="">Seleccionar Libro</option>
                            @foreach ($libro as $libro)
                                <option value="{{ $libro->codigo }}">{{ $libro->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="localizacion">Localización</label>
                        <input type="text" class="form-control" name="localizacion" id="localizacion">
                    </div>

                    <br>
                    <br>
                    <br>
    
    
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/ejemplar') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>

            </div>
            
        </main>
    </form>
@endsection
