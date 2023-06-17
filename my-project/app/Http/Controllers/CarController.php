<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'employee_id' => 'required',
        ]);
    
        $car = new Car;
        $car->brand = $validatedData['brand'];
        $car->model = $validatedData['model'];
        $car->employee_id = $validatedData['employee_id'];
        $car->save();
    
        return redirect()->route('cars.index')->with('success', 'Samochód został dodany.');
    }
    
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        // Walidacja danych wejściowych
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            // Dodaj walidację dla innych pól
        ]);

        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Samochód zaktualizowany pomyślnie.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Samochód usunięty pomyślnie.');
    }
}
