@extends('layouts.premium')
@section('title', 'Bhavna Roadlines — Trusted Logistics & Transportation Partner')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home-premium.css') }}">
@endsection

@section('content')

{{-- ══════════════════════════════════
     NAVIGATION
══════════════════════════════════ --}}
<nav class="nav" id="nav">
    <div class="nav-wrap">
        <a href="{{ route('home') }}" class="nav-brand">
            <img src="{{ asset('images/logo.jpg') }}" alt="Bhavna Roadlines Pvt. Ltd." class="nav-brand-logo">
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#hero"           class="nav-a active">Home</a></li>
            <li><a href="{{ route('about') }}"    class="nav-a">About Us</a></li>
            <li><a href="{{ route('services') }}" class="nav-a">Services</a></li>
            <li><a href="{{ route('gallery') }}"  class="nav-a">Gallery</a></li>
            <li><a href="#awards"         class="nav-a">Awards</a></li>
            <li><a href="{{ route('contact') }}"  class="nav-a">Contact</a></li>
        </ul>
        <a href="{{ route('contact') }}" class="nav-cta">Get a Quote</a>
        <button class="nav-ham" id="navHam" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
</nav>

{{-- ══════════════════════════════════
     HERO
══════════════════════════════════ --}}
<section class="hero" id="hero">
    <div class="hero-media" id="heroMedia">
        <video class="hero-video" autoplay muted loop playsinline preload="auto"
               poster="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1920&q=80">
            <source src="https://videos.pexels.com/video-files/2103099/2103099-uhd_2560_1440_30fps.mp4" type="video/mp4">
            <source src="https://cdn.coverr.co/videos/coverr-a-truck-on-the-road-7671/1080p.mp4" type="video/mp4">
            <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1920&q=80" alt="Bhavna Roadlines logistics fleet">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-grain"></div>
        <div class="hero-vignette"></div>
    </div>

    <div class="container hero-inner" id="heroInner">
        <div class="hero-copy">
            <span class="hero-eyebrow" data-aos="fade-up">— Always On The Move</span>
            <h1 class="hero-title" data-aos="fade-up" data-aos-delay="80">
                Your trusted <span class="ht-italic">logistics</span><br>
                partner since 1999.
            </h1>
            <p class="hero-lede" data-aos="fade-up" data-aos-delay="160">
                We give you complete control of your shipments — with pan-India reach,
                ISO-certified operations, and a 500+ strong fleet engineered for on-time performance.
            </p>
            <div class="hero-cta" data-aos="fade-up" data-aos-delay="220">
                <a href="{{ route('services') }}" class="btn-primary btn-fx">
                    <span class="btn-label">Our Services</span>
                    <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-ghost btn-fx">
                    <span class="btn-label">Get in Touch</span>
                    <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>

        <div class="hero-quote-box" data-aos="fade-left" data-aos-delay="280">
            <i class="fas fa-quote-left"></i>
            <p>Few decisions impact a company's success as much as the performance of its supply chain. Your logistics partner is as integral as your products, services and people.</p>
            <span class="hqb-sign">— Our Philosophy</span>
        </div>
    </div>

    <a href="#info" class="hero-scroll" aria-label="Scroll down">
        <span class="hs-line"></span>
        <span class="hs-label">Scroll</span>
    </a>
</section>

{{-- ══════════════════════════════════
     INFO STRIP (Trust Bar)
══════════════════════════════════ --}}
<section class="info-strip" id="info">
    <div class="container">
        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-medal"></i>
                <div>
                    <strong>ISO 9001:2015</strong>
                    <span>Certified Operations</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-truck-moving"></i>
                <div>
                    <strong>500+ Fleet</strong>
                    <span>Pan-India Network</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>98.7% On-Time</strong>
                    <span>Delivery Performance</span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-headset"></i>
                <div>
                    <strong>24 / 7 Support</strong>
                    <span>Dedicated Assistance</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     SERVICES — TURNKEY PROJECT LOGISTICS
