<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
    </div>
    <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up" class="">BUMDESA <span>Makmur Jaya</span></h1>
            <p data-aos="fade-up" data-aos-delay="100" class="">Melayani sepenuh hati.<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#about" class="btn-get-started">Cari tahu Yuk !</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
            {{-- <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt=""
                        data-aos="zoom-out" data-aos-delay="300"> --}}
        </div>
    </div>

</section><!-- /Hero Section -->


<!-- Tentang kami Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p class="who-we-are">Tentang Kami</p>
                <h3>BUMDES Makmur Jaya</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                            voluptate velit.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                            storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-12">
                                <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section><!-- /About Section -->

<!-- Legalitas Services Section -->

<section id="featured-services" class="featured-services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="">Legalitas</h2>
        <p>Sertifikasi dan Perijinan BUMDES Makmur Jaya</p>
    </div><!-- End Section Title -->

    {{-- <div class="containers">
                <div class="row gy-4">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <h4 class="title">
                                    <a href="https://drive.google.com/file/d/1EbNKGc5Un9Voq_F2JgApD2lk19hSnRQm/view?usp=sharing"
                                        class="stretched-link text-center">
                                        NIB - Nomor Ijin Berusaha
                                        <!-- Image Preview -->
                                        <img src="{{ url('assets\img\ss.png') }}" alt="Image Preview" width="320"
                                            height="480">
                                    </a>
                                </h4>
                            </div>
                        </div>
                    @endfor
                </div>
                <!-- End Service Item -->
            </div> --}}

    <div class="containers">
        <div class="gy-4" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
            @for ($i = 1; $i <= 3; $i++)
                <div class="" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://drive.google.com/file/d/1EbNKGc5Un9Voq_F2JgApD2lk19hSnRQm/view?usp=sharing"
                        class="" style="display: flex; flex-direction: column; gap: 10px;">
                        NIB - Nomor Ijin Berusaha
                        <!-- Image Preview -->
                        <img src="{{ url('assets\img\ss.png') }}" alt="Image Preview" width="320" height="480">
                    </a>
                </div>
            @endfor
        </div>
        <!-- End Service Item -->
    </div>

    </div>

</section>

<!-- Unit Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="">Unit- Unit BUMDES Makmur Jaya</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-5 d-flex align-items-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <i class="bi bi-binoculars"></i>
                            <div>
                                <h4 class="d-none d-lg-block">Unit TPS 3R</h4>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <i class="bi bi-box-seam"></i>
                            <div>
                                <h4 class="d-none d-lg-block">Unit Persewaan Toko</h4>
                                <p>
                                    Recusandae atque nihil. Delectus vitae non similique magnam molestiae
                                    sapiente similique
                                    tenetur aut voluptates sed voluptas ipsum voluptas
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <i class="bi bi-brightness-high"></i>
                            <div>
                                <h4 class="d-none d-lg-block">Unit Peminjaman Dana UMKM</h4>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum
                                    Debitis nulla est maxime voluptas dolor aut
                                </p>
                            </div>
                        </a>
                    </li>
                </ul><!-- End Tab Nav -->

            </div>
            {{-- Gambar di kanannya --}}
            <div class="col-lg-6">

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                    </div><!-- End Tab Content Item -->
                </div>

            </div>

        </div>

    </div>

</section><!-- /Features Section -->

<!-- Features Details Section -->
<section id="features-details" class="features-details section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="">Layanan Kami</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->
    <div class="container">

        <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Pengangkutan dan Pengolahan Sampah <strong> Non B3</strong></h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident.
                    </p>
                    <a href="#" class="btn more-btn">Learn More</a>
                </div>
            </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up"
                data-aos-delay="100">

                <div class="content">
                    <h3>Pembelian Anfalan & Barang Bekas.</h3>
                    <p>
                        Quidem qui dolore incidunt aut. In assumenda harum id iusto lorena plasico mares
                    </p>
                    <ul>
                        <li><i class="bi bi-easel flex-shrink-0"></i> Et corporis ea eveniet ducimus.</li>
                        <li><i class="bi bi-patch-check flex-shrink-0"></i> Exercitationem dolorem sapiente.
                        </li>
                        <li><i class="bi bi-brightness-high flex-shrink-0"></i> Veniam quia modi magnam.</li>
                    </ul>
                    <p></p>
                    <a href="#" class="btn more-btn">Learn More</a>
                </div>

            </div>

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
            </div>

        </div><!-- Features Item -->
        <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Pemusnahan dokumen & Produk Expired</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident.
                    </p>
                    <a href="#" class="btn more-btn">Learn More</a>
                </div>
            </div>

        </div><!-- Features Item -->
    </div>
