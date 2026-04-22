@extends('layouts.app')

@section('title', 'Contact Us - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

<section class="contact-page">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info-section">
                <h2>Get in Touch</h2>
                <p>Have a question or need a quote? Our team is ready to help you with all your logistics needs.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Head Office</h4>
                            <p>123 Logistics Hub, Industrial Area<br>City Name, State - PIN Code<br>India</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>+91 XXXXX XXXXX<br>+91 XXXXX XXXXX</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>info@bhavnaroadlines.in<br>sales@bhavnaroadlines.in</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Working Hours</h4>
                            <p>Monday - Saturday: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-section">
                <h2>Send us a Message</h2>
                <form class="contact-form" action="#" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Select a subject</option>
                            <option value="quote">Request for Quote</option>
                            <option value="services">Service Inquiry</option>
                            <option value="career">Career Opportunity</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
        </div>
        
        <!-- Google Maps Section -->
        <div class="map-section">
            <h2>Find Us on Map</h2>
            <div class="map-container">
                <div class="placeholder-map" style="height: 400px; background: linear-gradient(135deg, #e9ecef 0%, #6c757d 100%); display: flex; align-items: center; justify-content: center; color: white; border-radius: 8px;">
                    <div style="text-align: center;">
                        <i class="fas fa-map-marked-alt" style="font-size: 3rem; margin-bottom: 16px;"></i>
                        <p>Google Maps will be integrated here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.contact-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    margin-bottom: 80px;
}

.contact-info-section h2,
.contact-form-section h2 {
    font-size: 2rem;
    color: #1a1a2e;
    margin-bottom: 16px;
}

.contact-info-section > p {
    color: #6c757d;
    margin-bottom: 40px;
}

.contact-details {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.contact-item {
    display: flex;
    gap: 20px;
}

.contact-icon {
    width: 60px;
    height: 60px;
    background: rgba(0,102,204,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.contact-icon i {
    font-size: 1.5rem;
    color: #0066cc;
}

.contact-text h4 {
    font-size: 1.1rem;
    color: #1a1a2e;
    margin-bottom: 8px;
}

.contact-text p {
    color: #6c757d;
    line-height: 1.6;
}

.contact-form-section {
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.contact-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #1a1a2e;
}

.form-control {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #e9ecef;
    border-radius: 4px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #0066cc;
    box-shadow: 0 0 0 3px rgba(0,102,204,0.1);
}

textarea.form-control {
    resize: vertical;
}

.btn-block {
    width: 100%;
    padding: 16px;
}

.map-section {
    text-align: center;
}

.map-section h2 {
    font-size: 2rem;
    color: #1a1a2e;
    margin-bottom: 30px;
}

.map-container {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-form .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush
