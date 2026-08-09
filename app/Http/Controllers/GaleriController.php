<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest('tanggal')->paginate(10);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
            'status' => 'required|string',
        ]);

        try {
            $path = $request->file('gambar')->store('galeri', 'public');
            Galeri::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
            ]);

            return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan galeri: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
            'status' => 'required|string',
        ]);

        try {
            $galeri = Galeri::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                    Storage::disk('public')->delete($galeri->gambar);
                }
                $galeri->gambar = $request->file('gambar')->store('galeri', 'public');
            }

            $galeri->nama = $request->nama;
            $galeri->tanggal = $request->tanggal;
            $galeri->keterangan = $request->keterangan;
            $galeri->status = $request->status;
            $galeri->save();

            return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui galeri: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $galeri = Galeri::findOrFail($id);

            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            $galeri->delete();

            return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus galeri: ' . $e->getMessage());
        }
    }
}
