<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Biaya;
use App\Models\Galeri;
use App\Models\Klien;
use App\Models\Layanan;
use App\Models\Unit;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Dashboard overview with statistics
     */
    public function dashboard(Request $request)
    {
        $totalVisitors = Visitor::count() * 9;
        $totalBerita = Berita::count();
        $totalUnit = Unit::count();
        $totalLayanan = Layanan::count();
        $totalGaleri = Galeri::count();
        $totalKlien = Klien::count();
        $totalBiaya = Biaya::count();

        $latestBerita = Berita::latest('tanggal_publikasi')->take(5)->get();

        return view('admin.dashboard.index', compact(
            'totalVisitors',
            'totalBerita',
            'totalUnit',
            'totalLayanan',
            'totalGaleri',
            'totalKlien',
            'totalBiaya',
            'latestBerita'
        ));
    }

    /**
     * Show admin login page
     */
    public function loginPage(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.login1');
    }

    /**
     * Process admin login
     */
    public function actionLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->withInput($request->only('email'))->with('error', 'Email atau Password salah!');
    }

    /**
     * Logout
     */
    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
