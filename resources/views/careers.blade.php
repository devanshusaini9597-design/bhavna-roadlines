@extends('layouts.app')

@section('title', 'Careers - Bhavna Roadlines')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Careers</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Careers</li>
            </ol>
        </nav>
    </div>
</section>

<section class="careers-page">
    <div class="container">
        <div class="careers-intro">
            <h2>Join Our Growing Team</h2>
            <p>At Bhavna Roadlines, we believe our people are our greatest asset. We're always looking for talented individuals who are passionate about logistics and want to build a rewarding career in the transportation industry.</p>
        </div>
        
        <div class="benefits-section">
            <h3>Why Work With Us?</h3>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-rupee-sign"></i>
                    <h4>Competitive Salary</h4>
                    <p>Industry-leading compensation packages with performance bonuses</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-heart"></i>
                    <h4>Health Benefits</h4>
                    <p>Comprehensive health insurance for you and your family</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Training & Development</h4>
                    <p>Continuous learning opportunities and career growth programs</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-balance-scale"></i>
                    <h4>Work-Life Balance</h4>
                    <p>Flexible working hours and paid time off</p>
                </div>
            </div>
        </div>
        
        <div class="job-openings">
            <h3>Current Openings</h3>
            
            <div class="job-list">
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-info">
                            <h4>Operations Manager</h4>
                            <span class="job-location"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</span>
                            <span class="job-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        </div>
                        <button class="btn btn-outline apply-btn">Apply Now</button>
                    </div>
                    <div class="job-details">
                        <p>We are looking for an experienced Operations Manager to oversee our day-to-day operations and ensure efficient transportation services.</p>
                        <div class="job-requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>5+ years experience in logistics/transportation</li>
                                <li>Strong leadership and management skills</li>
                                <li>Excellent communication abilities</li>
                                <li>Bachelor's degree in relevant field</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-info">
                            <h4>Fleet Supervisor</h4>
                            <span class="job-location"><i class="fas fa-map-marker-alt"></i> Delhi NCR</span>
                            <span class="job-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        </div>
                        <button class="btn btn-outline apply-btn">Apply Now</button>
                    </div>
                    <div class="job-details">
                        <p>Join our team as a Fleet Supervisor to manage and coordinate our vehicle fleet operations across North India.</p>
                        <div class="job-requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>3+ years experience in fleet management</li>
                                <li>Knowledge of vehicle maintenance</li>
                                <li>Good organizational skills</li>
                                <li>Diploma/Degree in relevant field</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-info">
                            <h4>Sales Executive</h4>
                            <span class="job-location"><i class="fas fa-map-marker-alt"></i> Bangalore, Karnataka</span>
                            <span class="job-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        </div>
                        <button class="btn btn-outline apply-btn">Apply Now</button>
                    </div>
                    <div class="job-details">
                        <p>We're seeking a dynamic Sales Executive to expand our client base and drive business growth in South India.</p>
                        <div class="job-requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>2+ years B2B sales experience</li>
                                <li>Strong negotiation skills</li>
                                <li>Knowledge of logistics industry preferred</li>
                                <li>Graduate in any discipline</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-info">
                            <h4>Truck Driver</h4>
                            <span class="job-location"><i class="fas fa-map-marker-alt"></i> Multiple Locations</span>
                            <span class="job-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        </div>
                        <button class="btn btn-outline apply-btn">Apply Now</button>
                    </div>
                    <div class="job-details">
                        <p>Experienced truck drivers wanted for interstate transportation. Good pay and benefits.</p>
                        <div class="job-requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>Valid commercial driving license</li>
                                <li>3+ years heavy vehicle driving experience</li>
                                <li>Clean driving record</li>
                                <li>Willing to travel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Application Form Modal -->
        <div class="application-section">
            <h3>Submit Your Application</h3>
            <div class="application-form-container">
                <form class="application-form" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="applicant_name">Full Name *</label>
                            <input type="text" id="applicant_name" name="applicant_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="applicant_email">Email Address *</label>
                            <input type="email" id="applicant_email" name="applicant_email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="applicant_phone">Phone Number *</label>
                            <input type="tel" id="applicant_phone" name="applicant_phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="position">Position Applied For *</label>
                            <select id="position" name="position" class="form-control" required>
                                <option value="">Select Position</option>
                                <option value="operations-manager">Operations Manager</option>
                                <option value="fleet-supervisor">Fleet Supervisor</option>
                                <option value="sales-executive">Sales Executive</option>
                                <option value="truck-driver">Truck Driver</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="experience">Years of Experience *</label>
                        <input type="text" id="experience" name="experience" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="resume">Upload Resume (PDF/DOC) *</label>
                        <input type="file" id="resume" name="resume" class="form-control-file" accept=".pdf,.doc,.docx" required>
                        <small class="form-text">Maximum file size: 5MB</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="cover_letter">Cover Letter</label>
                        <textarea id="cover_letter" name="cover_letter" class="form-control" rows="4"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.careers-page {
    padding: 80px 0;
    background: #f8f9fa;
}

.careers-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.careers-intro h2 {
    font-size: 2.5rem;
    color: #1a1a2e;
    margin-bottom: 20px;
}

.careers-intro p {
    color: #6c757d;
    font-size: 1.1rem;
    line-height: 1.8;
}

.benefits-section {
    margin-bottom: 80px;
}

.benefits-section h3 {
    text-align: center;
    font-size: 2rem;
    color: #1a1a2e;
    margin-bottom: 40px;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.benefit-card {
    background: white;
    padding: 40px 30px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.benefit-card i {
    font-size: 2.5rem;
    color: #0066cc;
    margin-bottom: 20px;
}

.benefit-card h4 {
    font-size: 1.25rem;
    color: #1a1a2e;
    margin-bottom: 12px;
}

.benefit-card p {
    color: #6c757d;
    font-size: 0.95rem;
    line-height: 1.6;
}

.job-openings {
    margin-bottom: 80px;
}

.job-openings h3 {
    font-size: 2rem;
    color: #1a1a2e;
    margin-bottom: 40px;
    text-align: center;
}

.job-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.job-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    overflow: hidden;
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    border-bottom: 1px solid #e9ecef;
}

.job-info h4 {
    font-size: 1.5rem;
    color: #1a1a2e;
    margin-bottom: 12px;
}

.job-location,
.job-type {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #6c757d;
    font-size: 0.9rem;
    margin-right: 20px;
}

.job-details {
    padding: 30px;
    background: #f8f9fa;
}

.job-details p {
    color: #6c757d;
    margin-bottom: 20px;
    line-height: 1.6;
}

.job-requirements h5 {
    color: #1a1a2e;
    margin-bottom: 12px;
}

.job-requirements ul {
    list-style: disc;
    padding-left: 20px;
}

.job-requirements ul li {
    color: #6c757d;
    margin-bottom: 8px;
}

.application-section h3 {
    font-size: 2rem;
    color: #1a1a2e;
    margin-bottom: 30px;
    text-align: center;
}

.application-form-container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.application-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 24px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #1a1a2e;
}

.form-control {
    width: 100%;
    padding: 14px 16px;
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

.form-control-file {
    padding: 12px 0;
}

.form-text {
    color: #6c757d;
    font-size: 0.85rem;
    margin-top: 6px;
    display: block;
}

textarea.form-control {
    resize: vertical;
}

.btn-block {
    width: 100%;
    padding: 16px;
}

@media (max-width: 768px) {
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .job-header {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .application-form .form-row {
        grid-template-columns: 1fr;
    }
    
    .application-form-container {
        padding: 30px;
    }
}

@media (max-width: 480px) {
    .benefits-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush
