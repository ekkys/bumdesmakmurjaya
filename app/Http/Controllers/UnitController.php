<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return view('admin.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'ringkasan' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);
        try {
            $path = $request->file('gambar')->store('unit', 'public');
            Unit::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'ringkasan' => $request->ringkasan,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'kategori' => $request->kategori,
            ]);

            return redirect()->route('unit.index')->with('success', 'Home created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create home.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'ringkasan' => 'required|string',
            'link' => 'required|string',
            'kategori' => 'required|string'
        ]);

        try {
            $data = Unit::findOrFail($id);

            if ($request->hasFile('gambar')) {
                // Delete the old image
                if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                    Storage::disk('public')->delete($data->gambar);
                }
                // Store the new image
                $path = $request->file('gambar')->store('unit', 'public');
            } else {
                $path = $data->gambar;
            }
            $response =  $data->update([
                'gambar' => $path,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'ringkasan' => $request->ringkasan,
                'link' => $request->link,
                'kategori' => $request->kategori
            ]);
            return redirect()->route('unit.index')->with('success', 'Unit Updated successfully.');
        } catch (\Exception $e) {
            throw $e;
            return redirect()->back()->with('error', 'Failed to update Unit.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Unit::find($id);
            Storage::disk('public')->delete($data->gambar);
            $data->delete();
            return redirect()->route('unit.index')->with('success', 'Home deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete home.');
        }
    }
}
