<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Unit;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();
        // return $units;
        return view('admin.layanan.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'ringkasan' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'unit' => 'required'
        ]);
        // return $request->all();
        try {

            $path = $request->file('gambar')->store('layanan', 'public');
            $deskripsi = $request->deskripsi;

            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi, 9);
            $deskripsi = $dom->saveHTML();

            Layanan::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'ringkasan' => $request->ringkasan,
                'deskripsi' => $deskripsi,
                'link' => $request->link,
                'unit' => $request->unit
            ]);
            return redirect()->route('layanan.index')->with('success', 'Layanan created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create Layanan.');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        $units = Unit::all();
        return view('admin.layanan.edit', compact('layanan', 'units'));
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
            'unit' => 'required|string',
        ]);
        try {
            $data = Layanan::findOrFail($id);
            if ($request->hasFile('gambar')) {
                // Delete the old image
                if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                    Storage::disk('public')->delete($data->gambar);
                }
                // Store the new image
                $path = $request->file('gambar')->store('layanan', 'public');
            } else {
                $path = $data->gambar;
            }
            $response = $data->update([
                'gambar' => $path,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'ringkasan' => $request->ringkasan,
                'link' => $request->link,
                'unit' => $request->unit,
            ]);
            return redirect()->route('layanan.index')->with('success', 'Unit Updated successfully.');
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
            $data = Layanan::findOrFail($id);
            Storage::disk('public')->delete($data->gambar);
            $data->delete();
            return redirect()->route('layanan.index')->with('success', 'Layanan Deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Layanan.');
        }
    }
}
