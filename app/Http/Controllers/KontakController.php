<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'link' => 'required|string|max:255',
        //     'keterangan' => 'required|string|max:255',
        // ]);
        // try {
        //     Kontak::create([
        //         'link' => $request->link,
        //         'keterangan' => $request->keterangan,
        //     ]);
        //     return redirect()->route('kontak.index')->with('success', 'Home created successfully.');
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Failed to create home.');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'alamat' => 'required|string',
            'telpon' => 'required|string',
            'maps' => 'required|string|url',
            'email' => 'required|string',
            'youtube' => 'required|string',
            'whatsapp' => 'required|string',
            'instagram' => 'required|string',
            'facebook' => 'required|string',
            'tiktok' => 'required|string',
        ]);
        try {

            $data = Kontak::findOrFail($id);
            $data->update([
                'alamat' => $request->alamat,
                'telpon' => $request->telpon,
                'maps' => $request->maps,
                'email' => $request->email,
                'youtube' => $request->youtube,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'tiktok' => $request->tiktok,
            ]);

            // return $request->all();
            return redirect()->route('kontak.index')->with('success', 'Kontak Updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Kontak.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kontak = Kontak::findOrFail($id);
            $kontak->delete();
            return redirect()->route('kontak.index')->with('success', 'Kontak Deleted successfully');
        } catch (\Exception $e) {
            throw $e;
            return redirect()->back()->with('error', 'Failed to delete Kontak.');
        }
    }
}
