<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.main-layout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dashboard(Request $request)
    {
        // Visitor counter
        $ip = $request->ip();
        // Get or create a visitor record with the IP address
        $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
        // Increment the visits count
        $visitor->increment('visits', 9);
        // Optionally, count the total number of visitors
        $totalVisitors = Visitor::count();
        $totalVisitors = $totalVisitors * 9;
        // Visitors per day
        $visitorsPerDay = Visitor::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Visitors per month
        $visitorsPerMonth = Visitor::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        return view('admin.dashboard.index', compact('totalVisitors', 'visitorsPerDay', 'visitorsPerMonth'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function loginPage(Request $request)
    {
        return view('admin.login1');
    }

    /**
     * Display the specified resource.
     */
    public function actionLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home.index'));
        } else {
            $request->session()->put('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function actionlogout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
