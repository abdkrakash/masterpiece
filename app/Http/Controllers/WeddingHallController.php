<?php
namespace App\Http\Controllers;

use App\Models\WeddingHall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class WeddingHallController extends Controller
{
    public function index()
    {
        $weddingHalls = WeddingHall::all();
        return view('wedding_halls.index', compact('weddingHalls'));
    }

    public function create()
    {
        return view('wedding_halls.create');
    }

    //done store functon
    public function store(Request $request)
    {
        // Validation rules with updated field names to match the form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create the WeddingHall record
        $weddingHall = WeddingHall::create([
            'hall_name' => $validatedData['name'],
            'hall_description' => $validatedData['description'],
            'hall_price' => $validatedData['price'],
            'hall_capacity' => $validatedData['capacity'],
            'hall_location' => $validatedData['location'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique file name
                $fileName = time() . '_' . $image->getClientOriginalName();

                // Define the path where the image will be saved
                $destinationPath = public_path('wedding_hall_images'); // Save in the public folder

                // Move the uploaded file to the destination path
                $image->move($destinationPath, $fileName);

                // Save the image path in the database (relative to the public folder)
                $weddingHall->images()->create(['image_path' => 'wedding_hall_images/' . $fileName]);
            }
        }

        // Redirect with success message
        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall created successfully.');
    }

    public function show($id)
    {
        $weddingHall = WeddingHall::with(['images'])->findOrFail($id);
//        dd( $weddingHall);
        return view('wedding_halls.show', compact('weddingHall'));
    }

    public function edit($id)
    {
        $weddingHall = WeddingHall::findOrFail($id);
        return view('wedding_halls.edit', compact('weddingHall'));
    }



    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'delete_images' => 'nullable|array', // For deleting existing images
        ]);

        // Find the WeddingHall record
        $weddingHall = WeddingHall::findOrFail($id);

        // Update the WeddingHall record
        $weddingHall->update([
            'hall_name' => $validatedData['name'],
            'hall_description' => $validatedData['description'],
            'hall_price' => $validatedData['price'],
            'hall_capacity' => $validatedData['capacity'],
            'hall_location' => $validatedData['location'],
        ]);

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageId) {
                $image = $weddingHall->images()->find($imageId);
                if ($image) {
                    // Delete the file from the public folder
                    File::delete(public_path($image->image_path));

                    // Delete the record from the database
                    $image->delete();
                }
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique file name
                $fileName = time() . '_' . $image->getClientOriginalName();

                // Define the path where the image will be saved
                $destinationPath = public_path('wedding_hall_images');

                // Move the uploaded file to the destination path
                $image->move($destinationPath, $fileName);

                // Save the image path in the database (relative to the public folder)
                $weddingHall->images()->create(['image_path' => 'wedding_hall_images/' . $fileName]);
            }
        }

        // Redirect with success message
        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall updated successfully.');
    }

    public function destroy($id)
    {
        $weddingHall = WeddingHall::findOrFail($id);

        foreach ($weddingHall->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $weddingHall->delete();

        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall deleted successfully.');
    }
}