</section><!-- /Features Details Section -->

<!-- Klien Section -->
<section id="clients" class="clients section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="">Klien Kami</h2>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->
        </div>
    </div>
    <div class="content container section-title" data-aos="fade-up">
        <a href="#" class="btn btn-primary" style="background:#388da8; border:#388da8;">Learn More <i
                class="bi bi-arrow-right"></i></a>
    </div><!-- End Section Title -->
</section><!-- /Clients Section -->


{{--
        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-activity icon"></i>
                            <div>
                                <h3>Nesciunt Mete</h3>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus
                                    dolores iure perferendis tempore et consequatur.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-broadcast icon"></i>
                            <div>
                                <h3>Eosle Commodi</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-easel icon"></i>
                            <div>
                                <h3>Ledo Markt</h3>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                    voluptas adipisci eos earum corrupti.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <i class="bi bi-bounding-box-circles icon"></i>
                            <div>
                                <h3>Asperiores Commodi</h3>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea
                                    fuga sit provident adipisci neque.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-calendar4-week icon"></i>
                            <div>
                                <h3>Velit Doloremque.</h3>
                                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut.
                                    Sed animi at autem alias eius labore.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <i class="bi bi-chat-square-text icon"></i>
                            <div>
                                <h3>Dolori Architecto</h3>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                    Corrupti recusandae ducimus enim.</p>
                                <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section --> --}}

<!-- More Features Section -->
{{-- <section id="more-features" class="more-features section">
            <div class="container">

                <div class="row justify-content-around gy-4">

                    <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Enim quis est voluptatibus aliquid consequatur</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed
                            minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                        <div class="row">

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-easel flex-shrink-0"></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-patch-check flex-shrink-0"></i>
                                <div>
                                    <h4>Nemo Enim</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-brightness-high flex-shrink-0"></i>
                                <div>
                                    <h4>Dine Pad</h4>
                                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-brightness-high flex-shrink-0"></i>
                                <div>
                                    <h4>Tride clov</h4>
                                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>

                    </div>

                    <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-3.jpg" alt="">
                    </div>

                </div>

            </div>
        </section><!-- /More Features Section --> --}}


<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Biaya Layanan</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Retribusi Pelayanan Desa</h3>
                    <p class="description">Biaya Layanan dibayarkan Perbulan</p>
                    <h4><sup>Rp</sup>1.800.000<span> / bulan - Dusun</span></h4>
                    <a href="#" class="cta-btn">Start a free trial</a>
                    <p class="text-center small">No credit card required</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                hendrerit</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Voluptate id voluptas qui sed aperiam
                                rerum</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit
                                voluptatibus</span></li>
                    </ul>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item featured">
                    <p class="popular">Popular</p>
                    <h3>Retribusi Perusahaan</h3>
                    <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex
                        strater</p>
                    <h4><sup>Rp</sup>800.000<span> / bulan</span></h4>
                    <a href="#" class="cta-btn">Start a free trial</a>
                    <p class="text-center small">No credit card required</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam
                                rerum</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit
                                voluptatibus</span></li>
                    </ul>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-item">
                    <h3>Retribusi Pemusanahan </h3>
                    <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex
                        strater</p>
                    <h4><sup>Rp</sup>500.000<span> / truck</span></h4>
                    <a href="#" class="cta-btn">Start a free trial</a>
                    <p class="text-center small">No credit card required</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam
                                rerum</span></li>
                        <li><i class="bi bi-check"></i> <span>Iure nihil dolores recusandae odit
                                voluptatibus</span></li>
                    </ul>
                </div>
            </div><!-- End Pricing Item -->

        </div>

    </div>

</section><!-- /Pricing Section -->

{{--
        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper">
                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                  }
                }
              }
            </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section --> --}}

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Kami</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Dusun Tundungan, Tundungan, Sidomojo, Kec. Krian, Kabupaten Sidoarjo, Jawa Timur
                        35151</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Hubungi kami</h3>
                    <p>+62 895-6322-10577</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>admin@bumdesmakmurjaya.com</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8013057203636!2d112.583538!3d-7.3945369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780985bd56483b:0x5ea5850216f1457a!2sBUMDes%20MAKMUR%20JAYA%20Desa%20Sidomojo!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                    frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

        </div>

    </div>

</section><!-- /Contact Section -->
