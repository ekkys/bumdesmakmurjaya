<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function index()
    {
        $tentangs = Tentang::all();
        return view('admin.tentang.index', compact('tentangs'));
    }

    public function create()
    {
        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'gambar2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'gambar3' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $gambar1Path = $request->file('gambar1')->store('tentang', 'public');
            $gambar2Path = $request->hasFile('gambar2') ? $request->file('gambar2')->store('tentang', 'public') : null;
            $gambar3Path = $request->hasFile('gambar3') ? $request->file('gambar3')->store('tentang', 'public') : null;

            Tentang::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar1' => $gambar1Path,
                'gambar2' => $gambar2Path,
                'gambar3' => $gambar3Path,
                'kategori' => 'tentang',
            ]);

            return redirect()->route('tentang.index')->with('success', 'Profil Tentang Kami berhasil disimpan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $tentang = Tentang::findOrFail($id);
        return redirect()->route('tentang.edit', $id);
    }

    public function edit($id)
    {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar1' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'gambar2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'gambar3' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $tentang = Tentang::findOrFail($id);

            if ($request->hasFile('gambar1')) {
                if ($tentang->gambar1 && Storage::disk('public')->exists($tentang->gambar1)) {
                    Storage::disk('public')->delete($tentang->gambar1);
                }
                $tentang->gambar1 = $request->file('gambar1')->store('tentang', 'public');
            }

            if ($request->hasFile('gambar2')) {
                if ($tentang->gambar2 && Storage::disk('public')->exists($tentang->gambar2)) {
                    Storage::disk('public')->delete($tentang->gambar2);
                }
                $tentang->gambar2 = $request->file('gambar2')->store('tentang', 'public');
            }

            if ($request->hasFile('gambar3')) {
                if ($tentang->gambar3 && Storage::disk('public')->exists($tentang->gambar3)) {
                    Storage::disk('public')->delete($tentang->gambar3);
                }
                $tentang->gambar3 = $request->file('gambar3')->store('tentang', 'public');
            }

            $tentang->judul = $request->judul;
            $tentang->deskripsi = $request->deskripsi;
            $tentang->save();

            return redirect()->route('tentang.index')->with('success', 'Profil Tentang Kami berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $tentang = Tentang::findOrFail($id);
            if ($tentang->gambar1 && Storage::disk('public')->exists($tentang->gambar1)) {
                Storage::disk('public')->delete($tentang->gambar1);
            }
            if ($tentang->gambar2 && Storage::disk('public')->exists($tentang->gambar2)) {
                Storage::disk('public')->delete($tentang->gambar2);
            }
            if ($tentang->gambar3 && Storage::disk('public')->exists($tentang->gambar3)) {
                Storage::disk('public')->delete($tentang->gambar3);
            }
            $tentang->delete();

            return redirect()->route('tentang.index')->with('success', 'Profil Tentang Kami berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
