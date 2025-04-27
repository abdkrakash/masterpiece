<?php

namespace App\Http\Controllers;

use App\Models\WeddingHall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeddingHallController extends Controller
{
    public function index()
    {
        $weddingHalls = WeddingHall::with('images')->get();
        return view('wedding_halls.index', compact('weddingHalls'));
    }

    public function create()
    {
        return view('wedding_halls.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingHall = WeddingHall::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_hall_images', 'public');
                $weddingHall->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall created successfully.');
    }

    public function show($id)
    {
        $weddingHall = WeddingHall::with(['images', 'reviews'])->findOrFail($id);
        return view('wedding_halls.show', compact('weddingHall'));
    }

    public function edit($id)
    {
        $weddingHall = WeddingHall::findOrFail($id);
        return view('wedding_halls.edit', compact('weddingHall'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingHall = WeddingHall::findOrFail($id);
        $weddingHall->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_hall_images', 'public');
                $weddingHall->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall updated successfully.');
    }

    public function destroy($id)
    {
        $weddingHall = WeddingHall::findOrFail($id);

        foreach ($weddingHall->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $weddingHall->delete();

        return redirect()->route('wedding-halls.index')->with('success', 'Wedding Hall deleted successfully.');
    }
}