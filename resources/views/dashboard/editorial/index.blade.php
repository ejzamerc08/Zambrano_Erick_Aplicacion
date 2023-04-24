@extends('dashboard.master')
@section('titulo', 'Editorial')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Editoriales</h2></center>
        <br>
        <a href="{{ url('/dashboard/editorial/create') }}" class="btn btn-primary btn-sm">Nueva Editorial</a>
        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha de cración</th>
                    <th>Fecha de modificaición</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($editorial as $editorial)
                    <tr>
                        <td>{{ $editorial->id }}</td>
                        <td>{{ $editorial->nombre }}</td>
                        <td>{{ $editorial->created_at }}</td>
                        <td>{{ $editorial->updated_at }}</td>
                        <td><a href="{{ url('dashboard/editorial/'.$editorial->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/editorial/'.$editorial->id )}}" method="post">
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