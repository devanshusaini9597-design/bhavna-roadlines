@extends('layouts.app')

@section('title', 'Gallery - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Gallery & Clients</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Gallery</li>
            </ol>
        </nav>
    </div>
</section>

<section class="gallery-page">
    <div class="container">
        <div class="gallery-tabs">
            <button class="tab-btn active" data-tab="photos">Photo Gallery</button>
            <button class="tab-btn" data-tab="clients">Our Clients</button>
        </div>
        
        <div class="tab-content active" id="photos">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #e9ecef 0%, #6c757d 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Fleet Photo 1</div>
                </div>
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #6c757d 0%, #495057 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Fleet Photo 2</div>
                </div>
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #495057 0%, #343a40 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Warehouse</div>
                </div>
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #343a40 0%, #212529 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Office</div>
                </div>
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #0066cc 0%, #004499 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Team</div>
                </div>
                <div class="gallery-item">
                    <div class="placeholder-img" style="height: 250px; background: linear-gradient(135deg, #004499 0%, #003366 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">Operations</div>
                </div>
            </div>
        </div>
        
        <div class="tab-content" id="clients">
            <div class="clients-showcase">
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 1</div>
                    <p>Major Manufacturing Company</p>
                </div>
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 2</div>
                    <p>Leading FMCG Brand</p>
                </div>
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 3</div>
                    <p>Pharmaceutical Giant</p>
                </div>
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 4</div>
                    <p>Automotive Company</p>
                </div>
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 5</div>
                    <p>E-commerce Platform</p>
                </div>
                <div class="client-showcase-item">
                    <div class="placeholder-logo-large">Client 6</div>
                    <p>Retail Chain</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.gallery-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.gallery-tabs {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
}

.tab-btn {
    padding: 12px 30px;
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tab-btn:hover,
.tab-btn.active {
    background: #0066cc;
    border-color: #0066cc;
    color: white;
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.clients-showcase {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.client-showcase-item {
    text-align: center;
    padding: 40px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.placeholder-logo-large {
    height: 100px;
    background: #e9ecef;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    font-weight: 600;
    color: #6c757d;
}

.client-showcase-item p {
    color: #6c757d;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .gallery-grid,
    .clients-showcase {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .gallery-grid,
    .clients-showcase {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.dataset.tab;
            
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });
});
</script>
@endpush
