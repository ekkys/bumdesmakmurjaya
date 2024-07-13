<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Klien;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Legalitas;
use App\Models\Tentang;
use App\Models\Unit;
use App\Models\Visitor;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $ip = $request->ip();
        // $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
        // $visitor->increment('visits', 9);

        // $visitors = Visitor::count();

        // Retrieve the IP address from the request
        $ip = $request->ip();

        // Get or create a visitor record with the IP address
        $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);

        // Increment the visits count
        $visitor->increment('visits', 9);

        // Optionally, count the total number of visitors
        $visitors = Visitor::count();

        $units = Unit::all();
        $home = Home::first();
        $legalitasPage = Legalitas::take(3)->get();
        $kliens = Klien::all();
        $layanans = Layanan::all();
        $kontaks = Kontak::all();
        return view('website.landing', compact('home', 'legalitasPage', 'kliens', 'units', 'layanans', 'kontaks', 'visitors'));
    }
    public function tentangDetail()
    {
        $tentang = Tentang::first();
        return view('website.detail.tentang', compact('tentang'));
    }

    public function legalitasDetail()
    {
        $legalitasAll = Legalitas::all();
        return view('website.detail.legalitas', compact('legalitasAll'));
    }
    public function klienDetail()
    {
        return view('website.detail.klien');
    }

    public function biayaDetail()
    {
        return view('website.detail.biaya');
    }
    public function unitTPSDetail()
    {
        return view('website.detail.biaya');
    }

    public function tps3rDetail()
    {
        return view('website.detail.unit.tps');
    }

    public function tokoDetail()
    {
        return view('website.detail.unit.toko');
    }

    public function pinjamanDetail()
    {
        return view('website.detail.unit.pinjaman');
    }
    public function pengangkutanDetail()
    {
        return view('website.detail.layanan.pengangkutan');
    }
    public function pembelianDetail()
    {
        return view('website.detail.layanan.pembelian');
    }
    public function pemusnahanDetail()
    {
        return view('website.detail.layanan.pemusnahan');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website $website)
    {
        //
    }
}
