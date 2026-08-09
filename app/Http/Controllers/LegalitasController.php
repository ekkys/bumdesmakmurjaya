<?php

namespace App\Http\Controllers;

use App\Models\Legalitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LegalitasController extends Controller
{
    public function index()
    {
        $legalitas = Legalitas::all();
        return view('admin.legalitas.index', compact('legalitas'));
    }

    public function create()
    {
        return view('admin.legalitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $path = $request->file('gambar')->store('legalitas', 'public');
            Legalitas::create([
                'nama' => $request->nama,
                'link' => $request->link ?? '',
                'deskripsi' => $request->deskripsi,
                'gambar' => $path,
            ]);

            return redirect()->route('legalitas.index')->with('success', 'Dokumen legalitas berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan legalitas: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $legalitas = Legalitas::findOrFail($id);
        return redirect()->route('legalitas.edit', $id);
    }

    public function edit($id)
    {
        $legalitas = Legalitas::findOrFail($id);
        return view('admin.legalitas.edit', compact('legalitas'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $legalitas = Legalitas::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($legalitas->gambar && Storage::disk('public')->exists($legalitas->gambar)) {
                    Storage::disk('public')->delete($legalitas->gambar);
                }
                $legalitas->gambar = $request->file('gambar')->store('legalitas', 'public');
            }

            $legalitas->nama = $request->nama;
            $legalitas->link = $request->link ?? $legalitas->link;
            $legalitas->deskripsi = $request->deskripsi;
            $legalitas->save();

            return redirect()->route('legalitas.index')->with('success', 'Dokumen legalitas berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui legalitas: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Legalitas::findOrFail($id);
            if ($data->gambar && Storage::disk('public')->exists($data->gambar)) {
                Storage::disk('public')->delete($data->gambar);
            }
            $data->delete();

            return redirect()->route('legalitas.index')->with('success', 'Dokumen legalitas berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus legalitas: ' . $e->getMessage());
        }
    }
}
