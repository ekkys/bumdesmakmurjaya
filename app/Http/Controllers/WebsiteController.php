<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Biaya;
use App\Models\Galeri;
use App\Models\Home;
use App\Models\Klien;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Legalitas;
use App\Models\Tentang;
use App\Models\Unit;
use App\Models\Visitor;
use DOMDocument;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display landing page
     */
    public function index(Request $request)
    {
        $visitors = rand(150, 450);

        // Pre View Tentang 1 paragraf
        $tentang = Tentang::first();
        $firstParagraph = "BUMDesa Makmur Jaya merupakan Badan Usaha Milik Desa yang bergerak dalam pengelolaan potensi desa untuk kesejahteraan masyarakat.";

        if ($tentang && !empty($tentang->deskripsi)) {
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML('<?xml encoding="utf-8" ?>' . $tentang->deskripsi);
            libxml_clear_errors();

            $paragraphs = $dom->getElementsByTagName('p');
            if ($paragraphs->length >= 1) {
                $firstParagraph = trim($paragraphs->item(0)->nodeValue);
            }
        }

        // Load models for landing page
        $units = Unit::all();
        $home = Home::first();
        $legalitasPage = Legalitas::take(3)->get();
        $kliens = Klien::all();
        $galeris = Galeri::where('status', 'tampil')->take(8)->get();
        $layananTps = Layanan::where('unit', 'tps')->get();
        $kontaks = Kontak::all();
        $biayas = Biaya::all();
        $beritas = Berita::published()->latest('tanggal_publikasi')->take(3)->get();

        return view('website.landing', compact(
            'home', 'firstParagraph', 'tentang', 'legalitasPage', 
            'kliens', 'units', 'layananTps', 'kontaks', 'visitors', 
            'galeris', 'biayas', 'beritas'
        ));
    }

    /**
     * Public news list page with search and category filtering
     */
    public function beritaIndex(Request $request)
    {
        $query = Berita::published()->latest('tanggal_publikasi');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('ringkasan', 'like', "%{$search}%")
                  ->orWhere('isi', 'like', "%{$search}%");
            });
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $beritas = $query->paginate(6)->withQueryString();
        $categories = Berita::published()->distinct()->pluck('kategori');
        $recentBeritas = Berita::published()->latest('tanggal_publikasi')->take(5)->get();

        return view('website.detail.berita-index', compact('beritas', 'categories', 'recentBeritas'));
    }

    /**
     * Public single news article detail page
     */
    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->published()->firstOrFail();
        $berita->increment('views');

        $recentBeritas = Berita::published()
            ->where('id', '!=', $berita->id)
            ->latest('tanggal_publikasi')
            ->take(4)
            ->get();

        return view('website.detail.berita-detail', compact('berita', 'recentBeritas'));
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
        $kliens = Klien::all();
        return view('website.detail.klien', compact('kliens'));
    }

    public function biayaDetail()
    {
        $biayas = Biaya::all();
        return view('website.detail.biaya', compact('biayas'));
    }

    public function unitDetail($kategori = null)
    {
        if ($kategori) {
            $units = Unit::where('kategori', $kategori)->get();
        } else {
            $units = Unit::all();
        }
        return view('website.detail.unit.tps', compact('units'));
    }

    public function tps3rDetail()
    {
        $units = Unit::where('kategori', 'tps')->get();
        return view('website.detail.unit.tps', compact('units'));
    }

    public function tokoDetail()
    {
        $units = Unit::where('kategori', 'toko')->get();
        return view('website.detail.unit.toko', compact('units'));
    }

    public function pinjamanDetail()
    {
        $units = Unit::where('kategori', 'peminjaman')->get();
        return view('website.detail.unit.pinjaman', compact('units'));
    }

    public function panganDetail()
    {
        $units = Unit::where('kategori', 'pangan')->get();
        return view('website.detail.unit.tps', compact('units'));
    }

    public function pengangkutanDetail()
    {
        $layananTps = Layanan::where('nama', 'like', '%pengangkutan%')->get();
        return view('website.detail.layanan.pengangkutan', compact('layananTps'));
    }

    public function pembelianDetail()
    {
        $layananTps = Layanan::where('nama', 'like', '%pembelian%')->get();
        return view('website.detail.layanan.pembelian', compact('layananTps'));
    }

    public function pemusnahanDetail()
    {
        $layananTps = Layanan::where('nama', 'like', '%pemusnahan%')->get();
        return view('website.detail.layanan.pemusnahan', compact('layananTps'));
    }
}
