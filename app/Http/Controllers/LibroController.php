<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Autor;
use App\Editorial;
use App\Genero;
use App\Detalleprestamo;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('Libros.index',compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $generos = Genero::all();
        return view('Libros.create',compact('autores','editoriales','generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro(request()->all());
        $libro->save();
        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $generos = Genero::all();
        return view('Libros.edit',compact('autores','editoriales','generos','libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->clave = $request['clave'];
        $libro->nombre = $request['nombre'];
        $libro->autor_id = $request['autor_id'];
        $libro->editorial_id = $request['editorial_id'];
        $libro->genero_id = $request['genero_id'];
        $libro->fecha = $request['fecha'];
        $libro->save();

        return redirect()->route('libro.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }

    public function detalles(){
        $detalles = Detalleprestamo::all();
        // foreach ($detalles as $detalle) {
        //     dd($detalle->Prestamo->fecha);    
        // }
        
        return view('detalle',compact('detalles'));
    }
}
