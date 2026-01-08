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
        /* CSS ASLI ANDA DILETAKKAN DI SINI */
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

        /* Light Mode Styles */
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
                    <li class="nav-item"><a class="nav-link active" href="#home">Home Base</a></li>
                    <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="#me">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reports">Laporan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Daftar Operator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Dokumen Rekrutmen</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0 border-start ps-lg-3 border-secondary d-flex align-items-center">
                        <div class="btn-group" role="group" aria-label="Theme Switcher">
                            <button type="button" class="btn btn-sm btn-outline-danger" id="btnDark" title="Mode Gelap"><i class="bi bi-moon-stars-fill"></i></button>
                            <button type="button" class="btn btn-sm btn-outline-light" id="btnLight" title="Mode Terang"><i class="bi bi-sun-fill"></i></button>
                        </div>
                    </li>
                    <li class="nav-item ms-3 d-none d-lg-block">
                        <div id="clockDisplay" class="live-clock">--:--:--</div>
                        <small class="text-muted" style="font-size: 0.7rem;">TERRA STANDARD TIME</small>
                    </li>
                </ul>
            </div>
        </div>
    </nav>