══════════════════════════════════ --}}
<section class="section services" id="services">
    <div class="container">
        <div class="sec-head" data-aos="fade-up">
            <span class="eyebrow">Turnkey Project Logistics</span>
            <h2 class="sec-h2">We give you <em>complete control</em><br>of your shipments.</h2>
            <p class="sec-sub">Four service pillars engineered to move anything, anywhere — with precision, safety and accountability.</p>
        </div>

        <div class="svc-grid">
            @php
                $services = [
                    ['01','Parcel Services','fa-box-open','Fast, reliable parcel delivery with real-time tracking across every major Indian city.','https://images.unsplash.com/photo-1616432043562-3671ea2e5242?auto=format&fit=crop&w=900&q=80'],
                    ['02','Customized Logistics Planning','fa-route','Tailored supply-chain strategies that reduce costs and optimize routes for your business.','https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=900&q=80'],
                    ['03','Over Dimensional Cargo (ODC)','fa-weight-hanging','Expert handling of oversized and heavy cargo — specialized equipment, full permit management.','https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=900&q=80'],
                    ['04','Turnkey Project Logistics','fa-industry','Complete project logistics, from strategic planning to final execution for industrial projects.','https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=900&q=80'],
                ];
            @endphp

            @foreach($services as $i => $s)
            <a href="{{ route('services') }}" class="svc-card" data-aos="fade-up" data-aos-delay="{{ 80 + $i*100 }}">
                <div class="svc-media">
                    <img src="{{ $s[4] }}" alt="{{ $s[1] }}" loading="lazy">
                    <div class="svc-media-overlay"></div>
                    <div class="svc-icon"><i class="fas {{ $s[2] }}"></i></div>
                    <span class="svc-num">{{ $s[0] }}</span>
                </div>
                <div class="svc-body">
                    <h3>{{ $s[1] }}</h3>
                    <p>{{ $s[3] }}</p>
                    <span class="svc-link">
                        <span class="svc-link-text">Know More</span>
                        <span class="svc-link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </span>
                </div>
                <span class="svc-corner"></span>
            </a>
            @endforeach
        </div>

        <div class="sec-cta" data-aos="fade-up">
            <a href="{{ route('services') }}" class="btn-outline btn-fx">
                <span class="btn-label">View All Services</span>
                <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     ABOUT
══════════════════════════════════ --}}
<section class="section section-white about" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-left" data-aos="fade-right">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1506521781263-d8422e82f27a?auto=format&fit=crop&w=1200&q=80" alt="Bhavna Roadlines fleet on highway">
                </div>
                <div class="about-badge">
                    <span class="ab-num">25<sup>+</sup></span>
                    <span class="ab-lbl">Years of<br>Excellence</span>
                </div>
            </div>

            <div class="about-right" data-aos="fade-left" data-aos-delay="100">
                <span class="eyebrow">Who We Are</span>
                <h2 class="sec-h2">India's most trusted<br>road logistics company.</h2>
                <p class="sec-p">Since 1999, Bhavna Roadlines has been moving India forward. From 5 trucks to a 500+ strong fleet, we have grown into one of the nation's most reliable logistics partners — serving over 1,000 businesses across manufacturing, retail, pharma and infrastructure.</p>
                <p class="sec-p">Our relentless focus on on-time delivery, cargo safety and transparent operations continues to earn us the trust of India's industry leaders.</p>
                <ul class="about-list">
                    <li><i class="fas fa-check"></i> ISO 9001:2015 Certified Operations</li>
                    <li><i class="fas fa-check"></i> Government Approved Logistics Contractor</li>
                    <li><i class="fas fa-check"></i> Advanced Real-Time GPS Tracking</li>
                    <li><i class="fas fa-check"></i> Pan-India Network (50+ Cities)</li>
                </ul>
                <a href="{{ route('about') }}" class="btn-primary btn-fx about-cta">
                    <span class="btn-label">Read Our Story</span>
                    <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     SPECIALIZATION (Dark)
