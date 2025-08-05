<?php

namespace App\Http\Controllers;

use App\Models\AnimalType;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class ControllerDogs extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all dogs
        $dogs = Dog::all();

        // Load the view and pass the dogs
        return View::make('dog.index')->with('dogs',$dogs);
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener lista de tipos de animales
        $types = AnimalType::all();
        return view('dog.create')->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Establish rules
        $rules = [
            'name' => 'required',
            'weight' => 'required',
            'race' => 'required',
            'age' => 'required|integer',
            'animal_type_id' => 'required'
        ];

        // Custom messages
        $messages = [
            'name.required' => 'El nombre es obligatorio.',
            'weight.required' => 'El peso es obligatorio.',
            'race.required' => 'La raza es obligatoria.',
            'animal_type_id.required' => 'El tipo de animal es obligatorio.',
            'age.required' => 'La edad es obligatoria.',
            'age.integer' => 'La edad debe ser un número entero.',
        ];

        // Validate data
        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()){
            return redirect('dog/create')
                ->withErrors($validator)
                ->withInput();
        }

        // Instancia de Dog
        $dog = new Dog();

        // Generar numero random
        $random = rand(1,930);
        $imageBaseUrl = config('pokemon.image_base_url');

        //Asignar valores
        $dog->name = $request->input('name');
        $dog->weight = $request->input('weight');
        $dog->race = $request->input('race');
        $dog->age = $request->input('age');
        $dog->animal_type_id = $request->input('animal_type_id');
        $dog->image = $imageBaseUrl . '/' . $random . '.png';

        // Save in db
        $dog->save();

        // Redirect to index
        return redirect()->route('dog.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Get dog by id
        $dog = dog::find($id);

        // Show specific dog
        return View::make('dog.show')->with('dog', $dog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Get dog by id
        $dog = dog::find($id);

        // Get animal types
        $types = AnimalType::all();

        // Show specific dog
        return View::make('dog.edit')
        ->with('dog', $dog)
        ->with('types', $types);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dog = Dog::find($id);

        $name = $request->input('name');
        $weight = $request->input('weight');
        $race = $request->input('race');
        $age = $request->input('age');
        $animal_type_id = $request->input('animal_type_id');

        //Asignar valores
        $dog->name = $name;
        $dog->weight = $weight;
        $dog->race = $race;
        $dog->age = $age;
        $dog->animal_type_id = $animal_type_id;

        $dog->save();

        return redirect()->route('dog.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();

        return redirect()->route('dog.index');

    }
}
