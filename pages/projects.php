<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/projects-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Our Projects</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-light">
    <div class="container">
        <!-- Projects Grid -->
        <div class="row g-4">
            <!-- Dynamic content would be fetched here in a real scenario -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift">
                    <img src="../assets/images/solar_power_plant.png" class="card-img-top" alt="Project 1" style="height: 250px; object-fit: cover; background-color:#ddd;">
                    <div class="card-body p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Solar</span>
                        <h4 class="card-title fw-bold">Alpha Manufacturing Grid</h4>
                        <p class="card-text text-muted">A 15MW solar installation powering a multi-acre industrial facility in Texas.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill mt-3">View Details</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift">
                    <img src="../assets/images/wind_turbines.png" class="card-img-top" alt="Project 2" style="height: 250px; object-fit: cover; background-color:#ddd;">
                    <div class="card-body p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Wind</span>
                        <h4 class="card-title fw-bold">Zephyr Coastal Array</h4>
                        <p class="card-text text-muted">A 32MW offshore wind array contributing to the regional electrical grid stability.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill mt-3">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift">
                    <img src="../assets/images/icon_energy_storage.png" class="card-img-top" alt="Project 3" style="height: 250px; object-fit: cover; background-color:#ddd;">
                    <div class="card-body p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Storage</span>
                        <h4 class="card-title fw-bold">Omega Thermal Bank</h4>
                        <p class="card-text text-muted">Industrial thermal energy storage designed to capture and repurpose waste heat.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill mt-3">View Details</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift">
                    <img src="../assets/images/icon_advanced_tech.png" class="card-img-top" alt="Project 4" style="height: 250px; object-fit: cover; background-color:#ddd;">
                    <div class="card-body p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Microgrid</span>
                        <h4 class="card-title fw-bold">Tech Park Microgrid</h4>
                        <p class="card-text text-muted">Independent smart microgrid powering a tech incubator with 99.99% uptime.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill mt-3">View Details</a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Pagination Placeholder -->
        <nav aria-label="Project pagination" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
