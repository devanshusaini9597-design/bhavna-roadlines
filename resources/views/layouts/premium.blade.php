<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#0A0E17">
    <meta name="description" content="Bhavna Roadlines — Trusted Logistics & Transportation Partner since 1999.">
    <title>@yield('title', 'Bhavna Roadlines')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    {{-- Premium theme (nav + footer + pages) --}}
    <link rel="stylesheet" href="{{ asset('css/home-premium.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site-chrome.css') }}">

    @yield('styles')
</head>
@php
    $isHome = request()->routeIs('home');
    $bodyClass = $isHome ? 'has-hero' : 'no-hero';
@endphp
<body class="{{ $bodyClass }}">

    {{-- ══════════════════════════════════
         PREMIUM NAV (shared)
    ══════════════════════════════════ --}}
    <nav class="nav" id="nav" aria-label="Primary">
        <div class="nav-wrap">
            <a href="{{ route('home') }}" class="nav-brand" aria-label="Bhavna Roadlines — Home">
                <img src="{{ asset('images/logo.jpg') }}" alt="Bhavna Roadlines Pvt. Ltd." class="nav-brand-logo">
                <span class="nav-brand-text">
                    <span class="nbt-title">Bhavna Roadlines</span>
                    <span class="nbt-sub">Logistics · Since 1999</span>
                </span>
            </a>

            <ul class="nav-links" id="navLinks" role="menu">
                <li class="nav-drawer-head" aria-hidden="true">
                    <a href="{{ route('home') }}" class="nav-drawer-brand">
                        <img src="{{ asset('images/logo.jpg') }}" alt="">
                        <span>Bhavna Roadlines</span>
                    </a>
                    <button class="nav-drawer-close" id="navClose" aria-label="Close menu" type="button">
                        <i class="fas fa-times"></i>
                    </button>
                </li>

                <li><a href="{{ route('home') }}"     class="nav-a {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}"    class="nav-a {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('services') }}" class="nav-a {{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('gallery') }}"  class="nav-a {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('careers') }}"  class="nav-a {{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a></li>
                <li><a href="{{ route('investor') }}" class="nav-a {{ request()->routeIs('investor') ? 'active' : '' }}">Investor</a></li>
                <li><a href="{{ route('contact') }}"  class="nav-a {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

                <li class="nav-drawer-cta" aria-hidden="true">
                    <a href="{{ route('contact') }}" class="nav-cta-mobile">
                        <span>Get a Quote</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
                <li class="nav-drawer-contact" aria-hidden="true">
                    <a href="tel:+911720000000"><i class="fas fa-phone-alt"></i> +91 172 XXX XXXX</a>
                    <a href="mailto:info@bhavnaroadlines.in"><i class="fas fa-envelope"></i> info@bhavnaroadlines.in</a>
                </li>
                <li class="nav-drawer-social" aria-hidden="true">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>

            <a href="{{ route('contact') }}" class="nav-cta">
                <span>Get a Quote</span>
                <i class="fas fa-arrow-right"></i>
            </a>

            <button class="nav-ham" id="navHam" aria-label="Open menu" aria-controls="navLinks" aria-expanded="false" type="button">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>
    <div class="nav-backdrop" id="navBackdrop"></div>

    {{-- ══════════════════════════════════
         PAGE CONTENT
    ══════════════════════════════════ --}}
    <main id="main">
        @yield('content')
    </main>

    {{-- ══════════════════════════════════
         PREMIUM FOOTER (shared)
    ══════════════════════════════════ --}}
    <footer class="pfooter" role="contentinfo">
        <div class="container pfooter-inner">
            <div class="pfooter-grid">
                <div class="pfooter-brand">
                    <a href="{{ route('home') }}" class="pfooter-logo" aria-label="Bhavna Roadlines — Home">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Bhavna Roadlines">
                    </a>
                    <p>Leading logistics &amp; transportation company moving India forward since 1999 — with ISO-certified operations and a 500+ strong fleet.</p>
                    <div class="pfooter-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="pfooter-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('investor') }}">Investor Relations</a></li>
                    </ul>
                </div>
                <div class="pfooter-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="{{ route('services') }}">Full Truckload (FTL)</a></li>
                        <li><a href="{{ route('services') }}">Part Truckload (PTL)</a></li>
                        <li><a href="{{ route('services') }}">Express Delivery</a></li>
                        <li><a href="{{ route('services') }}">Warehousing</a></li>
                        <li><a href="{{ route('services') }}">ODC Transport</a></li>
                    </ul>
                </div>
                <div class="pfooter-col">
                    <h4>Get in Touch</h4>
                    <ul class="pfooter-contact">
                        <li><i class="fas fa-map-marker-alt"></i><span>Industrial Area, Phase 1<br>Chandigarh — 160002</span></li>
                        <li><i class="fas fa-phone-alt"></i><span>+91 172 XXX XXXX</span></li>
                        <li><i class="fas fa-envelope"></i><span>info@bhavnaroadlines.in</span></li>
                    </ul>
                </div>
            </div>
            <div class="pfooter-bottom">
                <p>&copy; {{ date('Y') }} Bhavna Roadlines Pvt. Ltd. — All rights reserved.</p>
                <p class="pfooter-legal"><a href="#">Privacy Policy</a><span>·</span><a href="#">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    {{-- Scroll-to-top --}}
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top" type="button">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- ══════════════════════════════════
         SHARED NAV / CHROME JS
    ══════════════════════════════════ --}}
    <script>
    (function(){
        const nav       = document.getElementById('nav');
        const ham       = document.getElementById('navHam');
        const links     = document.getElementById('navLinks');
        const backdrop  = document.getElementById('navBackdrop');
        const closeBtn  = document.getElementById('navClose');
        const scrollTop = document.getElementById('scrollTop');

        /* Sticky Nav — solid style on scroll */
        const onScroll = () => {
            const scrolled = window.scrollY > 40;
            nav.classList.toggle('scrolled', scrolled);
            if (scrollTop) scrollTop.classList.toggle('show', window.scrollY > 500);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        /* Mobile drawer */
        const setNav = (open) => {
            ham.classList.toggle('open', open);
            links.classList.toggle('open', open);
            backdrop.classList.toggle('open', open);
            document.body.classList.toggle('nav-open', open);
            ham.setAttribute('aria-expanded', open ? 'true' : 'false');
            ham.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        };
        ham.addEventListener('click', () => setNav(!ham.classList.contains('open')));
        backdrop.addEventListener('click', () => setNav(false));
        if (closeBtn) closeBtn.addEventListener('click', () => setNav(false));
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') setNav(false); });
        links.querySelectorAll('a').forEach(a =>
            a.addEventListener('click', () => setNav(false))
        );

        /* Close drawer if resized back to desktop */
        let resizeTO;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTO);
            resizeTO = setTimeout(() => {
                if (window.innerWidth > 1024 && ham.classList.contains('open')) setNav(false);
            }, 120);
        });

        /* Smooth scroll for on-page hash links only */
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const href = a.getAttribute('href');
                if (href.length < 2) return;
                const target = document.querySelector(href);
                if (!target) return;
                e.preventDefault();
                window.scrollTo({ top: target.offsetTop - 70, behavior: 'smooth' });
            });
        });

        /* Scroll-to-top */
        if (scrollTop) {
            scrollTop.addEventListener('click', () =>
                window.scrollTo({ top: 0, behavior: 'smooth' }));
        }
    })();
    </script>

    {{-- AOS (used by pages) --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        if (window.AOS) AOS.init({ duration: 800, once: true, offset: 80, easing: 'ease-out-cubic' });
    </script>

    @yield('scripts')
</body>
</html>
