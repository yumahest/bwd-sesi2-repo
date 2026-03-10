<!DOCTYPE html>
<html lang="id">

<head>
    <!-- META TAGS: Sangat penting untuk SEO dan Mobile-First -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page MVP untuk produk bisnis digital. Dibangun dengan Bootstrap 5 dan HTML5 Semantik untuk performa SEO maksimal.">

    <title>MVP Bisnis Digital | BWD Sesi 2</title>

    <!-- BOOTSTRAP 5 CDN: Mengimpor "Rak Etalase Dinamis" tanpa perlu menulis CSS manual -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT & ICONS: Meningkatkan UI/UX Bisnis -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* CSS KUSTOM MINIMALIS: Praktik CSS Box Model (Margin, Border, Padding) */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        h1,
        h2,
        h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        .box-model-demo {
            padding: 30px;
            /* Jarak dari konten ke dinding kardus (dalam) */
            border: 2px solid #db2627;
            /* Dinding kardus */
            margin-bottom: 20px;
            /* Jarak antar kardus (luar) */
            border-radius: 12px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box-model-demo:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- SEMANTIC TAG: <nav> memberi tahu Google bahwa ini adalah menu navigasi utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-book-open text-danger"></i> Konnichiwa Japan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="target=" #navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SEMANTIC TAG: <header> sebagai area "Hero/Papan Reklame" utama web -->
    <header class="bg-danger text-white text-center py-5">
        <div class="container py-5">
            <h1 class="display-4">Mulai Petualangan Bahasa Jepangmu!</h1>
            <p class="lead mt-3">Belajar dari nol hingga mahir JLPT N1 dengan kurikulum terstruktur dan bantuan AI.</p>
            <a href="#kontak" class="btn btn-light btn-lg mt-3 fw-bold text-danger">Mulai Belajar Sekarang!</a>
        </div>
    </header>

    <!-- SEMANTIC TAG: <main> membungkus seluruh konten inti/jualan utama -->
    <main>

        <!-- SEMANTIC TAG: <section> membagi area web menjadi bagian-bagian logis -->
        <section id="produk" class="container my-5 py-4">
            <div class="text-center mb-5">
                <h2>Persiapan Ujian JLPT</h2>
                <p class="text-muted">Pilih level target ujianmu!</p>
            </div>

            <!-- BOOTSTRAP GRID (Baris) -->
            <div class="row g-4">

                <!-- BOOTSTRAP GRID (Kolom): 
                     col-12 = Ambil 12 kolom penuh di HP (Mobile First)
                     col-md-4 = Ambil 4 kolom di layar medium/Laptop (12/4 = 3 kotak sejajar) 
                -->
                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>Hiragana/Katakana</h3>
                        <p class="text-muted">Learn Japanese Alphabet.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>JLPT N5</h3>
                        <p class="text-muted">Beginner.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>JLPT N4</h3>
                        <p class="text-muted">Upper Beginner.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>JLPT N3</h3>
                        <p class="text-muted">Intermediate.</p>
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>JLPT N2</h3>
                        <p class="text-muted">Upper Intermediate.</p>
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-book-open fa-3x text-danger mb-3"></i>
                        <h3>JLPT N1</h3>
                        <p class="text-muted">Advanced.</p>
                    </div>
                </article>

            </div>
        </section>

        <!-- SECURE FORM SECTION -->
        <section id="kontak" class="bg-white py-5 border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="text-center mb-4">
                            <h2>Dapatkan Proposal Gratis</h2>
                            <p class="text-muted">Praktik HTML5 Secure Form Input (Sanitasi Data)</p>
                        </div>

                        <!-- Form Bisnis: Akan dihubungkan ke PHP/CodeIgniter di pertemuan UAS -->
                        <form action="#" method="POST" class="p-4 border rounded shadow-sm bg-light">

                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label fw-bold">Nama Lengkap</label>
                                <!-- INPUT TEXT BIASA -->
                                <input type="text" class="form-control" id="namaLengkap" placeholder="Cth: Budi Santoso" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailBisnis" class="form-label fw-bold">Email Bisnis</label>
                                <!-- SECURE INPUT: type="email" memaksa user memakai format @domain.com -->
                                <input type="email" class="form-control" id="emailBisnis" placeholder="budi@perusahaan.com" required>
                                <div class="form-text">Kami tidak akan pernah membagikan email Anda (Anti-Spam).</div>
                            </div>

                            <div class="mb-4">
                                <label for="nomorTelepon" class="form-label fw-bold">Nomor WhatsApp</label>
                                <!-- SECURE INPUT: type="tel" otomatis memunculkan Numpad (angka) di HP -->
                                <input type="tel" class="form-control" id="nomorTelepon" placeholder="08123456789" required>
                            </div>

                            <button type="submit" class="btn btn-danger w-100 fw-bold py-2">Kirim Permintaan <i class="fa-solid fa-paper-plane ms-1"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- SEMANTIC TAG: <footer> area penutup yang memberitahu bot ini adalah akhir dokumen -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 Cakrawala Digital Business. <strong>BWD04 - Sesi 2</strong>.</p>
        </div>
    </footer>

    <!-- BOOTSTRAP JS BUNDLE: Diperlukan untuk interaktivitas komponen seperti Navbar Mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>