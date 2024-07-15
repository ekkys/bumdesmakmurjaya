<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use DOMDocument;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangs = Tentang::all();
        return view('admin.tentang.index', compact('tentangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request inputs
        // return $request->all();
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Handle file uploads and store paths
            $gambar1Path = $request->file('gambar1')->store('public/tentang');
            $gambar2Path = $request->file('gambar2')->store('public/tentang');
            $gambar3Path = $request->file('gambar3')->store('public/tentang');


            $deskripsi = $request->deskripsi;

            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi, 9);
            $deskripsi = $dom->saveHTML();

            // Create a new Tentang instance and save the data
            Tentang::create([
                'judul' => $request->judul,
                'deskripsi' => $deskripsi,
                'gambar1' => $gambar1Path,
                'gambar2' => $gambar2Path,
                'gambar3' => $gambar3Path,
                'kategori' => 'tentang',
            ]);

            return redirect()->route('tentang.index')->with('success', 'Tentang created successfully.');
        } catch (\Exception $e) {
            // Log the error message for debugging purposes
            Log::error('Failed to create Tentang: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create Tentang.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        try {
            // Validate the request inputs
            $request->validate([
                'judul' => 'required|string|max:255',
                'deskripsi' => 'required',
                'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'gambar2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'gambar3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $tentang = Tentang::findOrFail($id);

            if ($request->hasFile('gambar1')) {
                //Delete the old image
                Storage::delete($tentang->gambar1);
                $gambar1Path = $request->file('gambar1')->store('public/tentang');
                $tentang->gambar1 = $gambar1Path;
            }


            if ($request->hasFile('gambar2')) {
                // Delete the old image if exists
                if ($tentang->gambar2) {
                    Storage::delete($tentang->gambar2);
                }
                $gambar2Path = $request->file('gambar2')->store('public/tentang');
                $tentang->gambar2 = $gambar2Path;
            }

            if ($request->hasFile('gambar3')) {
                // Delete the old image if exists
                if ($tentang->gambar3) {
                    Storage::delete($tentang->gambar3);
                }
                $gambar3Path = $request->file('gambar3')->store('public/tentang');
                $tentang->gambar3 = $gambar3Path;
            }

            $deskripsi = $request->deskripsi;
            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi, 9);
            $deskripsi = $dom->saveHTML();

            // Update the Tentang instance with new data
            $tentang->judul = $request->judul;
            $tentang->deskripsi = $request->deskripsi;
            // dd($tentang);
            $tentang->save();

            return redirect()->route('tentang.index')->with('success', 'Tentang updated successfully.');
        } catch (\Exception $e) {

            return redirect()->route('tentang.edit')->with('error', 'Failed to update Tentang.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tentang = Tentang::findOrFail($id);
            $tentang->delete();

            return redirect()->route('tentang.index')->with('success', 'Tentang deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('tentang.index')->with('error', 'Failed to delete Tentang.');
        }
    }
}
