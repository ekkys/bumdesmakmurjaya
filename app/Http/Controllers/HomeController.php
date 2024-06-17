<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'quote' => 'required|string|max:255',
            'hashtag' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);
        // dd($request->all());
        try {
            $path = $request->file('gambar')->store('home', 'public');
            Home::create([
                'gambar' => $path,
                'judul' => $request->judul,
                'quote' => $request->quote,
                'hashtag' => $request->hashtag,
                'link' => $request->link,
            ]);
            return redirect()->route('home.index')->with('success', 'Home created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create home.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home = Home::findOrFail($id);
        return view('home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'quote' => 'required|string|max:255',
            'hastag' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);
        try {
            $home = Home::findOrFail($id);
            if ($request->hasFile('gambar')) {
                Storage::disk('public')->delete($home->gambar);
                $path = $request->file('gambar')->store('home', 'public');
            } else {
                $path = $home->gambar;
            }

            $home->update([
                'gambar' => $path,
                'judul' => $request->judul,
                'quote' => $request->quote,
                'hastag' => $request->hastag,
                'link' => $request->link,
            ]);
            return redirect()->route('home.index')->with('success', 'Home Updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update home.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $home = Home::findOrFail($id);
            Storage::disk('public')->delete($home->gambar);
            $home->delete();
            return redirect()->route('homes.index')->with('success', 'Home deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete home.');
        }
    }
}
