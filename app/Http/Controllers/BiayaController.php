<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Unit;
use DOMDocument;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biayas = Biaya::all();
        return view('admin.biaya.index', compact('biayas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_layanan = Unit::all();
        return view('admin.biaya.create', compact('kategori_layanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nominal' => 'required',
            'kategori' => 'required',
            'item_layanan' => 'required',
            'satuan' => 'required',
            'keterangan' => 'required',
        ]);
        // return $request->all();

        // return $request->validate();

        $item_layanan = $request->item_layanan;

        $dom = new DOMDocument();
        $dom->loadHTML($item_layanan, 9);
        $item_layanan = $dom->saveHTML();

        Biaya::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'nominal' => $request->nominal,
            'item_layanan' => $item_layanan,
            'satuan' => $request->satuan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('biaya.index')->with('success', 'Biaya created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori_layanan = Unit::all();
        $biaya = Biaya::findOrFail($id);
        return view('admin.biaya.edit', compact('biaya', 'kategori_layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'nominal' => 'required',
            'kategori' => 'required',
            'item_layanan' => 'required',
            'satuan' => 'required',
            'keterangan' => 'required',
        ]);
        // return $request->all();
        $item_layanan = $request->item_layanan;

        $dom = new DOMDocument();
        $dom->loadHTML($item_layanan, 9);
        $item_layanan = $dom->saveHTML();

        $biaya = Biaya::find($id);
        $biaya->nama = $request->nama;
        $biaya->nominal = $request->nominal;
        $biaya->kategori = $request->kategori;
        $biaya->item_layanan = $request->item_layanan;
        $biaya->satuan = $request->satuan;
        $biaya->keterangan = $request->keterangan;
        $biaya->save();

        return redirect()->route('biaya.index')
            ->with('success', 'Biaya updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $biaya = Biaya::find($id);
        $biaya->delete();
        return redirect()->route('biaya.index');
    }
}