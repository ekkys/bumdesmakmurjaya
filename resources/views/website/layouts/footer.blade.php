<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        {{-- <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="" class="logo d-flex align-items-center">
                    <span class="sitename">bumdesmakmurjaya.com</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Jl. Dusun Tundungan, Tundungan, Sidomojo, Kec. Krian
                        35151</p>
                    <p> Kabupaten Sidoarjo, Jawa Timur</p>
                    </p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+62 895-6322-10577</span></p>
                    <p><strong>Email:</strong> <span>admin@bumdesmakmurjaya.com</span></p>
                </div>

            </div> --}}
        @foreach ($kontaks as $kontak)
            <div class="social-links d-flex col-xl-6 col-md-6 footer-links">
                <a href="{{ $kontak->facebook }}"><i class="bi bi-facebook"></i></a>
                <a href="{{ $kontak->instagram }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ $kontak->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
                <a href="{{ $kontak->youtube }}"><i class="bi bi-youtube"></i></a>
            </div>
        @endforeach

    </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickStart</strong><span>All Rights
                Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer>
