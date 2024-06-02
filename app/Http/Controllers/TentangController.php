<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangs = Tentang::all();
        return view('admin.tentang.index', compact('tentangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
            'kontak' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'nomor_telpon' => 'nullable|string|max:255',
        ]);

        try {
            $tentang = new Tentang();
            $tentang->judul = $request->judul;

            if ($request->hasFile('gambar')) {
                $fileName = time() . '.' . $request->gambar->extension();
                $request->gambar->move(public_path('uploads'), $fileName);
                $tentang->gambar = $fileName;
            }

            $tentang->deskripsi = $request->deskripsi;
            $tentang->kontak = $request->kontak;
            $tentang->lokasi = $request->lokasi;
            $tentang->nomor_telpon = $request->nomor_telpon;
            $tentang->save();

            return redirect()->route('tentang.index')->with('success', 'Tentang created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('tentang.create')->with('error', 'Failed to create Tentang.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tentang $tentang)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
            'kontak' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'nomor_telpon' => 'nullable|string|max:255',
        ]);

        try {
            $tentang = Tentang::findOrFail($tentang->id);
            $tentang->judul = $request->judul;

            if ($request->hasFile('gambar')) {
                $fileName = time() . '.' . $request->gambar->extension();
                $request->gambar->move(public_path('uploads'), $fileName);
                $tentang->gambar = $fileName;
            }

            $tentang->deskripsi = $request->deskripsi;
            $tentang->kontak = $request->kontak;
            $tentang->lokasi = $request->lokasi;
            $tentang->nomor_telpon = $request->nomor_telpon;
            $tentang->save();

            return redirect()->route('tentang.index')->with('success', 'Tentang updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('tentang.edit')->with('error', 'Failed to update Tentang.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tentang = Tentang::findOrFail($id);
            $tentang->delete();

            return redirect()->route('tentang.index')->with('success', 'Tentang deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('tentang.index')->with('error', 'Failed to delete Tentang.');
        }
    }
}