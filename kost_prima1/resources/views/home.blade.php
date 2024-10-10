<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background-color: #800000;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Prima Kost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Status Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <header class="custom-bg text-white text-center py-5">
        <div class="container">
            <h1>Prima Kost Website</h1>
            <p class="lead">Your One-Stop Solution for Everything</p>
            <a href="#" class="btn btn-sm btn-dark mt-3">Login</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-briefcase" style="font-size: 2rem;"></i>
                    <h3 class="mt-3">Professional Services</h3>
                    <p>We provide top-notch services tailored to your needs.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-shield" style="font-size: 2rem;"></i>
                    <h3 class="mt-3">Secure & Trusted</h3>
                    <p>Your security and trust are our top priority.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-phone" style="font-size: 2rem;"></i>
                    <h3 class="mt-3">24/7 Support</h3>
                    <p>Our team is available around the clock to assist you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kost Information Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-3">Informasi Kost</h2>
            <div class="row">
                <!-- Deskripsi Kost -->
                <div class="col-md-6">
                    <h3>Kost Nyaman dan Terjangkau</h3>
                    <p>
                        Kami menawarkan kost dengan fasilitas lengkap dan harga yang bersahabat.
                        Lokasi strategis dekat perkantoran, sekolah, dan tempat kuliner cocok untuk
                        mahasiswa dan pekerja yang mencari kenyamanan dan kemudahan.
                    </p>
                    <ul>
                        <li>Kamar luas dan nyaman</li>
                        <li>AC, Wi-Fi, TV, dan kamar mandi dalam</li>
                        <li>Keamanan 24 jam</li>
                    </ul>
                </div>
                <!-- Gambar Kost -->
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Gambar Kost">
                </div>
            </div>
            <div class="row mt-4">
                <!-- Informasi Tambahan -->
                <div class="col-md-4 text-center">
                    <h4>Lokasi</h4>
                    <p>Komplek Sejahtera Mandiri, Jalur 1 No. 17 RT 12 RW 01, Angsau, Tanah Laut</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Harga</h4>
                    <p>Mulai dari Rp 500.000/bulan</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Kontak</h4>
                    <p>0812-3456-7890</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Kost Prima. All rights reserved.</p>
            <p>
                <a href="#" class="text-white me-2">Privacy Policy</a> |
                <a href="#" class="text-white ms-2">Terms of Use</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
