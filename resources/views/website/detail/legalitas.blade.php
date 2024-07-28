@extends('website.detail.detail-main-layout')
@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container mt-3">
            <div class="row">
                <!-- Page Title -->
                <div class="page-title" data-aos="fade">
                    <div class="container d-lg-flex justify-content-between align-items-center">
                        <h1 class="mb-2 mb-lg-0">Legalitas</h1>
                        <nav class="breadcrumbs">
                            <ol>
                                <li><a href="index.html">Home</a></li>
                                <li class="current">Legalitas</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- End Page Title -->
            </div>
            <div class="containers mt-5">
                <div class="gy-4" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                    @foreach ($legalitasAll as $legal)
                        <div class="" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ $legal->link }}" class=""
                                style="display: flex; flex-direction: column; gap: 10px;">
                                <strong style="text-align: center;"> {{ $legal->nama }}</strong>
                                <!-- Image Preview -->
                                <img src="{{ Storage::url($legal->gambar) }}" alt="Image Preview" width="320"
                                    height="480">
                                {{-- style=" filter: blur(1px); " --}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
