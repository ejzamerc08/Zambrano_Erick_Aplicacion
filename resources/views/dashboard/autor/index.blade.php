@extends('dashboard.master')
@section('titulo', 'Autor')
@section('contenido')

<main>
    <div class="container py-4">
        <center> <h2>Autores</h2></center>
       <br>
        <a href="{{ url('/dashboard/autor/create') }}" class="btn btn-primary btn-sm">Nuevo Autor</a>
       <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Fecha de cración</th>
                    <th>Fecha de modificaición</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($autor as $autor)
                    <tr>
                        <td>{{ $autor->codigo }}</td>
                        <td>{{ $autor->nombre }}</td>
                        <td>{{ $autor->created_at }}</td>
                        <td>{{ $autor->updated_at }}</td>
                        <td><a href="{{ url('dashboard/autor/'.$autor->codigo.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/autor/'.$autor->codigo )}}" method="post">
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