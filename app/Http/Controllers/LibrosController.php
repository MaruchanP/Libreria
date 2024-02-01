<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('libreria.libros');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    
    $request->validate([
        'titulo' => 'required|string|max:255',
        'anio_publicado' => 'required|integer|min:1900',
        'num_de_pag' => 'required|integer|min:1',
        'precio' => 'required|numeric|min:0.01',
        'disponibilidad' => 'required|boolean',
    ]);

    

    // Crear un nuevo libro con los datos del formulario
    $libro = Libro::create([
        'titulo' => $request->input('titulo'),
        'autor_id' => $request->input('autor_id'),
        'editorial_id' => $request->input('editorial_id'),
        'anio_publicado' => $request->input('anio_publicado'),
        'num_de_pag' => $request->input('num_de_pag'),
        'precio' => $request->input('precio'),
        'disponibilidad' => $request->input('disponibilidad'),
        'genero_id' => $request->input('genero_id'),
    ]);

    // Redireccionar o devolver una respuesta, por ejemplo:
    return redirect()->route('libros.index')->with('success', 'Libro creado correctamente');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
