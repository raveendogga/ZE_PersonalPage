<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/careers-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Careers at Zunik</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5 pb-4">
            <h6 class="text-primary text-uppercase fw-bold mb-2">Join the Movement</h6>
            <h2 class="display-5 fw-bold mb-3 section-title text-center mx-auto">Build the Future of Energy</h2>
            <p class="fs-5 text-muted col-lg-8 mx-auto">We are always looking for visionary engineers, project managers, and sustainability experts to join our rapidly growing global team.</p>
        </div>
        
        <div class="bg-white p-5 rounded-4 shadow-sm mb-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 border-bottom pb-4">
                <div class="mb-3 mb-md-0">
                    <h4 class="fw-bold mb-1">Senior Renewable Energy Grid Engineer</h4>
                    <span class="text-muted"><i class="bi bi-geo-alt me-1 text-primary"></i> Houston, TX (Hybrid) | Full-Time</span>
                </div>
                <button class="btn btn-outline-primary rounded-pill px-4">Apply Now</button>
            </div>
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 border-bottom pb-4">
                <div class="mb-3 mb-md-0">
                    <h4 class="fw-bold mb-1">HVAC & Thermal Strategy Analyst</h4>
                    <span class="text-muted"><i class="bi bi-geo-alt me-1 text-primary"></i> Berlin, Germany | Full-Time</span>
                </div>
                <button class="btn btn-outline-primary rounded-pill px-4">Apply Now</button>
            </div>
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 border-bottom pb-4">
                <div class="mb-3 mb-md-0">
                    <h4 class="fw-bold mb-1">Corporate Sustainability Manager</h4>
                    <span class="text-muted"><i class="bi bi-geo-alt me-1 text-primary"></i> Remote | Full-Time</span>
                </div>
                <button class="btn btn-outline-primary rounded-pill px-4">Apply Now</button>
            </div>
            
            <div class="text-center mt-5">
                <p class="text-muted mb-3 fs-5">Don't see a position that fits your expertise?</p>
                <a href="mailto:careers@zunikenergies.com" class="fw-bold text-primary text-decoration-none border-bottom border-primary pb-1 fs-5">Email us your resume <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>
<?php require_once '../includes/footer.php'; ?>
