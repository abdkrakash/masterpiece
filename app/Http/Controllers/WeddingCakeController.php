<?php

namespace App\Http\Controllers;

use App\Models\WeddingCake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeddingCakeController extends Controller
{
    public function index()
    {
        $weddingCakes = WeddingCake::with('images')->get();
        return view('wedding_cakes.index', compact('weddingCakes'));
    }

    public function create()
    {
        return view('wedding_cakes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'flavor' => 'required|string',
            'size' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingCake = WeddingCake::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_cake_images', 'public');
                $weddingCake->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-cakes.index')->with('success', 'Wedding Cake created successfully.');
    }

    public function show($id)
    {
        $weddingCake = WeddingCake::with(['images', 'reviews'])->findOrFail($id);
        return view('wedding_cakes.show', compact('weddingCake'));
    }

    public function edit($id)
    {
        $weddingCake = WeddingCake::findOrFail($id);
        return view('wedding_cakes.edit', compact('weddingCake'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'flavor' => 'required|string',
            'size' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weddingCake = WeddingCake::findOrFail($id);
        $weddingCake->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wedding_cake_images', 'public');
                $weddingCake->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wedding-cakes.index')->with('success', 'Wedding Cake updated successfully.');
    }

    public function destroy($id)
    {
        $weddingCake = WeddingCake::findOrFail($id);

        foreach ($weddingCake->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $weddingCake->delete();

        return redirect()->route('wedding-cakes.index')->with('success', 'Wedding Cake deleted successfully.');
    }
}