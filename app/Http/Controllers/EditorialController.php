<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorial = Editorial::all();
        return view('dashboard.editorial.index', ['editorial'=>$editorial]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editorial = Editorial::all();
        return view('dashboard.editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:1|unique:Editorials|max:100',
        ]);
        $editorial = new Editorial();
        $editorial-> nombre = $request->input('nombre');
        $editorial->save();
        return view('dashboard.editorial.message',['msg'=>'Editorial creada con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editorial = Editorial::find($id);
        return view('dashboard.editorial.edit', ['libro'=>$editorial, 'editorial' => Editorial::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|min:1|max:100',
        ]);
        $editorial = Editorial::find($id);
        $editorial-> nombre = $request->input('nombre');
        $editorial->save();
        return view('dashboard.editorial.message',['msg'=>'Editorial modificada con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $editorial = Editorial::find($id);
        $editorial->delete();
        return redirect("dashboard/editorial");
    }
}
