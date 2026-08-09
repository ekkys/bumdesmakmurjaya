<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KlienController extends Controller
{
    public function index()
    {
        $kliens = Klien::all();
        return view('admin.klien.index', compact('kliens'));
    }

    public function create()
    {
        return view('admin.klien.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        try {
            $path = $request->file('gambar')->store('klien', 'public');
            Klien::create([
                'nama' => $request->nama,
                'gambar' => $path,
            ]);

            return redirect()->route('klien.index')->with('success', 'Data mitra/klien berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan klien: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $klien = Klien::findOrFail($id);
        return view('admin.klien.edit', compact('klien'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        try {
            $klien = Klien::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($klien->gambar && Storage::disk('public')->exists($klien->gambar)) {
                    Storage::disk('public')->delete($klien->gambar);
                }
                $klien->gambar = $request->file('gambar')->store('klien', 'public');
            }

            $klien->nama = $request->nama;
            $klien->save();

            return redirect()->route('klien.index')->with('success', 'Data mitra/klien berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui klien: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Klien::findOrFail($id);
            if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                Storage::disk('public')->delete($data->gambar);
            }
            $data->delete();

            return redirect()->route('klien.index')->with('success', 'Data mitra/klien berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus klien: ' . $e->getMessage());
        }
    }
}
