{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Libro')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Libro</h1></center>
    
    <form action="{{ route('libro.store') }}" method="post">
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
    
                    <div class="form-group">
                        <label for="titulo">Libro</label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>
    
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn">
                    </div>
    
                    <div class="row form-group">
                        <label for="editorial">Editorial</label>
                        <select class="form-select" name="editorial" id="editorial">
                            <option value="">Seleccionar Editorial</option>
                            @foreach ($editorial as $editorial)
                                <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="row form-group">
                        <label for="autor">Autor</label>
                        <select class="form-select" name="autor" id="autor">
                            <option value="">Seleccionar Autor</option>
                            @foreach ($autor as $autor)
                                <option value="{{ $autor->codigo }}">{{ $autor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="paginas">Páginas</label>
                        <input type="text" class="form-control" name="paginas" id="paginas">
                    </div>
                    
                    <br>
                    <br>
                    <br>
    
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/libro') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
                </div>

            </div>
           
        </main>
    </form>
@endsection