══════════════════════════════════ --}}
<section class="section section-dark specialization" id="specialization">
    <div class="container">
        <div class="spec-grid">
            <div class="spec-left" data-aos="fade-right">
                <span class="eyebrow light">Specialization</span>
                <h2 class="sec-h2 light">We are <em>innovative.</em></h2>
                <p class="sec-p muted">Pioneering logistics through data-driven strategy, disciplined execution, and two decades of on-ground expertise. We don't just move cargo — we move industries.</p>
                <a href="{{ route('about') }}" class="btn-outline-white btn-fx">
                    <span class="btn-label">Learn More</span>
                    <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="spec-right">
                <div class="spec-item" data-aos="fade-left" data-aos-delay="80">
                    <span class="sp-num" data-num="01">01</span>
                    <div class="sp-ico"><i class="fas fa-medal"></i></div>
                    <div class="sp-body">
                        <h4>Logistics Legacy &amp; Excellence</h4>
                        <p>25+ years of delivering exceptional logistics services, rooted in quality, safety and performance.</p>
                        <span class="sp-stat"><strong>25+</strong> Years · <strong>1000+</strong> Clients</span>
                    </div>
                    <span class="sp-arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
                <div class="spec-item" data-aos="fade-left" data-aos-delay="180">
                    <span class="sp-num" data-num="02">02</span>
                    <div class="sp-ico"><i class="fas fa-chart-line"></i></div>
                    <div class="sp-body">
                        <h4>Industry Benchmark Practices</h4>
                        <p>From driver training to fleet telematics, our operations set new standards for the sector.</p>
                        <span class="sp-stat"><strong>ISO 9001</strong> Certified · <strong>500+</strong> Fleet</span>
                    </div>
                    <span class="sp-arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
                <div class="spec-item" data-aos="fade-left" data-aos-delay="280">
                    <span class="sp-num" data-num="03">03</span>
                    <div class="sp-ico"><i class="fas fa-globe-asia"></i></div>
                    <div class="sp-body">
                        <h4>Nationwide Product Footprint</h4>
                        <p>A vast network spanning 50+ cities ensures every corner of India is within reach.</p>
                        <span class="sp-stat"><strong>50+</strong> Cities · <strong>28</strong> States</span>
                    </div>
                    <span class="sp-arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     VISION & MISSION
══════════════════════════════════ --}}
<section class="section vm-sect" id="vision">
    <div class="container">
        <div class="sec-head" data-aos="fade-up">
            <span class="eyebrow">Our Purpose</span>
            <h2 class="sec-h2">Vision &amp; <em>Mission</em></h2>
        </div>
        <div class="vm-grid">
            <div class="vm-card vm-vision" data-aos="fade-up" data-aos-delay="80">
                <div class="vm-watermark"><i class="fas fa-eye"></i></div>
                <div class="vm-head">
                    <div class="vm-ico"><i class="fas fa-eye"></i></div>
                    <span class="vm-tag">01 · Vision</span>
                </div>
                <h3>Where we're headed.</h3>
                <p>To be India's leading one-stop logistics solutions provider — leveraging advanced network modeling, inventory simulation, and strategic facility design to achieve optimal business outcomes for every client.</p>
                <ul class="vm-list">
                    <li><i class="fas fa-check"></i> One-stop logistics solutions</li>
                    <li><i class="fas fa-check"></i> Advanced network modeling</li>
                    <li><i class="fas fa-check"></i> Global standards, Indian roots</li>
                </ul>
                <div class="vm-footer">
                    <span class="vm-stat"><strong>#1</strong> Goal</span>
                    <span class="vm-arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="vm-card vm-mission" data-aos="fade-up" data-aos-delay="180">
                <div class="vm-watermark"><i class="fas fa-bullseye"></i></div>
                <div class="vm-head">
                    <div class="vm-ico"><i class="fas fa-bullseye"></i></div>
                    <span class="vm-tag">02 · Mission</span>
                </div>
                <h3>What drives us daily.</h3>
                <p>To be the preferred logistics partner — using innovative simulations and strategic facility design to achieve maximum efficiency, cost-effectiveness and business success for our partners.</p>
                <ul class="vm-list">
                    <li><i class="fas fa-check"></i> Maximum operational efficiency</li>
                    <li><i class="fas fa-check"></i> Cost-effective solutions</li>
                    <li><i class="fas fa-check"></i> Transparent partnerships</li>
                </ul>
                <div class="vm-footer">
                    <span class="vm-stat"><strong>24/7</strong> Commitment</span>
                    <span class="vm-arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     PARALLAX CTA BANNER
