@extends('website.layouts.main-layout')

@section('content')
    {{-- 1. Hero Banner Section --}}
    @include('website.sections.hero')

    {{-- 2. Tentang Kami Section --}}
    @include('website.sections.about')

    {{-- 3. Berita & Artikel Terbaru --}}
    @include('website.sections.news')

    {{-- 4. Legalitas & Sertifikasi Section --}}
    @include('website.sections.legalitas')

    {{-- 5. Unit Usaha BUMDes Section --}}
    @include('website.sections.units')

    {{-- 6. Layanan Pengolahan & Pengangkutan Section --}}
    @include('website.sections.services')

    {{-- 7. Klien & Mitra Kami Section --}}
    @include('website.sections.clients')

    {{-- 8. Galeri Dokumentasi Kegiatan Section --}}
    @include('website.sections.gallery')

    {{-- 9. Biaya & Retribusi Layanan Section --}}
    @include('website.sections.pricing')

    {{-- 10. Kontak & Lokasi Section --}}
    @include('website.sections.contact')
@endsection
