<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Recupera totes les pel·lícules
        return view('movies.index', compact('movies')); // Retorna la vista
    }

    public function create()
    {
        return view('movies.create'); // Retorna la vista del formulari per crear
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer',
            'genre' => 'required|string',
            'rating' => 'required|numeric',
            'description' => 'required|string',
        ]);

        Movie::create($data); // Crea una nova pel·lícula a la base de dades
        return redirect()->route('movies.index'); // Redirigeix al CRUD
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie')); // Retorna els detalls d'una pel·lícula
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie')); // Retorna la vista per editar
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer',
            'genre' => 'required|string',
            'rating' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $movie->update($data); // Actualitza la pel·lícula a la base de dades
        return redirect()->route('movies.index'); // Redirigeix al CRUD
    }

    public function destroy(Movie $movie)
    {
        $movie->delete(); // Elimina la pel·lícula
        return redirect()->route('movies.index'); // Redirigeix al CRUD
    }
}