══════════════════════════════════ --}}
<section class="pcta" id="pcta">
    <div class="pcta-bg" id="pctaBg">
        <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1920&q=80"
             alt="Bhavna Roadlines highway fleet" loading="lazy">
    </div>
    <div class="pcta-overlay"></div>
    <div class="pcta-grid-lines" aria-hidden="true"></div>

    <div class="container pcta-inner">
        <div class="pcta-head" data-aos="fade-up">
            <span class="eyebrow light">Since 1999</span>
            <h2 class="sec-h2 light">Moving India forward,<br><em>one mile at a time.</em></h2>
            <p class="sec-sub muted">Two and a half decades of relentless service, driven by a single promise —
                every shipment delivered with precision, safety and pride.</p>
        </div>

        <div class="pcta-stats" data-aos="fade-up" data-aos-delay="120">
            <div class="pcta-stat">
                <span class="pcta-n">25<sup>+</sup></span>
                <span class="pcta-l">Years<br>of Excellence</span>
            </div>
            <span class="pcta-sep"></span>
            <div class="pcta-stat">
                <span class="pcta-n">500<sup>+</sup></span>
                <span class="pcta-l">Vehicle<br>Fleet</span>
            </div>
            <span class="pcta-sep"></span>
            <div class="pcta-stat">
                <span class="pcta-n">1000<sup>+</sup></span>
                <span class="pcta-l">Happy<br>Clients</span>
            </div>
            <span class="pcta-sep"></span>
            <div class="pcta-stat">
                <span class="pcta-n">50<sup>+</sup></span>
                <span class="pcta-l">Cities<br>Covered</span>
            </div>
        </div>

        <div class="pcta-actions" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}" class="btn-primary btn-fx">
                <span class="btn-label">Request a Quote</span>
                <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('services') }}" class="btn-outline-white btn-fx">
                <span class="btn-label">Explore Services</span>
                <span class="btn-ico"><i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     AWARDS
═══════════════════════════════════ --}}
<section class="section section-gray awards" id="awards">
    <div class="container">
        <div class="awards-grid">
            <div class="awards-left" data-aos="fade-right">
                <span class="eyebrow">BR Prestige</span>
                <h2 class="sec-h2">Award &amp; <em>Recognition</em></h2>
                <p class="sec-p">The Mahindra Navistar Transport Excellence Awards recognise individuals, groups and organisations who have worked towards the benefit of India's transport sector. We've had the honour of being recognised multiple years in a row.</p>
                <div class="trophy-card">
                    <div class="trophy-ico"><i class="fas fa-trophy"></i></div>
                    <div>
                        <strong>5× Winner &amp; Runner Up</strong>
                        <span>Mahindra Navistar Awards · 2011–2015</span>
                    </div>
                </div>
            </div>

            <div class="awards-right">
                <ol class="awards-list" id="awardsList">
                    <li class="aw-item" style="--i:0">
                        <span class="aw-dot"><i class="fas fa-trophy"></i></span>
                        <span class="aw-year">2011</span>
                        <span class="aw-tag winner">Winner</span>
                        <span class="aw-txt">Best Regional Fleet — Western Zone</span>
                    </li>
                    <li class="aw-item" style="--i:1">
                        <span class="aw-dot"><i class="fas fa-medal"></i></span>
                        <span class="aw-year">2012</span>
                        <span class="aw-tag runner">Runner Up</span>
                        <span class="aw-txt">National Runner Up</span>
                    </li>
                    <li class="aw-item" style="--i:2">
                        <span class="aw-dot"><i class="fas fa-medal"></i></span>
                        <span class="aw-year">2013</span>
                        <span class="aw-tag runner">Runner Up</span>
                        <span class="aw-txt">Best Driver Category</span>
                    </li>
                    <li class="aw-item" style="--i:3">
                        <span class="aw-dot"><i class="fas fa-medal"></i></span>
                        <span class="aw-year">2014</span>
                        <span class="aw-tag runner">Runner Up</span>
                        <span class="aw-txt">Best Driver · Non-Hazards / ODC Safety · Open Category</span>
                    </li>
                    <li class="aw-item" style="--i:4">
                        <span class="aw-dot"><i class="fas fa-trophy"></i></span>
                        <span class="aw-year">2015</span>
                        <span class="aw-tag winner">Winner</span>
                        <span class="aw-txt">Best Fleet Management &amp; Driver Management Practices</span>
                    </li>
                    <span class="aw-progress" id="awProgress"></span>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     CONTACT
