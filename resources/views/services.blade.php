@extends('layouts.app')

@section('title', 'Our Services - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Our Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ol>
        </nav>
    </div>
</section>

<section class="services-page">
    <div class="container">
        <div class="services-list">
            <div class="service-detail">
                <div class="service-icon-large">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="service-info">
                    <h3>Road Transportation</h3>
                    <p>Pan India logistics solutions with a fleet of modern trucks. We provide full truckload (FTL) and part truckload (PTL) services across all major cities in India.</p>
                    <ul>
                        <li>Full Truckload Services</li>
                        <li>Part Truckload Services</li>
                        <li>Pan India Coverage</li>
                        <li>GPS Tracked Vehicles</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-detail">
                <div class="service-icon-large">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="service-info">
                    <h3>Warehousing</h3>
                    <p>Secure storage facilities with inventory management. Our warehouses are equipped with modern security systems and climate control options.</p>
                    <ul>
                        <li>Short & Long-term Storage</li>
                        <li>Inventory Management</li>
                        <li>24/7 Security</li>
                        <li>Climate Controlled Options</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-detail">
                <div class="service-icon-large">
                    <i class="fas fa-box"></i>
                </div>
                <div class="service-info">
                    <h3>Cargo Services</h3>
                    <p>Full truckload and part truckload cargo solutions. We handle all types of cargo including fragile, hazardous, and oversized shipments.</p>
                    <ul>
                        <li>Dangerous Goods Handling</li>
                        <li>Oversized Cargo</li>
                        <li>Fragile Items</li>
                        <li>Temperature Controlled</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-detail">
                <div class="service-icon-large">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div class="service-info">
                    <h3>Express Delivery</h3>
                    <p>Time-critical deliveries with real-time tracking. Our express services ensure your urgent shipments reach on time, every time.</p>
                    <ul>
                        <li>Same Day Delivery</li>
                        <li>Next Day Delivery</li>
                        <li>Real-time Tracking</li>
                        <li>Dedicated Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.services-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.services-list {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.service-detail {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 40px;
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.service-detail:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.service-icon-large {
    width: 100px;
    height: 100px;
    background: rgba(0,102,204,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.service-icon-large i {
    font-size: 2.5rem;
    color: #0066cc;
}

.service-info h3 {
    font-size: 1.5rem;
    color: #1a1a2e;
    margin-bottom: 16px;
}

.service-info p {
    color: #6c757d;
    line-height: 1.8;
    margin-bottom: 20px;
}

.service-info ul {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.service-info ul li {
    padding-left: 24px;
    position: relative;
    color: #6c757d;
}

.service-info ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #0066cc;
    font-weight: bold;
}

@media (max-width: 768px) {
    .service-detail {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .service-icon-large {
        margin: 0 auto;
    }
    
    .service-info ul {
        grid-template-columns: 1fr;
        text-align: left;
    }
}
</style>
@endpush
