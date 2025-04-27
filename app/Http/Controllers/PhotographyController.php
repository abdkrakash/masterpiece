<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotographyController extends Controller
{
    public function index()
    {
        $photographies = Photography::with('images')->get();
        return view('photography.index', compact('photographies'));
    }

    public function create()
    {
        return view('photography.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photography = Photography::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('photography_images', 'public');
                $photography->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('photography.index')->with('success', 'Photography created successfully.');
    }

    public function show($id)
    {
        $photography = Photography::with(['images', 'reviews'])->findOrFail($id);
        return view('photography.show', compact('photography'));
    }

    public function edit($id)
    {
        $photography = Photography::findOrFail($id);
        return view('photography.edit', compact('photography'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photography = Photography::findOrFail($id);
        $photography->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('photography_images', 'public');
                $photography->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('photography.index')->with('success', 'Photography updated successfully.');
    }

    public function destroy($id)
    {
        $photography = Photography::findOrFail($id);

        foreach ($photography->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $photography->delete();

        return redirect()->route('photography.index')->with('success', 'Photography deleted successfully.');
    }
}