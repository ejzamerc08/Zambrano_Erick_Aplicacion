<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autor = Autor::all();
        return view('dashboard.autor.index', ['autor'=>$autor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autor = Autor::all();
        return view('dashboard.autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>'required|min:1|unique:Autors|max:100',
            'nombre'=>'required|min:1|unique:Autors|max:100',
        ]);
        $autor = new Autor();
        $autor-> codigo = $request->input('codigo');
        $autor-> nombre = $request->input('nombre');
        //$category->id=$request->input('id');
        $autor->save();
        return view('dashboard.autor.message',['msg'=>'Autor creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $autor = Autor::find($codigo);
        return view('dashboard.autor.edit', ['libro'=>$autor, 'autor' => Autor::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request->validate([
            'codigo'=>'required|min:1|max:100',
            'nombre'=>'required|min:1|max:100',
        ]);
        $autor = Autor::find($codigo);
        $autor-> codigo = $request->input('codigo');
        $autor-> nombre = $request->input('nombre');
        //$post->id=$request->input('id');
        $autor->save();
        return view('dashboard.autor.message',['msg'=>'Autor modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $autor = Autor::find($codigo);
        $autor->delete();
        return redirect("dashboard/autor");
    }
}
