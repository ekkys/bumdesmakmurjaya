<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kliens = Klien::all();
        return view('admin.klien.index', compact('kliens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.klien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
        ]);

        try {
            $path = $request->file('gambar')->store('klien', 'public');
            Klien::create([
                'gambar' => $path,
                'nama' => $request->nama,
            ]);

            return redirect()->route('klien.index')->with('success', 'Klien created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create Klien.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Klien $klien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $klien = Klien::findOrFail($id);
        return view('admin.klien.edit', compact('klien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'nullable|string|max:255',
        ]);

        try {
            $klien = klien::findOrFail($id);

            if ($request->hasFile('gambar')) {
                Storage::disk('public')->delete($klien->gambar);
                $path = $request->file('gambar')->store('klien', 'public');
            } else {
                $path = $klien->gambar;
            }
            $klien->update([
                'gambar' => $path,
                'nama' => $request->nama,
            ]);

            return redirect()->route('klien.index')->with('success', 'Home Updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update home.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Klien::find($id);
            Storage::disk('public')->delete($data->gambar);
            $data->delete();

            return redirect()->route('klien.index')->with('success', 'Klien deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Klien.');
        }
    }
}
