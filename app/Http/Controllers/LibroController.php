<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use App\Models\Editorial;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Libro::all();
        return view('dashboard.libro.index', ['libro'=>$libro]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autor = Autor::all();
        $editorial = Editorial::all();
        return view('dashboard.libro.create',['autor'=>$autor, 'editorial'=>$editorial]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>'required|min:1|unique:Libros|max:100',
            'titulo'=>'required|min:1|unique:Libros|max:100',
        ]);
        $libro = new Libro();
        $libro-> codigo = $request->input('codigo');
        $libro-> titulo = $request->input('titulo');
        $libro-> isbn = $request->input('isbn');
        $libro-> editorial_id = $request->input('editorial');
        $libro-> autor_codigo = $request->input('autor');
        $libro-> paginas = $request->input('paginas');
        $libro->save();
        return view('dashboard.libro.message',['msg'=>'Libro creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $libro = Libro::find($codigo);
        return view('dashboard.libro.edit', ['libro'=>$libro, 'autor'=>Autor::all(), 'editorial'=>Editorial::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request->validate([
            'codigo'=>'required|min:1|max:100',
            'titulo'=>'required|min:1|max:100',
        ]);
        $libro = Libro::find($codigo);
        $libro-> codigo = $request->input('codigo');
        $libro-> titulo = $request->input('titulo');
        $libro-> isbn = $request->input('isbn');
        $libro-> editorial_id = $request->input('editorial');
        $libro-> autor_codigo = $request->input('autor');
        $libro-> paginas = $request->input('paginas');
        $libro->save();
        return view('dashboard.libro.message',['msg'=>'Libro modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $libro = Libro::find($codigo);
        $libro->delete();
        return redirect("dashboard/libro");
    }
}
