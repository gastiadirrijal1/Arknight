<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhodes Island Tactical Report - Arknights Fan Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" href="arknights_icon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Oswald:wght@500&display=swap');

        :root {
            --ri-dark: #121212;
            --ri-red: #E60000;
            --ri-light: #FFFFFF;
            --ri-secondary: #2C2C2C;
            --ri-border: #444444;
        }

        body {
            background-color: var(--ri-dark); 
            color: var(--ri-light); 
            font-family: 'Roboto', sans-serif;
            transition: background-color 0.5s, color 0.5s;
        }

        .bg-theme-dark {
            background-color: var(--ri-dark) !important;
            border-bottom: 2px solid var(--ri-red); 
        }

        .bg-section-light {
            background-color: var(--ri-secondary) !important;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(18, 18, 18, 0.95)), url(bg.jpg) no-repeat center center;
            background-size: cover;
            background-position: top center;
            padding: 120px 0;
            text-align: left;
            border-bottom: 5px solid var(--ri-red);
            transition: background 0.5s ease;
        }
        
        .hero-section h1 {
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            color: var(--ri-light); 
        }

        .btn-ri-primary {
            background-color: var(--ri-red);
            border-color: var(--ri-red);
            color: white;
            transition: background-color 0.3s;
        }
        .btn-ri-primary:hover {
            background-color: #FF2222;
            border-color: #FF2222;
            color: white;
        }

        .btn-outline-light {
            color: var(--ri-light);
            border-color: var(--ri-light);
        }
        .btn-outline-light:hover {
            background-color: var(--ri-light);
            color: var(--ri-dark);
        }

        #about img {
            border: 5px solid var(--ri-red);
        }


        .list-group-item {
            background-color: var(--ri-dark);
            border: 1px solid var(--ri-border);
            color: var(--ri-light);
            transition: background-color 0.3s;
        }
        .list-group-item:hover {
            background-color: #000000; 
        }
        .list-group-item .text-warning {
            color: #FFC107 !important; 
        }

        .operator-card {
            background-color: var(--ri-secondary);
            border: 1px solid var(--ri-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3); 

            display: flex; 
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .operator-card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 25px rgba(230, 0, 0, 0.6); 
        }

        .gallery-img {
            height: 250px;
            object-fit: cover;
            border-bottom: 3px solid var(--ri-red);
            flex-shrink: 0; 
        }

        .operator-card .card-body {

            display: flex;
            flex-direction: column;
            justify-content: center; 
            flex-grow: 1;
            padding-bottom: 1rem;
        }

        .operator-card .card-text small {
             color: #BBBBBB !important; 
        }

        #contact .card {
            background-color: var(--ri-secondary) !important;
            border: 2px solid var(--ri-red) !important;
        }
        #contact .form-control {
            background-color: #121212 !important; 
            color: var(--ri-light) !important; 
            border: 1px solid #555 !important;
        }
        #contact .form-label {
             color: var(--ri-light) !important; 
        }
        
        .text-muted {
            color: #BBBBBB !important;
        }

        .schedule-card {
            background-color: var(--ri-secondary);
            border: 1px solid var(--ri-border);
            text-align: center;
            height: 100%; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .schedule-card:hover {
            background-color: #000000;
        }
        
        .schedule-card .display-4 {
            color: var(--ri-red);
        }


        #me .accordion-button:not(.collapsed) {
            color: var(--ri-light);
            background-color: var(--ri-red);
            box-shadow: none;
            border-color: var(--ri-red);
        }

        #me .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        #me .accordion-item {
            background-color: var(--ri-dark);
            border: 1px solid var(--ri-border);
            color: var(--ri-light);
        }

        #me .accordion-button {
            background-color: var(--ri-secondary);
            color: var(--ri-light);
        }

        #me .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(230, 0, 0, 0.25);
        }

        body.light-mode {
            --ri-dark: #F8F9FA;       
            --ri-light: #212529;      
            --ri-secondary: #FFFFFF;  
            --ri-border: #DEE2E6;     
        }

        body.light-mode .navbar {
            background-color: #FFFFFF !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        body.light-mode .nav-link, 
        body.light-mode .navbar-brand {
            color: #212529 !important;
        }
        body.light-mode .list-group-item:hover,
        body.light-mode .schedule-card:hover {
            background-color: #E9ECEF; 
        }
        body.light-mode #contact .form-control {
            background-color: #FFFFFF !important;
            color: #212529 !important;
            border: 1px solid #CED4DA !important;
        }
        body.light-mode .text-muted,
        body.light-mode .operator-card .card-text small {
            color: #6c757d !important;
        }
        
        body.light-mode .btn-outline-light {
            color: #212529 !important;
            border-color: #212529 !important;
        }


        body.light-mode .hero-section {
             background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(245, 245, 245, 0.95)), url(bg.jpg) no-repeat center center;
        }


        #btnBackToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none; 
            z-index: 1000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
            padding: 0;
            line-height: 50px;
            text-align: center;
        }

        .live-clock {
            font-family: 'Courier New', monospace; 
            font-weight: bold;
            color: var(--ri-red);
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-theme-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-shield-fill me-2" style="color: var(--ri-red);"></i>RHODES ISLAND
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home Base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#me">About Me</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reports">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Daftar Operator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" hre
                        f="#contact">Dokumen Rekrutmen</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger btn-sm ms-3" href="login.php">
                            <i class="bi bi-box-arrow-in-right"></i> LOGIN
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0 border-start ps-lg-3 border-secondary d-flex align-items-center">
                        <div class="btn-group" role="group" aria-label="Theme Switcher">
                            <button type="button" class="btn btn-sm btn-outline-danger" id="btnDark" title="Mode Gelap">
                                <i class="bi bi-moon-stars-fill"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-light" id="btnLight" title="Mode Terang">
                                <i class="bi bi-sun-fill"></i>
                            </button>
                        </div>
                    </li>
                    
                    <li class="nav-item ms-3 d-none d-lg-block">
                        <div id="clockDisplay" class="live-clock">
                            --:--:--
                        </div>
                        <small class="text-muted" style="font-size: 0.7rem;">TERRA STANDARD TIME</small>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="home" class="hero-section">
            <div class="container">
                <h1 class="display-2 mb-3">RHODES ISLAND PHARMACEUTICAL</h1>
                <p class="lead fw-light">Melindungi yang rentan dan memerangi Bencana di dunia Terra.</p>
                <div class="mt-4">
                     <a href="#gallery" class="btn btn-ri-primary btn-lg me-2">
                         <i class="bi bi-person-badge"></i> Lihat Operator
                     </a>
                     <a href="#reports" class="btn btn-outline-light btn-lg">
                         <i class="bi bi-journal-text"></i> Baca Laporan
                     </a>
                </div>
            </div>
        </section>

        <section id="about" class="py-5 bg-section-light">
            <div class="container">
                <h2 class="text-center mb-5" style="font-family: 'Oswald', sans-serif;">PROFIL DOKTER BARU</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <figure class="m-0 text-center">
                            <img src="logo.jpg" alt="Rhodes Island" class="img-fluid d-block mx-auto rounded-3">
                            <figcaption class="text-muted small mt-2">Dokter Gastiadirrijal Rafi Maulana, data operasional awal.</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h3 class="border-bottom pb-2 mb-3" style="color: var(--ri-red);">DATA OPERASIONAL</h3>
                        <p class="mb-2"><strong style="color: var(--ri-red);">Nama Kode:</strong> Gastiadirrijal Rafi Maulana</p>
                        <p class="mb-2"><strong style="color: var(--ri-red);">Nomor Registrasi:</strong> A11.2024.15842</p>
                        <p class="mb-2"><strong style="color: var(--ri-red);">Spesialisasi:</strong> Teknik Informasi & Strategi Tempur</p>
                        <p class="mt-4 fst-italic">"Kami bergerak di bawah naungan bayangan, tetapi tujuan kami adalah cahaya. Selamat datang kembali, Doctor. Misi menanti."</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5" style="font-family: 'Oswald', sans-serif;">SCHEDULE</h2>
                <div class="row g-4">
                    
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-book display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Membaca</h5>
                                <p class="card-text text-muted small">Menambah wawasan setiap pagi sebelum beraktivitas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-journal-text display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Menulis</h5>
                                <p class="card-text text-muted small">Mencatat setiap pengalaman harian di jurnal pribadi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-people display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Diskusi</h5>
                                <p class="card-text text-muted small">Bertukar ide dengan teman dalam kelompok belajar.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-bicycle display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Olahraga</h5>
                                <p class="card-text text-muted small">Menjaga kesehatan dengan bersepeda sore hari.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-film display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Movie</h5>
                                <p class="card-text text-muted small">Menonton film yang bagus di bioskop.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card schedule-card p-3">
                            <div class="card-body">
                                <i class="bi bi-basket display-4 mb-2"></i>
                                <h5 class="card-title fw-bold">Belanja</h5>
                                <p class="card-text text-muted small">Membuat kebutuhan bulanan di supermarket.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="me" class="py-5 bg-section-light">
            <div class="container">
                <h2 class="text-center mb-5" style="font-family: 'Oswald', sans-serif;">ABOUT ME</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="accordion" id="accordionMe">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="bi bi-gear-fill me-2"></i> Universitas DIAN NUSWANTORO
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionMe">
                                    <div class="accordion-body">
                                        <p class="mb-1"><strong>Frontend:</strong> Gastiadirrijal</p>
                                        <p class="mb-0"><strong>Lainnya:</strong> A11.2024.15842.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="bi bi-book-half me-2"></i> RIWAYAT PENDIDIKAN
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionMe">
                                    <div class="accordion-body">
                                        <p class="mb-1"><strong>sd,smp,sma</strong> SMAN 1 DEMAK</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="bi bi-bullseye me-2"></i> TUJUAN MASA DEPAN
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionMe">
                                    <div class="accordion-body">
                                        <p class="mb-1">Menjadi orang kaya dan bisa membantu orang</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
          <section id="reports" class="py-5 bg-section-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">LAPORAN TAKTIS TERBARU</h2>
            
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <input type="text" id="keyword" class="form-control form-control-lg" placeholder="Cari artikel (judul atau isi)...">
                </div>
            </div>

            <div class="row g-4" id="article-container">
                
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM artikel";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <?php if($row['gambar'] != ""): ?>
                                <img src="<?= $row['gambar'] ?>" class="card-img-top" alt="img" style="height: 200px; object-fit: cover;">
                            <?php else: ?>
                                <div class="card-body text-center"><i class="bi bi-book-half fs-1 text-primary"></i></div>
                            <?php endif; ?>
                            
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $row['judul'] ?></h5>
                                <p class="card-text"><?= $row['isi'] ?></p>
                                <a href="<?= $row['link_ref'] ?>" class="btn btn-sm btn-outline-primary mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php 
                    } 
                } else {
                    echo "<p class='text-center'>Belum ada artikel.</p>";
                }
                ?>

            </div>
        </div>
    </section>

    <section id="gallery" class="py-5" style="background-color: #1c1c1c;">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="fw-bold text-white">DATABASE OPERATOR (GALLERY)</h2>
                    <div style="width: 60px; height: 3px; background-color: #E60000; margin: 0 auto;"></div>
                </div>
            </div>
            <div class="row g-4">
                <?php
                include "koneksi.php";
                $sql_g = "SELECT * FROM gallery";
                $res_g = $conn->query($sql_g);
                while($g = $res_g->fetch_assoc()){
                ?>
                <div class="col-md-4">
                    <div class="card h-100 bg-dark text-white border-secondary">
                        <img src="<?= $g['gambar'] ?>" class="card-img-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-warning"><?= $g['judul'] ?></h5>
                            <p class="card-text text-muted"><?= $g['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5" style="font-family: 'Oswald', sans-serif;">FORMULIR ASESMEN REKRUTMEN</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">
                                            <i class="bi bi-person me-1"></i> Nama Lengkap (Kode Operasi):
                                        </label>
                                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            <i class="bi bi-envelope me-1"></i> Kontak Darurat (Email):
                                        </label>
                                        <input type="email" class="form-control" id="email" placeholder="contoh@rhodesisland.com" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">
                                            <i class="bi bi-calendar me-1"></i> Tanggal Asesmen:
                                        </label>
                                        <input type="date" class="form-control" id="tgl_lahir" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">
                                            <i class="bi bi-telephone me-1"></i> Nomor Kontak:
                                        </label>
                                        <input type="tel" class="form-control" id="telepon" placeholder="contoh: 08xxxxxxxxxx" required>
                                    </div>
                                    
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-ri-primary btn-lg">
                                            <i class="bi bi-send-check"></i> Submit Asesmen
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
    
    <footer class="bg-theme-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Rhodes Island Fan Project. Task Completed.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="https://www.arknights.global/" class="text-decoration-none" style="color: #BBBBBB;">Official Arknights Global</a> |
                    <a href="#" class="text-decoration-none" style="color: #BBBBBB;">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <button type="button" class="btn btn-ri-primary" id="btnBackToTop" title="Kembali ke Atas">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        const btnDark = document.getElementById('btnDark');
        const btnLight = document.getElementById('btnLight');
        const body = document.body;

        btnDark.addEventListener('click', function() {
            body.classList.remove('light-mode');
            console.log("Mode: Dark");
        });

        btnLight.addEventListener('click', function() {
            body.classList.add('light-mode');
            console.log("Mode: Light");
        });

        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', { hour12: false });
            const dateString = now.toLocaleDateString('id-ID', { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' });
            document.getElementById('clockDisplay').innerHTML = dateString + ' | ' + timeString;
        }
        setInterval(updateClock, 1000);
        updateClock(); 

        const myButton = document.getElementById("btnBackToTop");

        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                myButton.style.display = "block";
            } else {
                myButton.style.display = "none";
            }
        };

        myButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Event ketika user mengetik di kolom pencarian
            $('#keyword').on('keyup', function() {
                var nilaiPencarian = $(this).val();

                // Fungsi .load() dari JQuery untuk mengambil data dari ajax_cari.php
                // Syntax: $(selector).load(URL + data);
                $('#article-container').load('ajax_cari.php?keyword=' + nilaiPencarian);
            });
        });
    </script>
</body>
</html>