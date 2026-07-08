<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kheuy Sophea — Backend Developer & MIS Student. Portfolio showcasing skills in Laravel, Spring Boot, Java, PHP, and more.">
    <meta name="keywords" content="Kheuy Sophea, Backend Developer, Laravel, PHP, Java, Spring Boot, Portfolio, Cambodia">
    <meta name="author" content="Kheuy Sophea">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kheuy Sophea — Backend Developer Portfolio')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Portfolio CSS --}}
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    @yield('styles')
</head>
<body>
    {{-- Navigation --}}
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#hero" class="nav-logo">
                <span class="logo-bracket">&lt;</span>KS<span class="logo-bracket">/&gt;</span>
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#hero" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#hero" class="footer-logo">
                        <span class="logo-bracket">&lt;</span>KS<span class="logo-bracket">/&gt;</span>
                    </a>
                    <p class="footer-tagline">Building robust backend solutions with passion and precision.</p>
                </div>

                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> sopheakheuy51@gmail.com</li>
                        <li><i class="fas fa-phone"></i> 085 455 439</li>
                        <li><i class="fas fa-map-marker-alt"></i> Phnom Penh, Cambodia</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Kheuy Sophea. All rights reserved.</p>
                <p class="footer-made-with">Made with <i class="fas fa-heart"></i> using Laravel</p>
            </div>
        </div>
    </footer>

    {{-- Portfolio JS --}}
    <script src="{{ asset('js/portfolio.js') }}"></script>
    @yield('scripts')
</body>
</html>
