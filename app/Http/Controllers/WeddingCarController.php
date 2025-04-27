<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class WeddingCarController extends Controller
{
    public function index()
    {
        $weddingCars = Car::with('images')->get();
        return view('wedding_cars.index', compact('weddingCars'));
    }

    public function create()
    {
        return view('wedding_cars.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'model_year' => 'required|integer',
            'rental_duration' => 'nullable|integer',
            'availability' => 'nullable|boolean',
            'color' => 'nullable|string', // Add validation for color
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create the WeddingCar record
        $weddingCar = Car::create([
            'Cars_name' => $validatedData['name'],
            'Cars_description' => $validatedData['description'],
            'Cars_price' => $validatedData['price'],
            'Car_model' => $validatedData['model_year'], // Map to Car_model
            'Car_rental_duration' => $validatedData['rental_duration'] ?? null,
            'Car_availability' => $validatedData['availability'] ?? true,
            'Car_color' => $validatedData['color'] ?? null, // Add Car_color
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('wedding_car_images');
                $image->move($destinationPath, $fileName);
                $weddingCar->images()->create(['images_path' => 'wedding_car_images/' . $fileName]);
            }
        }

        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car created successfully.');
    }

    public function show($id)
    {
        $weddingCar = Car::with(['images', 'reviews'])->findOrFail($id);
        return view('wedding_cars.show', compact('weddingCar'));
    }

    public function edit($id)
    {
        $weddingCar = Car::findOrFail($id);
        return view('wedding_cars.edit', compact('weddingCar'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'model_year' => 'required|integer',
            'rental_duration' => 'nullable|integer',
            'availability' => 'nullable|boolean',
            'color' => 'nullable|string', // Add validation for color
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the Wedding Car record
        $weddingCar = Car::findOrFail($id);

        // Update the Wedding Car record
        $weddingCar->update([
            'Cars_name' => $validatedData['name'],
            'Cars_description' => $validatedData['description'],
            'Cars_price' => $validatedData['price'],
            'Car_model' => $validatedData['model_year'], // Map to Car_model
            'Car_rental_duration' => $validatedData['rental_duration'] ?? null,
            'Car_availability' => $validatedData['availability'] ?? true,
            'Car_color' => $validatedData['color'] ?? null, // Add Car_color
        ]);

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('wedding_car_images');
                $image->move($destinationPath, $fileName);
                $weddingCar->images()->create(['images_path' => 'wedding_car_images/' . $fileName]);
            }
        }

        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car updated successfully.');
    }

    public function destroy($id)
    {
        // Find the Wedding Car record
        $weddingCar = Car::findOrFail($id);

        // Delete associated images
        foreach ($weddingCar->images as $image) {
            // Ensure the image path exists before attempting to delete
            if ($image->images_path && File::exists(public_path($image->images_path))) {
                // Delete the file from the public folder
                File::delete(public_path($image->images_path));
            }

            // Delete the image record from the database
            $image->delete();
        }

        // Delete the Wedding Car record
        $weddingCar->delete();

        // Redirect with success message
        return redirect()->route('wedding-cars.index')->with('success', 'Wedding Car deleted successfully.');
    }
}
