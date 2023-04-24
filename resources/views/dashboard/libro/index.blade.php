@extends('dashboard.master')
@section('titulo', 'Libro')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Libros</h2></center>      
        <br>
        <a href="{{ url('dashboard/libro/create') }}" class="btn btn-primary btn-sm">Nuevo Libro</a>
        <br>
        
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Titulo</th>
                    <th>ISBN</th>
                    <th>Editorial</th>
                    <th>Autor</th>
                    <th>Páginas</th>
                    <th>Fecha de cración</th>
                    <th>Fecha de modificaición</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($libro as $libro)
                    <tr>
                        <td>{{ $libro->codigo }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->isbn }}</td>
                        <td>{{ $libro->editorial->nombre }}</td>
                        <td>{{ $libro->autor->nombre }}</td>
                        <td>{{ $libro->paginas }}</td>
                        <td>{{ $libro->created_at }}</td>
                        <td>{{ $libro->updated_at }}</td>
                        <td><a href="{{ url('dashboard/libro/'.$libro->codigo.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/libro/'.$libro->codigo )}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="bi bi-eraser-fill" type="submit"></button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
        
    </div>
</main>
@endsection