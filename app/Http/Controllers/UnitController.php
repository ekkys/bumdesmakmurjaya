<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('admin.unit.index', compact('units'));
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $path = $request->file('gambar')->store('unit', 'public');
            Unit::create([
                'nama' => $request->nama,
                'kategori' => $request->kategori,
                'ringkasan' => $request->ringkasan,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link ?? '',
                'gambar' => $path,
            ]);

            return redirect()->route('unit.index')->with('success', 'Unit Usaha berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan Unit Usaha: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $unit = Unit::findOrFail($id);
        return redirect()->route('unit.edit', $id);
    }

    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.unit.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $unit = Unit::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($unit->gambar && Storage::disk('public')->exists($unit->gambar)) {
                    Storage::disk('public')->delete($unit->gambar);
                }
                $unit->gambar = $request->file('gambar')->store('unit', 'public');
            }

            $unit->nama = $request->nama;
            $unit->kategori = $request->kategori;
            $unit->ringkasan = $request->ringkasan;
            $unit->deskripsi = $request->deskripsi;
            $unit->link = $request->link ?? $unit->link;
            $unit->save();

            return redirect()->route('unit.index')->with('success', 'Unit Usaha berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui Unit Usaha: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $unit = Unit::findOrFail($id);

            if ($unit->gambar && Storage::disk('public')->exists($unit->gambar)) {
                Storage::disk('public')->delete($unit->gambar);
            }

            $unit->delete();

            return redirect()->route('unit.index')->with('success', 'Unit Usaha berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus Unit Usaha: ' . $e->getMessage());
        }
    }
}
