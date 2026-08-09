<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Unit;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    public function index()
    {
        $biayas = Biaya::all();
        return view('admin.biaya.index', compact('biayas'));
    }

    public function create()
    {
        $kategori_layanan = Unit::all();
        return view('admin.biaya.create', compact('kategori_layanan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nominal' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
            'item_layanan' => 'required|string',
            'satuan' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:100',
        ]);

        try {
            Biaya::create([
                'nama' => $request->nama,
                'kategori' => $request->kategori,
                'nominal' => $request->nominal,
                'item_layanan' => $request->item_layanan,
                'satuan' => $request->satuan,
                'keterangan' => $request->keterangan ?? '-',
            ]);

            return redirect()->route('biaya.index')->with('success', 'Paket biaya layanan berhasil ditambahkan!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan paket biaya: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $kategori_layanan = Unit::all();
        $biaya = Biaya::findOrFail($id);
        return view('admin.biaya.edit', compact('biaya', 'kategori_layanan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nominal' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
            'item_layanan' => 'required|string',
            'satuan' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:100',
        ]);

        try {
            $biaya = Biaya::findOrFail($id);
            $biaya->nama = $request->nama;
            $biaya->nominal = $request->nominal;
            $biaya->kategori = $request->kategori;
            $biaya->item_layanan = $request->item_layanan;
            $biaya->satuan = $request->satuan;
            $biaya->keterangan = $request->keterangan ?? '-';
            $biaya->save();

            return redirect()->route('biaya.index')->with('success', 'Paket biaya layanan berhasil diperbarui!');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui paket biaya: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $biaya = Biaya::findOrFail($id);
            $biaya->delete();
            return redirect()->route('biaya.index')->with('success', 'Paket biaya layanan berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal menghapus paket biaya: ' . $e->getMessage());
        }
    }
}