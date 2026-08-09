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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        try {
            $path = $request->file('gambar')->store('home', 'public');
            Home::create([
                'gambar' => $path,
                'judul' => $request->judul,
                'quote' => $request->quote,
                'hashtag' => $request->hashtag,
                'link' => $request->link ?? '',
            ]);

            return redirect()->route('home.index')->with('success', 'Banner Home berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan banner: ' . $e->getMessage());
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
        ]);

        try {
            $home = Home::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($home->gambar && Storage::disk('public')->exists($home->gambar)) {
                    Storage::disk('public')->delete($home->gambar);
                }
                $home->gambar = $request->file('gambar')->store('home', 'public');
            }

            $home->judul = $request->judul;
            $home->quote = $request->quote;
            $home->hashtag = $request->hashtag;
            $home->link = $request->link ?? $home->link;
            $home->save();

            return redirect()->route('home.index')->with('success', 'Banner Home berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui banner: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $home = Home::findOrFail($id);
            if ($home->gambar && Storage::disk('public')->exists($home->gambar)) {
                Storage::disk('public')->delete($home->gambar);
            }
            $home->delete();

            return redirect()->route('home.index')->with('success', 'Banner Home berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus banner: ' . $e->getMessage());
        }
    }
}
