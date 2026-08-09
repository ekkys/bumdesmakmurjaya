<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login Admin - BUMDes Makmur Jaya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets_nice/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets_nice/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_nice/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_nice/css/style.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
        }
        .card {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            border: 1px solid #e2e8f0;
        }
        .btn-primary {
            background: #059669;
            border-color: #059669;
            border-radius: 50px;
            padding: 10px;
            font-weight: 600;
        }
        .btn-primary:hover {
            background: #047857;
            border-color: #047857;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ route('website.index') }}" class="logo d-flex align-items-center w-auto text-decoration-none">
                                    <img src="{{ asset('assets/img/bumdes.png') }}" alt="Logo" style="max-height: 40px;" class="me-2">
                                    <span class="fs-5 fw-bold text-dark">BUMDes Makmur Jaya</span>
                                </a>
                            </div>

                            <div class="card mb-3 w-100">
                                <div class="card-body p-4">

                                    <div class="pt-2 pb-3 text-center">
                                        <h5 class="card-title pb-0 fs-4 fw-bold">Login Admin</h5>
                                        <p class="text-muted small">Masukkan email dan password akun Anda</p>
                                    </div>

                                    @if (session('error'))
                                        <div class="alert alert-danger py-2 small">
                                            <i class="bi bi-exclamation-triangle me-1"></i> {{ session('error') }}
                                        </div>
                                    @endif

                                    <form class="row g-3" action="{{ route('actionlogin') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label fw-semibold small">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="email" name="email" class="form-control" id="yourEmail" placeholder="nama@email.com" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label fw-semibold small">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                                <input type="password" name="password" class="form-control" id="yourPassword" placeholder="••••••••" required>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Masuk ke Dashboard</button>
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <a href="{{ route('website.index') }}" class="small text-muted text-decoration-none">
                                                <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                                            </a>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_nice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_nice/js/main.js') }}"></script>
</body>

</html>
