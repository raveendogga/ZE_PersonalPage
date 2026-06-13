<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/services-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Innovative Solutions</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-light">
    <div class="container">
        <!-- Intro -->
        <div class="text-center mb-5 pb-4">
            <h6 class="text-primary text-uppercase fw-bold mb-2">Our Products</h6>
            <h2 class="display-5 fw-bold mb-3 section-title text-center mx-auto">Innovative Solutions</h2>
            <p class="fs-5 text-muted col-lg-8 mx-auto">At Zunik Energies, we are constantly pushing the boundaries of technology to provide highly efficient, robust, and economically viable energy solutions.</p>
        </div>
        
        <!-- Products Grid -->
        <div class="row g-5">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_ongrid.png" alt="On-Grid Inverters" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">On-Grid Inverters</h4>
                    <p class="text-muted mb-0">Zunik Energies is currently working to improve the properties of ON-GRID Inverters to maximize efficiency and grid compatibility.</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_offgrid.png" alt="Off-Grid Inverters" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Off-Grid Inverters</h4>
                    <p class="text-muted mb-0">Zunik Energies is providing highly reliable single unit inverters for the range of 1kW to 100kW for isolated environments.</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_ups.png" alt="UPS Systems" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">UPS Systems</h4>
                    <p class="text-muted mb-0">Zunik Energies is constantly working on Uninterruptible Power Supplies to better the technology and guarantee zero downtime.</p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_vfd.png" alt="Variable Frequency Drives" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Variable Frequency Drives</h4>
                    <p class="text-muted mb-0">Consistently projects are being called and executed on advanced "Variable Frequency Drives" for industrial motor control.</p>
                </div>
            </div>
            
            <!-- Product 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_water_pump.png" alt="Water Pumping Systems" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Water Pumping Systems</h4>
                    <p class="text-muted mb-0">Zunik Energies is working to significantly improve the efficiency and automation technology of "Water Pumping Systems".</p>
                </div>
            </div>
            
            <!-- Product 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 hover-lift border-0 text-center">
                    <div class="rounded-circle overflow-hidden shadow-sm mx-auto mb-4 border border-3 border-white" style="width: 80px; height: 80px;">
                        <img src="../assets/images/product_ev.png" alt="Electrical Vehicles" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-3">Electrical Vehicles</h4>
                    <p class="text-muted mb-0">Zunik Energies supports GREEN ENERGY and hence is actively working to provide E-Vehicles components at economic costs.</p>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="mt-5 pt-5 text-center">
            <h3 class="fw-bold mb-4">Interested in our Products?</h3>
            <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm">Request Product Details</a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
