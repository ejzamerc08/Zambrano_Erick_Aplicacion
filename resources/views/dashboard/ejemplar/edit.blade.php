{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Ejemplar')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Editar Ejemplar</h1></center>
    
    <form action="{{ url('dashboard/ejemplar/' . $ejemplar->codigo) }}" method="post">
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
                        <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo', $ejemplar->codigo) }}">
                    </div>
    
    
                    {{-- Fila 4 --}}
                    <div class="row form-group">
                        <label for="libro">Libro</label>
                        <select class="form-select" name="libro" id="libro">
                            <option value="">Seleccionar Libro</option>
                            @foreach ($libro as $libro)
                                <option value="{{ $libro->codigo }}"
                                    @if ($libro->codigo == $ejemplar->codigo_libro) {{ 'selected' }} @endif>{{ $libro->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
    
    
                    {{-- Fila 6 --}}
                    <div class="form-group">
                        <label for="localizacion">Localización</label>
                        <input type="text" class="form-control" name="localizacion" id="localizacion"
                            value="{{ $ejemplar->localizacion }}">
                    </div>

                    <br>
                    <br>
                    <br>
    
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/ejemplar') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>
            </div>
        </main>
    </form>
@endsection
