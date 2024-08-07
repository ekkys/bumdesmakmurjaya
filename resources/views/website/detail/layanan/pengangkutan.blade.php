@extends('website.detail.detail-main-layout')

@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <!-- WhatsApp Float Button -->
        <a href="https://wa.me/6281511119337" class="whatsapp-float" target="_blank">
            <img src="{{ url('assets\img\whatsapp.png') }}" alt="WhatsApp">
        </a>

        @foreach ($layananTps as $layanan)
            <div class="container mt-3">
                <div class="row">
                    <!-- Page Title -->
                    <div class="page-title" data-aos="fade">
                        <div class="container d-lg-flex justify-content-between align-items-center">
                            <h1 class="mb-2 mb-lg-0">{{ $layanan->nama }}</h1>
                            <nav class="breadcrumbs">
                                <ol>
                                    <li><a href="{{ route('website.index') }}">Home</a></li>
                                    <li class="current">{{ $layanan->nama }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- End Page Title -->
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Ingin bertanya langsung?</h4>
                            <a href="https://wa.me/6281511119337" target="_blank">
                                <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>
                                        +62 895-632-210-577 </span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ Storage::url($layanan->gambar) }}" alt="" class="img-fluid services-img">
                        <h3>
                            <h3>{{ $layanan->nama }}</span></h3>
                        </h3>
                        <div class="mt-3">{!! html_entity_decode($layanan->deskripsi) !!} </div>

                    </div>

                </div>
            </div>
        @endforeach
    </section><!-- /Service Details Section -->
@endsection
