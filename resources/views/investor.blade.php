@extends('layouts.app')

@section('title', 'Investor Relations - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Investor Relations</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Investor</li>
            </ol>
        </nav>
    </div>
</section>

<section class="investor-page">
    <div class="container">
        <div class="investor-grid">
            <div class="investor-card">
                <h3>Financial Reports</h3>
                <ul class="report-list">
                    <li>
                        <i class="fas fa-file-pdf"></i>
                        <span>Annual Report 2023-24</span>
                        <a href="#" class="btn btn-sm">Download</a>
                    </li>
                    <li>
                        <i class="fas fa-file-pdf"></i>
                        <span>Quarterly Report Q3 2024</span>
                        <a href="#" class="btn btn-sm">Download</a>
                    </li>
                    <li>
                        <i class="fas fa-file-pdf"></i>
                        <span>Quarterly Report Q2 2024</span>
                        <a href="#" class="btn btn-sm">Download</a>
                    </li>
                    <li>
                        <i class="fas fa-file-pdf"></i>
                        <span>Annual Report 2022-23</span>
                        <a href="#" class="btn btn-sm">Download</a>
                    </li>
                </ul>
            </div>
            
            <div class="investor-card">
                <h3>Company Highlights</h3>
                <div class="highlights">
                    <div class="highlight-item">
                        <span class="highlight-number">₹500Cr+</span>
                        <span class="highlight-label">Annual Revenue</span>
                    </div>
                    <div class="highlight-item">
                        <span class="highlight-number">25%</span>
                        <span class="highlight-label">YoY Growth</span>
                    </div>
                    <div class="highlight-item">
                        <span class="highlight-number">500+</span>
                        <span class="highlight-label">Fleet Size</span>
                    </div>
                    <div class="highlight-item">
                        <span class="highlight-number">50+</span>
                        <span class="highlight-label">Cities Covered</span>
                    </div>
                </div>
            </div>
            
            <div class="investor-card full-width">
                <h3>Stock Information</h3>
                <div class="stock-info">
                    <div class="stock-item">
                        <span class="label">Stock Exchange</span>
                        <span class="value">NSE / BSE</span>
                    </div>
                    <div class="stock-item">
                        <span class="label">Symbol</span>
                        <span class="value">BHAVNA</span>
                    </div>
                    <div class="stock-item">
                        <span class="label">Sector</span>
                        <span class="value">Logistics & Transportation</span>
                    </div>
                    <div class="stock-item">
                        <span class="label">Market Cap</span>
                        <span class="value">₹1,200 Cr</span>
                    </div>
                </div>
            </div>
            
            <div class="investor-card full-width">
                <h3>Corporate Governance</h3>
                <p>At Bhavna Roadlines, we are committed to maintaining the highest standards of corporate governance. Our board of directors comprises experienced professionals who ensure transparency and accountability in all our operations.</p>
                <div class="governance-links">
                    <a href="#" class="governance-link">
                        <i class="fas fa-file-alt"></i>
                        Board of Directors
                    </a>
                    <a href="#" class="governance-link">
                        <i class="fas fa-file-alt"></i>
                        Committee Composition
                    </a>
                    <a href="#" class="governance-link">
                        <i class="fas fa-file-alt"></i>
                        Policies & Guidelines
                    </a>
                    <a href="#" class="governance-link">
                        <i class="fas fa-file-alt"></i>
                        Code of Conduct
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.investor-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.investor-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.investor-card {
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.investor-card.full-width {
    grid-column: 1 / -1;
}

.investor-card h3 {
    font-size: 1.5rem;
    color: #1a1a2e;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 2px solid #0066cc;
}

.report-list li {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid #e9ecef;
}

.report-list li:last-child {
    border-bottom: none;
}

.report-list i {
    color: #dc3545;
    font-size: 1.5rem;
}

.report-list span {
    flex: 1;
    color: #6c757d;
}

.btn-sm {
    padding: 8px 16px;
    font-size: 0.85rem;
}

.highlights {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.highlight-item {
    text-align: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

.highlight-number {
    display: block;
    font-size: 1.75rem;
    font-weight: 700;
    color: #0066cc;
    margin-bottom: 4px;
}

.highlight-label {
    font-size: 0.9rem;
    color: #6c757d;
}

.stock-info {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.stock-item {
    text-align: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

.stock-item .label {
    display: block;
    font-size: 0.85rem;
    color: #6c757d;
    margin-bottom: 8px;
}

.stock-item .value {
    display: block;
    font-size: 1.1rem;
    font-weight: 600;
    color: #1a1a2e;
}

.governance-links {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 24px;
}

.governance-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    color: #6c757d;
    transition: all 0.3s ease;
}

.governance-link:hover {
    background: #0066cc;
    color: white;
}

.governance-link i {
    font-size: 1.25rem;
}

@media (max-width: 768px) {
    .investor-grid {
        grid-template-columns: 1fr;
    }
    
    .highlights,
    .stock-info,
    .governance-links {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .stock-info,
    .governance-links {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush
