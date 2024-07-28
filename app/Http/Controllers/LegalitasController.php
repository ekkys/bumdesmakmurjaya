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
            'nama' => 'required|string',
            'link' => 'required|string',
            'deskripsi' => 'required|string',
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
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'nama' => 'nullable|string',
    //         'link' => 'nullable|string',
    //         'deskripsi' => 'required|string',
    //     ]);

    //     try {
    //         $legalitas = Legalitas::findOrFail($id);

    //         if ($request->hasFile('gambar')) {
    //             if ($legalitas->gambar && Storage::disk('public')->exists($legalitas->gambar)) {
    //                 Storage::disk('public')->delete($legalitas->gambar);
    //             }
    //         }
    //         $path = $request->file('gambar')->store('legalitas', 'public');

    //         $legalitas->update([
    //             'gambar' => $path,
    //             'nama' => $request->nama,
    //             'link' => $request->link,
    //             'deskripsi' => $request->deskripsi,
    //         ]);

    //         return redirect()->route('legalitas.index')->with('success', 'Legalitas Updated successfully.');
    //     } catch (\Exception $e) {
    //         throw $e;
    //         return redirect()->back()->with('error', 'Failed to update Legalitas.');
    //     }
    // }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'nullable|string',
            'link' => 'nullable|string',
            'deskripsi' => 'required|string',
        ]);

        try {
            $legalitas = Legalitas::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($legalitas->gambar && Storage::disk('public')->exists($legalitas->gambar)) {
                    Storage::disk('public')->delete($legalitas->gambar);
                }
                $path = $request->file('gambar')->store('legalitas', 'public');
                $legalitas->gambar = $path;
            }

            $legalitas->nama = $request->nama;
            $legalitas->link = $request->link;
            $legalitas->deskripsi = $request->deskripsi;

            $legalitas->save();

            return redirect()->route('legalitas.index')->with('success', 'Legalitas updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Legalitas.');
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
