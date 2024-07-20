<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
            'status' => 'required|string',
        ]);

        // return $request->all();
        try {
            $path = $request->file('gambar')->store('galeri', 'public');
            Galeri::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
            ]);

            return redirect()->route('galeri.index')->with('success', 'Klien created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create Klien.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
            'status' => 'required|string',
        ]);

        try {
            $galeri = Galeri::findOrFail($id);

            if ($request->hasFile('gambar')) {
                // Delete the old image
                Storage::disk('public')->delete($galeri->gambar);
                // Store the new image
                $path = $request->file('gambar')->store('galeri', 'public');
                $galeri->gambar = $path;
            }

            $galeri->nama = $request->nama;
            $galeri->tanggal = $request->tanggal;
            $galeri->keterangan = $request->keterangan;
            $galeri->status = $request->status;
            $galeri->save();

            return redirect()->route('galeri.index')->with('success', 'Galeri updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Galeri.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $galeri = Galeri::findOrFail($id);

            // Delete the image
            Storage::disk('public')->delete($galeri->gambar);

            $galeri->delete();

            return redirect()->route('galeri.index')->with('success', 'Galeri deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Galeri.');
        }
    }
}