══════════════════════════════════ --}}
<section class="section section-dark contact" id="contact">
    <div class="container">
        <div class="sec-head" data-aos="fade-up">
            <span class="eyebrow light">Contact Us</span>
            <h2 class="sec-h2 light">Get in <em>touch.</em></h2>
            <p class="sec-sub muted">Ready to move forward? Share your requirements — our team will design a solution that fits.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-right">
                <div class="ci-item">
                    <div class="ci-ico"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <strong>Corporate Office</strong>
                        <p>Bhavna Roadlines Pvt. Ltd.<br>Industrial Area, Phase 1<br>Chandigarh — 160002</p>
                    </div>
                </div>
                <div class="ci-item">
                    <div class="ci-ico"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <strong>Phone</strong>
                        <p>+91 172 XXX XXXX<br>+91 172 XXX XXXX</p>
                    </div>
                </div>
                <div class="ci-item">
                    <div class="ci-ico"><i class="fas fa-envelope"></i></div>
                    <div>
                        <strong>Email</strong>
                        <p>info@bhavnaroadlines.in</p>
                    </div>
                </div>
                <div class="ci-item">
                    <div class="ci-ico"><i class="fas fa-clock"></i></div>
                    <div>
                        <strong>Hours</strong>
                        <p>Mon – Sat · 9:00 AM – 7:00 PM<br>Customer support: 24 / 7</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap" data-aos="fade-left" data-aos-delay="120">
                <form class="cform" action="{{ route('contact') }}" method="GET">
                    <div class="cf-row">
                        <div class="cf-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="John Doe" required>
                        </div>
                        <div class="cf-field">
                            <label>Email</label>
                            <input type="email" placeholder="john@company.com" required>
                        </div>
                    </div>
                    <div class="cf-row">
                        <div class="cf-field">
                            <label>Phone</label>
                            <input type="tel" placeholder="+91 XXXXX XXXXX">
                        </div>
                        <div class="cf-field">
                            <label>Service Interested In</label>
                            <select>
                                <option value="">Select Service</option>
                                <option>Full Truckload (FTL)</option>
                                <option>Part Truckload (PTL)</option>
                                <option>Express Delivery</option>
                                <option>Warehousing</option>
                                <option>ODC Transport</option>
                                <option>Project Logistics</option>
                            </select>
                        </div>
                    </div>
                    <div class="cf-field">
                        <label>Message</label>
                        <textarea rows="5" placeholder="Tell us about your logistics requirement…"></textarea>
                    </div>
                    <button type="submit" class="btn-primary btn-fx cf-submit">
                        <span class="btn-label">Send Message</span>
                        <span class="btn-ico"><i class="fas fa-paper-plane"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ --}}
<footer class="pfooter">
    <div class="container pfooter-inner">
        <div class="pfooter-grid">
            <div class="pfooter-brand">
                <a href="{{ route('home') }}" class="pfooter-logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Bhavna Roadlines">
                </a>
                <p>Leading logistics &amp; transportation company moving India forward since 1999.</p>
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

@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
/* AOS — subtle fade-in only */
AOS.init({ duration: 800, once: true, offset: 80, easing: 'ease-out-cubic' });

/* Sticky Nav shadow on scroll */
const nav = document.getElementById('nav');
const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

/* Mobile nav */
const ham = document.getElementById('navHam');
const links = document.getElementById('navLinks');
ham.addEventListener('click', () => {
    ham.classList.toggle('open');
    links.classList.toggle('open');
});
document.querySelectorAll('.nav-a').forEach(a => a.addEventListener('click', () => {
    ham.classList.remove('open');
    links.classList.remove('open');
}));

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

