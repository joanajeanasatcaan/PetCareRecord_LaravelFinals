<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        // dd($pets);
        return view('pets.index', compact('pets'));
    }


    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        Pet::create($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet added successfully!');
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet updated successfully!');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully!');
    }
}
