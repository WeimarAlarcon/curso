<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get();
        return view("curso.index")->withCursos($cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("curso.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Curso::create([
            'nombre' => $input['nombre'],
            'duracion' => $input['duracion'],
            'tipocurso' => $input['tipocurso'],
            'estado' => $input['estado']
        ]);
       
        return redirect(route('curso.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=Curso::find($id);
        return view('curso.edit')->withCurso($curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso=Curso::find($id);
        $input = $request->all();
        $curso->nombre=$input['nombre'];
        $curso->duracion=$input['duracion'];
        $curso->tipocurso=$input['tipocurso'];
        $curso->estado=$input['estado'];
        $curso->save();
        return redirect(route('curso.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso=Curso::find($id);
        $curso->delete();
        return redirect(route('curso.index'));
    }
}
