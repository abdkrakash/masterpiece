<?php

namespace App\Http\Controllers;

use App\Models\BridalGroomAttire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BridalGroomAttireController extends Controller
{
    public function index()
    {
        $attires = BridalGroomAttire::with('images')->get();
        return view('bridal_groom_attires.index', compact('attires'));
    }

    public function create()
    {
        return view('bridal_groom_attires.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'type' => 'required|string',
            'size' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $attire = BridalGroomAttire::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('bridal_groom_attire_images', 'public');
                $attire->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('bridal-groom-attires.index')->with('success', 'Bridal Groom Attire created successfully.');
    }

    public function show($id)
    {
        $attire = BridalGroomAttire::with(['images', 'reviews'])->findOrFail($id);
        return view('bridal_groom_attires.show', compact('attire'));
    }

    public function edit($id)
    {
        $attire = BridalGroomAttire::findOrFail($id);
        return view('bridal_groom_attires.edit', compact('attire'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'type' => 'required|string',
            'size' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $attire = BridalGroomAttire::findOrFail($id);
        $attire->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('bridal_groom_attire_images', 'public');
                $attire->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('bridal-groom-attires.index')->with('success', 'Bridal Groom Attire updated successfully.');
    }

    public function destroy($id)
    {
        $attire = BridalGroomAttire::findOrFail($id);

        foreach ($attire->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $attire->delete();

        return redirect()->route('bridal-groom-attires.index')->with('success', 'Bridal Groom Attire deleted successfully.');
    }
}