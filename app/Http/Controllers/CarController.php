<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Mostra tots els cotxes
    public function index()
    {
        $cars = Car::all(); // Recupera tots els cotxes
        return view('cars.index', compact('cars')); // Retorna la vista
    }

    // Mostra el formulari per afegir un nou cotxe
    public function create()
    {
        return view('cars.create'); // Retorna la vista del formulari per crear
    }

    // Desa un nou cotxe a la base de dades
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'is_electric' => 'required|boolean',
        ]);

        Car::create($data); // Crea un nou cotxe a la base de dades
        return redirect()->route('cars.index'); // Redirigeix al CRUD
    }

    // Mostra els detalls d'un cotxe
    public function show(Car $car)
    {
        return view('cars.show', compact('car')); // Retorna els detalls d'un cotxe
    }

    // Mostra el formulari per editar un cotxe existent
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car')); // Retorna la vista per editar
    }

    // Actualitza un cotxe existent a la base de dades
    public function update(Request $request, Car $car)
    {
        // Mostrar les dades rebudes per a depuració
        \Log::debug('Update request data:', $request->all()); // Log de les dades rebudes

        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'is_electric' => 'required|boolean',  // Afegir validació de 'is_electric'
        ]);

        // Actualitza el cotxe amb les dades noves
        $car->update($data);

        // Redirigeix a la llista de cotxes
        return redirect()->route('cars.index'); // Redirigeix al CRUD
    }

    // Elimina un cotxe existent
    public function destroy(Car $car)
    {
        $car->delete(); // Elimina el cotxe
        return redirect()->route('cars.index'); // Redirigeix al CRUD
    }
}


