<?php

namespace App\Http\Controllers;

use App\Models\GroomSpa;
use Illuminate\Http\Request;

class GroomSpaController extends Controller
{
    public function index()
    {
        $services = GroomSpa::all();
        return view('groom-spa.index', compact('services'));
    }

    public function create()
    {
        return view('groom-spa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
        ]);

        GroomSpa::create($validatedData);

        return redirect()->route('groom-spa.index')->with('success', 'Groom Spa service created successfully.');
    }

    public function show($id)
    {
        $service = GroomSpa::findOrFail($id);
        return view('groom-spa.show', compact('service'));
    }

    public function edit($id)
    {
        $service = GroomSpa::findOrFail($id);
        return view('groom-spa.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
        ]);

        $service = GroomSpa::findOrFail($id);
        $service->update($validatedData);

        return redirect()->route('groom-spa.index')->with('success', 'Groom Spa service updated successfully.');
    }

    public function destroy($id)
    {
        $service = GroomSpa::findOrFail($id);
        $service->delete();

        return redirect()->route('groom-spa.index')->with('success', 'Groom Spa service deleted successfully.');
    }
}