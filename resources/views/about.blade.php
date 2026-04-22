@extends('layouts.app')

@section('title', 'About Us - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ol>
        </nav>
    </div>
</section>

<section class="about-page">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Company Journey</h2>
                <p>Founded in 1999, Bhavna Roadlines has grown from a small local transport operator to one of India's leading logistics companies. Our journey has been marked by continuous innovation, customer satisfaction, and operational excellence.</p>
                
                <h2>Founder's Desk</h2>
                <p>"Our vision was always clear - to build a logistics company that prioritizes reliability and customer satisfaction above everything else. Today, with a fleet of 500+ vehicles and operations across 50+ cities, we continue to live by that vision."</p>
                
                <h2>Mission & Vision</h2>
                <ul>
                    <li><strong>Mission:</strong> To provide safe, reliable, and efficient transportation solutions that drive business growth for our clients.</li>
                    <li><strong>Vision:</strong> To be India's most trusted logistics partner, known for innovation, sustainability, and excellence in service delivery.</li>
                </ul>
            </div>
            <div class="about-image">
                <div class="placeholder-img" style="height: 400px; background: linear-gradient(135deg, #e9ecef 0%, #6c757d 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">
                    Founder Image / Company Office
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.page-header {
    background: linear-gradient(135deg, #1a1a2e 0%, #0f0f1a 100%);
    color: white;
    padding: 120px 0 60px;
    text-align: center;
}

.page-header h1 {
    font-size: 3rem;
    margin-bottom: 16px;
}

.breadcrumb {
    display: flex;
    justify-content: center;
    gap: 12px;
    font-size: 0.9rem;
}

.breadcrumb a {
    color: #0066cc;
}

.breadcrumb li:last-child {
    color: rgba(255,255,255,0.7);
}

.about-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.about-text h2 {
    font-size: 1.75rem;
    color: #1a1a2e;
    margin: 40px 0 20px;
}

.about-text h2:first-child {
    margin-top: 0;
}

.about-text p {
    color: #6c757d;
    line-height: 1.8;
    margin-bottom: 16px;
}

.about-text ul {
    list-style: none;
    padding: 0;
}

.about-text ul li {
    padding: 12px 0;
    border-bottom: 1px solid #e9ecef;
    color: #6c757d;
}

.about-text ul li strong {
    color: #0066cc;
}

@media (max-width: 768px) {
    .about-content {
        grid-template-columns: 1fr;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
}
</style>
@endpush