/* ── HERO PARALLAX ─────────────────────────────────────
   Video and text move at different speeds for depth. */
const heroMedia = document.getElementById('heroMedia');
const heroInner = document.getElementById('heroInner');
const heroSec   = document.getElementById('hero');
let ticking = false;
function parallax() {
    if (!heroSec) return;
    const y = window.scrollY;
    const h = heroSec.offsetHeight;
    if (y < h) {
        // Video moves slower (deeper layer)
        if (heroMedia) heroMedia.style.transform = `translate3d(0, ${y * 0.35}px, 0) scale(${1 + y * 0.0004})`;
        // Content moves slightly faster than scroll (closer layer)
        if (heroInner) {
            heroInner.style.transform = `translate3d(0, ${y * -0.15}px, 0)`;
            heroInner.style.opacity   = Math.max(0, 1 - y / (h * 0.9));
        }
    }
    ticking = false;
}
window.addEventListener('scroll', () => {
    if (!ticking) { requestAnimationFrame(parallax); ticking = true; }
}, { passive: true });
parallax();

/* ── AWARDS — continuous "running line" tied to scroll ─
   The vertical progress bar fills smoothly as the user
   scrolls through the awards list; each item fades in the
   moment the progress line reaches its dot. */
const awardsList = document.getElementById('awardsList');
const awProgress = document.getElementById('awProgress');
if (awardsList && awProgress) {
    const items = Array.from(awardsList.querySelectorAll('.aw-item'));
    let awTicking = false;

    const runLine = () => {
        awTicking = false;
        const rect = awardsList.getBoundingClientRect();
        const vh   = window.innerHeight || document.documentElement.clientHeight;

        // Trigger line sits at 65% down the viewport. Progress goes
        // 0 → 1 as the list slides from "top at trigger" to
        // "bottom at trigger". Once bottom passes trigger → 100% and
        // the animation is DONE — no lingering growth after scroll.
        const trigger = vh * 0.65;
        let progress  = (trigger - rect.top) / Math.max(rect.height, 1);
        if (progress < 0) progress = 0;
        if (progress > 1) progress = 1;

        // The CSS reserves 20px top + 20px bottom inside the list.
        awProgress.style.height = `calc((100% - 40px) * ${progress})`;

        // Reveal each item the instant the line's tip reaches its dot.
        const tipY = rect.top + 20 + (rect.height - 40) * progress;
        items.forEach((el) => {
            if (el.classList.contains('in')) return;
            const r = el.getBoundingClientRect();
            const dotY = r.top + r.height / 2;
            if (tipY >= dotY) el.classList.add('in');
        });
    };

    const onAwScroll = () => {
        if (awTicking) return;
        awTicking = true;
        requestAnimationFrame(runLine);
    };

    window.addEventListener('scroll', onAwScroll, { passive: true });
    window.addEventListener('resize', onAwScroll);
    runLine();
}

/* ── PARALLAX CTA banner — slow background drift ───── */
const pctaSec = document.getElementById('pcta');
const pctaBg  = document.getElementById('pctaBg');
if (pctaSec && pctaBg) {
    let ptick = false;
    const pmove = () => {
        const rect = pctaSec.getBoundingClientRect();
        const vh = window.innerHeight;
        if (rect.bottom > 0 && rect.top < vh) {
            const progress = (vh - rect.top) / (vh + rect.height);
            const shift = (progress - 0.5) * 120; // -60 .. +60 px
            pctaBg.style.transform = `translate3d(0, ${shift}px, 0) scale(1.12)`;
        }
        ptick = false;
    };
    window.addEventListener('scroll', () => {
        if (!ptick) { requestAnimationFrame(pmove); ptick = true; }
    }, { passive: true });
    pmove();
}

/* ── Pause video when off-screen (perf) ─────────────── */
const heroVid = document.querySelector('.hero-video');
if (heroVid) {
    const vio = new IntersectionObserver(([e]) => {
        if (e.isIntersecting) heroVid.play().catch(()=>{});
        else heroVid.pause();
    }, { threshold: 0.1 });
    vio.observe(heroVid);
}
</script>
@endsection
