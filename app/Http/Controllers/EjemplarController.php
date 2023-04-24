<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Models\Libro;
use Illuminate\Http\Request;

class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ejemplar = Ejemplar::all();
        return view('dashboard.ejemplar.index', ['ejemplar'=>$ejemplar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libro = Libro::all();
        return view('dashboard.ejemplar.create',['libro'=>$libro]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>'required|min:1|unique:Ejemplars|max:100',
        ]);
        $ejemplar = new Ejemplar();
        $ejemplar-> codigo = $request->input('codigo');
        $ejemplar-> libro_codigo = $request->input('libro');
        $ejemplar-> localizacion = $request->input('localizacion');
        $ejemplar->save();
        return view('dashboard.ejemplar.message',['msg'=>'Ejemplar creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ejemplar $ejemplar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $ejemplar = Ejemplar::find($codigo);
        return view('dashboard.ejemplar.edit', ['ejemplar'=>$ejemplar, 'libro'=>Libro::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request->validate([
            'codigo'=>'required|min:1|max:100',
            'libro'=>'required|min:1|max:100',
        ]);
        $ejemplar = Ejemplar::find($codigo);
        $ejemplar-> codigo = $request->input('codigo');
        $ejemplar-> libro_codigo = $request->input('libro');
        $ejemplar-> localizacion = $request->input('localizacion');
        $ejemplar->save();
        return view('dashboard.ejemplar.message',['msg'=>'Ejemplar modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $ejemplar = Ejemplar::find($codigo);
        $ejemplar->delete();
        return redirect("dashboard/ejemplar");
    }
}
