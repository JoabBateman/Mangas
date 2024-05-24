<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mangas = Manga::all();
        return view('mangaindex', compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('mangaCreate', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'autor' => 'required|string',
            'precio' => 'required|numeric',
            'categorias' => 'required',
        ]);

        $manga = new Manga();
        $manga->nombre = $request->nombre;
        $manga->autor = $request->autor;
        $manga->precio = $request->precio;
        $manga->save();

        $manga->categorias()->attach($request->categorias);

        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/manga');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
        return view('/mangaShow', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        $categorias =  Categoria::all();
        return view('mangaEdit', compact('categorias', 'manga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        $request->validate([
            'nombre' => 'required|string',
            'autor' => 'required|string',
            'precio' => 'required|numeric',
            'categorias' => 'required',
        ]);
    
        $manga->nombre = $request->nombre;
        $manga->autor = $request->autor;
        $manga->precio = $request->precio;
        $manga->save();
        
        if ($request->has('categorias')) {
            $manga->categorias()->sync($request->categorias);
        } else {
            $manga->categoria()->detach(); 
        }
        
        return redirect('/manga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
        $manga->delete();
        return redirect('/manga');
    }
}
