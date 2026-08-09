<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of news in admin panel
     */
    public function index(Request $request)
    {
        $query = Berita::latest('tanggal_publikasi');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('kategori', 'like', "%{$search}%")
                  ->orWhere('penulis', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $beritas = $query->paginate(10)->withQueryString();

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show form to create new news
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store newly created news in database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'kategori' => 'required|string|max:100',
            'penulis' => 'required|string|max:100',
            'status' => 'required|in:publish,draft',
            'tanggal_publikasi' => 'required|date',
        ]);

        try {
            // Generate unique slug
            $baseSlug = Str::slug($request->judul);
            $slug = $baseSlug;
            $counter = 1;
            while (Berita::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            $imagePath = null;
            if ($request->hasFile('gambar')) {
                $imagePath = $request->file('gambar')->store('berita', 'public');
            }

            Berita::create([
                'judul' => $request->judul,
                'slug' => $slug,
                'ringkasan' => $request->ringkasan,
                'isi' => $request->isi,
                'gambar' => $imagePath,
                'kategori' => $request->kategori,
                'penulis' => $request->penulis,
                'status' => $request->status,
                'tanggal_publikasi' => $request->tanggal_publikasi,
                'views' => 0,
            ]);

            return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan berita: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified news (or redirect to public detail or edit)
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return redirect()->route('berita.public.detail', $berita->slug);
    }

    /**
     * Show form to edit news
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update specified news in database
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'kategori' => 'required|string|max:100',
            'penulis' => 'required|string|max:100',
            'status' => 'required|in:publish,draft',
            'tanggal_publikasi' => 'required|date',
        ]);

        try {
            // Update slug if title changes
            if ($berita->judul !== $request->judul) {
                $baseSlug = Str::slug($request->judul);
                $slug = $baseSlug;
                $counter = 1;
                while (Berita::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                    $slug = $baseSlug . '-' . $counter;
                    $counter++;
                }
                $berita->slug = $slug;
            }

            if ($request->hasFile('gambar')) {
                // Delete old image if exists
                if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                    Storage::disk('public')->delete($berita->gambar);
                }
                $berita->gambar = $request->file('gambar')->store('berita', 'public');
            }

            $berita->judul = $request->judul;
            $berita->ringkasan = $request->ringkasan;
            $berita->isi = $request->isi;
            $berita->kategori = $request->kategori;
            $berita->penulis = $request->penulis;
            $berita->status = $request->status;
            $berita->tanggal_publikasi = $request->tanggal_publikasi;
            $berita->save();

            return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui berita: ' . $e->getMessage());
        }
    }

    /**
     * Delete specified news from database
     */
    public function destroy($id)
    {
        try {
            $berita = Berita::findOrFail($id);

            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->delete();

            return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus berita: ' . $e->getMessage());
        }
    }
}
