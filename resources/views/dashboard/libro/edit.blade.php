{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Libro')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Editar Libro</h1></center>


    <form action="{{ url('dashboard/libro/' . $libro->codigo) }}" method="post">
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
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $libro->titulo }}">
                    </div>
    
                    {{-- Fila 3 --}}
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" value="{{ $libro->isbn }}">
                    </div>
    
                    {{-- Fila 4 --}}
                    <div class="row form-group">
                        <label for="editorial">Editorial</label>
                        <select class="form-select" name="editorial" id="editorial">
                            <option value="">Seleccionar Editorial</option>
                            @foreach ($editorial as $editorial)
                                <option value="{{ $editorial->id }}"
                                    @if ($editorial->id == $libro->editorial_id) {{ 'selected' }} @endif>{{ $editorial->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    {{-- Fila 5 --}}
                    <div class="row form-group">
                        <label for="autor">Autor</label>
                        <select class="form-select" name="autor" id="autor">
                            <option value="">Seleccionar Autor</option>
                            @foreach ($autor as $autor)
                                <option value="{{ $autor->codigo }}"
                                    @if ($autor->codigo == $libro->autor_codigo) {{ 'selected' }} @endif>{{ $autor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    {{-- Fila 6 --}}
                    <div class="form-group">
                        <label for="paginas">Paginas</label>
                        <input type="text" class="form-control" name="paginas" id="paginas"
                            value="{{ $libro->paginas }}">
                    </div>

                    <br>
                    <br>
                    <br>
    
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/libro') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>

            </div>

            
        </main>
    </form>
@endsection
