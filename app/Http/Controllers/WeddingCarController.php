<?php

namespace App\Http\Controllers;

use App\Models\WeddingCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeddingCarController extends Controller
{
    public function index()
    {
        $weddingCars = WeddingCar::with('images')->get();
        return view('wedding_cars.index', compact('weddingCars'));
    }

    public function create()
    {
        return view('wedding_cars.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'model_year' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingCar = WeddingCar::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_car_images', 'public');
                $weddingCar->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car created successfully.');
    }

    public function show($id)
    {
        $weddingCar = WeddingCar::with(['images', 'reviews'])->findOrFail($id);
        return view('wedding_cars.show', compact('weddingCar'));
    }

    public function edit($id)
    {
        $weddingCar = WeddingCar::findOrFail($id);
        return view('wedding_cars.edit', compact('weddingCar'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'model_year' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingCar = WeddingCar::findOrFail($id);
        $weddingCar->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_car_images', 'public');
                $weddingCar->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car updated successfully.');
    }

    public function destroy($id)
    {
        $weddingCar = WeddingCar::findOrFail($id);

        foreach ($weddingCar->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $weddingCar->delete();

        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car deleted successfully.');
    }
}