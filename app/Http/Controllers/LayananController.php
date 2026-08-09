<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('admin.layanan.create', compact('units'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'unit' => 'required|string',
            'ringkasan' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $path = $request->file('gambar')->store('layanan', 'public');

            Layanan::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'ringkasan' => $request->ringkasan,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link ?? '',
                'unit' => $request->unit,
            ]);

            return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan layanan: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        $units = Unit::all();
        return view('admin.layanan.edit', compact('layanan', 'units'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'unit' => 'required|string',
            'ringkasan' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $data = Layanan::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                    Storage::disk('public')->delete($data->gambar);
                }
                $data->gambar = $request->file('gambar')->store('layanan', 'public');
            }

            $data->nama = $request->nama;
            $data->unit = $request->unit;
            $data->ringkasan = $request->ringkasan;
            $data->deskripsi = $request->deskripsi;
            $data->link = $request->link ?? $data->link;
            $data->save();

            return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui layanan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Layanan::findOrFail($id);
            if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                Storage::disk('public')->delete($data->gambar);
            }
            $data->delete();

            return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus layanan: ' . $e->getMessage());
        }
    }
}
