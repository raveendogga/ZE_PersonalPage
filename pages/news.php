<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/news-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">News & Insights</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- News Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift bg-light">
                    <img src="../assets/images/wind_turbines.png" class="card-img-top" alt="Offshore Operations" style="height: 200px; object-fit: cover; border-bottom: 4px solid white;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-white text-primary border me-2 py-2">Corporate Alert</span>
                            <small class="text-muted fw-medium"><i class="bi bi-calendar3 me-1"></i> Oct 15, 2025</small>
                        </div>
                        <h4 class="card-title fw-bold mb-3">Zunik Energies expanding Offshore European Operations</h4>
                        <p class="card-text text-muted mb-4">A strategic multi-million euro deployment across the North Sea will boost our wind energy capability by 25%.</p>
                        <a href="#" class="fw-bold text-decoration-none text-primary mt-auto">Read Article <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- News Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift bg-light">
                    <img src="../assets/images/values_collaboration.png" class="card-img-top" alt="Award Recognition" style="height: 200px; object-fit: cover; border-bottom: 4px solid white;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-white text-primary border me-2 py-2">Award & Recognition</span>
                            <small class="text-muted fw-medium"><i class="bi bi-calendar3 me-1"></i> Sep 28, 2025</small>
                        </div>
                        <h4 class="card-title fw-bold mb-3">Named 'Top 10 Green Engineers' by Global Tech Review</h4>
                        <p class="card-text text-muted mb-4">Commemorating our breakthroughs in efficient thermal storage routing and implementation.</p>
                        <a href="#" class="fw-bold text-decoration-none text-primary mt-auto">Read Article <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 hover-lift bg-light">
                    <img src="../assets/images/icon_solar_farm.png" class="card-img-top" alt="AI in Solar Tech" style="height: 200px; object-fit: cover; border-bottom: 4px solid white;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-white text-primary border me-2 py-2">Tech Insights</span>
                            <small class="text-muted fw-medium"><i class="bi bi-calendar3 me-1"></i> Sep 10, 2025</small>
                        </div>
                        <h4 class="card-title fw-bold mb-3">The Future of AI in Solar Field Maximization</h4>
                        <p class="card-text text-muted mb-4">How our proprietary heuristic models are extending PV lifecycle performance by redirecting pivot arrays continuously.</p>
                        <a href="#" class="fw-bold text-decoration-none text-primary mt-auto">Read Article <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary rounded-pill px-4 btn-lg shadow-sm">Load More News</a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
