<?php 
require_once '../includes/header.php'; 
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/sustainability-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Commitment to Sustainability</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Sustainability</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h6 class="text-secondary text-uppercase fw-bold mb-2">Our Responsibility</h6>
                <h2 class="display-5 fw-bold mb-4">Engineering for a Net-Zero Future</h2>
                <p class="fs-5 text-muted mb-4">At Zunik Energies, sustainability isn’t just a department—it is the foundational core of our engineering philosophy and business model. Every megawatt we generate is carefully assessed for its environmental footprint.</p>
                <p class="text-muted">We have committed to aligning our operational guidelines with the UN Sustainable Development Goals (SDGs), focusing specifically on Affordable and Clean Energy, Industry Innovation and Infrastructure, and Climate Action.</p>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg" style="height: 400px; background-color: #eee;">
                    <img src="../assets/images/values_sustainability.png" alt="Sustainability Engineering" class="w-100 h-100" style="object-fit: cover;">
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="p-4 border border-secondary border-opacity-25 rounded-4 h-100 bg-light border-top border-secondary border-4">
                    <h3 class="fw-bold mb-3 text-secondary">Zero-Emission Focus</h3>
                    <p class="text-muted mb-0">Our deployments actively reduce millions of metric tons of CO2 annually, helping corporations meet stringent ESG criteria.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border border-secondary border-opacity-25 rounded-4 h-100 bg-light border-top border-secondary border-4">
                    <h3 class="fw-bold mb-3 text-secondary">Circular Economy</h3>
                    <p class="text-muted mb-0">We ensure the end-of-life recycling of solar PV cells and wind turbine blades, operating with a 95% circularity target by 2030.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border border-secondary border-opacity-25 rounded-4 h-100 bg-light border-top border-secondary border-4">
                    <h3 class="fw-bold mb-3 text-secondary">Biodiversity Protection</h3>
                    <p class="text-muted mb-0">Rigorous environmental impact assessments prevent local ecosystem disruption during multi-acre facility constructions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
