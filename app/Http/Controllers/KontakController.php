<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('admin.kontak.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'alamat' => 'required|string',
            'telpon' => 'required|string|max:50',
            'maps' => 'required|string',
            'email' => 'required|email|max:100',
            'youtube' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
        ]);

        try {
            Kontak::create($validated);
            return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan kontak: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $kontak = Kontak::findOrFail($id);
        return redirect()->route('kontak.edit', $id);
    }

    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'alamat' => 'required|string',
            'telpon' => 'required|string|max:50',
            'maps' => 'required|string',
            'email' => 'required|email|max:100',
            'youtube' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
        ]);

        try {
            $kontak = Kontak::findOrFail($id);
            $kontak->update($validated);

            return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui kontak: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $kontak = Kontak::findOrFail($id);
            $kontak->delete();
            return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus kontak: ' . $e->getMessage());
        }
    }
}