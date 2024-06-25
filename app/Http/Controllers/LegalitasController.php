<?php

namespace App\Http\Controllers;

use App\Models\Legalitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class LegalitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legalitas = Legalitas::all();
        return view('admin.legalitas.index', compact('legalitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.legalitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);

        try {
            $path = $request->file('gambar')->store('legalitas', 'public');
            Legalitas::create([
                'gambar' => $path,
                'nama' => $request->nama,
                'link' => $request->link,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->route('legalitas.index')->with('success', 'Home created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create home.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Legalitas $legalitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $legalitas = Legalitas::findOrFail($id);
        return view('admin.legalitas.edit', compact('legalitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);

        try {
            $legalitas = Legalitas::findOrFail($id);

            if ($request->hasFile('gambar')) {
                Storage::disk('public')->delete($legalitas->gambar);
                $path = $request->file('gambar')->store('legalitas', 'public');
            } else {
                $path = $legalitas->gambar;
            }
            // var_dump($legalitas);
            $legalitas->update([
                'gambar' => $path,
                'nama' => $request->nama,
                'link' => $request->link,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->route('legalitas.index')->with('success', 'Home Updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update home.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Legalitas::find($id);
            Storage::disk('public')->delete($data->gambar);
            $data->delete();
            return redirect()->route('legalitas.index')->with('success', 'Home deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete home.');
        }
    }
}
