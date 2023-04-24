@extends('dashboard.master')
@section('titulo', 'Ejemplar')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Ejemplares</h2></center>
        <br>
        <a href="{{ url('dashboard/ejemplar/create') }}" class="btn btn-primary btn-sm">Nuevo Ejemplar</a>
        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Localización</th>
                    <th>Fecha de cración</th>
                    <th>Fecha de modificaición</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($ejemplar as $ejemplar)
                    <tr>
                        <td>{{ $ejemplar->codigo }}</td>
                        <td>{{ $ejemplar->libro->titulo }}</td>
                        <td>{{ $ejemplar->localizacion }}</td>
                        <td>{{ $ejemplar->created_at }}</td>
                        <td>{{ $ejemplar->updated_at }}</td>
                        <td><a href="{{ url('dashboard/ejemplar/'.$ejemplar->codigo.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/ejemplar/'.$ejemplar->codigo )}}" method="post">
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