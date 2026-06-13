<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/industries-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Industries We Serve</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Industries</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5 pb-4">
            <h2 class="display-5 fw-bold mb-3 section-title text-center mx-auto">Powering Key Sectors</h2>
            <p class="fs-5 text-muted col-lg-8 mx-auto">We provide specialized energy solutions tailored to the unique regulatory, consumption, and operational demands of the following heavy industries.</p>
        </div>
        
        <div class="row g-4 text-center">
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/icon_energy_storage.png" alt="Manufacturing" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Manufacturing</h4>
                    <p class="text-muted">High-yield baseline power to keep production lines running without costly interruptions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/icon_advanced_tech.png" alt="Data Centers" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Data Centers</h4>
                    <p class="text-muted">Uninterruptible eco-friendly microgrids for vast computing power needs with zero downtime.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/wind_turbines.png" alt="Logistics Hubs" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Logistics hubs</h4>
                    <p class="text-muted">Extensive EV charging networks and facility powering for modern automated ports.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/values_sustainability.png" alt="Healthcare" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Healthcare</h4>
                    <p class="text-muted">Resilient critical power setups integrating battery storage for emergency backup capabilities.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/icon_solar_farm.png" alt="Retail & Campuses" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Retail & Campuses</h4>
                    <p class="text-muted">Distributed solar deployments customized for sprawling corporate campuses and multi-unit retail properties.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-5 border rounded-4 bg-light hover-lift h-100">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/solar_power_plant.png" alt="Mining" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Mining</h4>
                    <p class="text-muted">Robust remote energy infrastructure suited for extreme and isolating geological conditions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
