<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'quote' => 'required|string|max:255',
            'hashtag' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'hero_background' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        try {
            $gambarPath = $request->hasFile('gambar') ? $request->file('gambar')->store('home', 'public') : null;
            $heroBgPath = $request->hasFile('hero_background') ? $request->file('hero_background')->store('home/hero', 'public') : null;

            Home::create([
                'gambar' => $gambarPath,
                'hero_background' => $heroBgPath,
                'judul' => $request->judul,
                'quote' => $request->quote,
                'hashtag' => $request->hashtag,
                'link' => $request->link ?? '',
            ]);

            return redirect()->route('home.index')->with('success', 'Banner & Hero Section berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data hero: ' . $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'quote' => 'required|string|max:255',
            'hashtag' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'hero_background' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        try {
            $home = Home::findOrFail($id);

            // Upload & ganti Logo jika ada
            if ($request->hasFile('gambar')) {
                if ($home->gambar && Storage::disk('public')->exists($home->gambar)) {
                    Storage::disk('public')->delete($home->gambar);
                }
                $home->gambar = $request->file('gambar')->store('home', 'public');
            }

            // Upload & ganti Hero Background jika ada
            if ($request->hasFile('hero_background')) {
                if ($home->hero_background && Storage::disk('public')->exists($home->hero_background)) {
                    Storage::disk('public')->delete($home->hero_background);
                }
                $home->hero_background = $request->file('hero_background')->store('home/hero', 'public');
            }

            $home->judul = $request->judul;
            $home->quote = $request->quote;
            $home->hashtag = $request->hashtag;
            $home->link = $request->link ?? $home->link;
            $home->save();

            return redirect()->route('home.index')->with('success', 'Banner & Background Hero berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui hero: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $home = Home::findOrFail($id);
            if ($home->gambar && Storage::disk('public')->exists($home->gambar)) {
                Storage::disk('public')->delete($home->gambar);
            }
            if ($home->hero_background && Storage::disk('public')->exists($home->hero_background)) {
                Storage::disk('public')->delete($home->hero_background);
            }
            $home->delete();

            return redirect()->route('home.index')->with('success', 'Data hero berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
