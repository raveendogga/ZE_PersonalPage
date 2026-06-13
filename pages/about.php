<?php 
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/about-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Company Overview -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Our Story</h6>
                <h2 class="display-5 fw-bold mb-4">Empowering the World with Clean Energy</h2>
                <p class="fs-5 text-muted mb-4">Founded with a vision to revolutionize the energy infrastructure of large-scale enterprises, Zunik Energies has emerged as a premier global partner for sustainable transition.</p>
                <p class="text-muted mb-4">We specialize in designing, deploying, and managing complex renewable assets that meet the heavy consumption requirements of today's industrial economy. By blending cutting-edge technology with meticulous engineering, we deliver systems that run at optimal efficiency, significantly reducing carbon footprints while maximizing profitability.</p>
                
                <div class="d-flex align-items-center mt-4">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow" style="width: 50px; height: 50px;">
                        <i class="bi bi-file-earmark-pdf fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Company Brochure</h6>
                        <a href="#" class="text-primary fw-medium text-decoration-none">Download PDF (2.5MB)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Two image layout -->
                <div class="row g-3">
                    <div class="col-6">
                        <div class="rounded-4 overflow-hidden mb-3" style="height: 350px;">
                            <img src="../assets/images/solar_power_plant.png" alt="Solar Power Plant" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="rounded-4 overflow-hidden shadow-lg" style="height: 350px;">
                            <img src="../assets/images/wind_turbines.png" alt="Wind Turbines" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="bg-white p-5 rounded-4 h-100 shadow-sm border-top border-primary border-4">
                    <div class="text-primary mb-4">
                        <i class="bi bi-eye fs-1"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Our Vision</h3>
                    <p class="text-muted fs-5 mb-0">To be the global benchmark in institutional renewable energy integration, fundamentally shifting the paradigm of how industries power their future without compromising our planet.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white p-5 rounded-4 h-100 shadow-sm border-top border-secondary border-4">
                    <div class="text-secondary mb-4">
                        <i class="bi bi-bullseye fs-1"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Our Mission</h3>
                    <p class="text-muted fs-5 mb-0">To deliver robust, scalable, and economically viable clean energy ecosystems by leveraging world-class engineering, continuous innovation, and unwavering commitment to client success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase fw-bold mb-2">What Drives Us</h6>
            <h2 class="display-5 fw-bold section-title text-center mx-auto">Core Values</h2>
        </div>
        
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex mx-auto mb-4 overflow-hidden border border-4 border-white shadow-sm" style="width: 100px; height: 100px;">
                        <img src="../assets/images/values_innovation.png" alt="Innovation" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h5 class="fw-bold mb-3">Innovation</h5>
                    <p class="text-muted">Pioneering new ways to capture, store, and utilize energy.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex mx-auto mb-4 overflow-hidden border border-4 border-white shadow-sm" style="width: 100px; height: 100px;">
                        <img src="../assets/images/values_integrity.png" alt="Integrity" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h5 class="fw-bold mb-3">Integrity</h5>
                    <p class="text-muted">Transparent practices and uncompromising ethical standards.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex mx-auto mb-4 overflow-hidden border border-4 border-white shadow-sm" style="width: 100px; height: 100px;">
                        <img src="../assets/images/values_sustainability.png" alt="Sustainability" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h5 class="fw-bold mb-3">Sustainability</h5>
                    <p class="text-muted">Deep commitment to environmental preservation.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex mx-auto mb-4 overflow-hidden border border-4 border-white shadow-sm" style="width: 100px; height: 100px;">
                        <img src="../assets/images/values_collaboration.png" alt="Collaboration" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h5 class="fw-bold mb-3">Collaboration</h5>
                    <p class="text-muted">Partnering closely with stakeholders for mutual success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase fw-bold mb-2">Our People</h6>
            <h2 class="display-5 fw-bold section-title text-center mx-auto">Meet The Team</h2>
        </div>
        
        <h3 class="fw-bold mb-4 text-center mt-5">Board</h3>
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=mk-pathak" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/mk_pathak.jpg" alt="Dr. M K Pathak" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">Dr. M K Pathak</h4>
                        <p class="text-primary fw-medium mb-0">Chief Mentor & Director</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=bln-raju" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/bln_raju.jpg" alt="Dr. BLN RAJU" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">Dr. BLN RAJU</h4>
                        <p class="text-primary fw-medium mb-0">Advisor</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=poojitha-rajana" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/poojitha_rajana.jpg" alt="Poojitha Rajana" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">Poojitha Rajana</h4>
                        <p class="text-primary fw-medium mb-0">CEO & Director</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/raveendhra.php" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/dogga_raveendhra.jpg" alt="Dogga Raveendhra" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">Dogga Raveendhra</h4>
                        <p class="text-primary fw-medium mb-0">Senior Research Engineer</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=ram-reddy" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/ram_reddy.jpg" alt="Dr. U Ramanjaneya Reddy" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">Dr. U Ramanjaneya Reddy</h4>
                        <p class="text-primary fw-medium mb-0">Technical Collaborator</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=lokeswara-rao" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-primary border-4 hover-lift">
                        <img src="../assets/images/team/lokeswara_rao.jpg" alt="K Lokeswara Rao" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold mb-1">K Lokeswara Rao</h4>
                        <p class="text-primary fw-medium mb-0">Director (Sales)</p>
                    </div>
                </a>
            </div>
        </div>

        <h3 class="fw-bold mb-4 text-center mt-5">Management</h3>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=achyuth-kumar" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-secondary border-4 hover-lift">
                        <img src="../assets/images/team/achyuth_kumar.jpg" alt="PL Achyuth Kumar" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">PL Achyuth Kumar</h5>
                        <p class="text-secondary fw-medium mb-0" style="font-size: 0.9rem;">Manager</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=na-raju" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-secondary border-4 hover-lift">
                        <img src="../assets/images/team/na_raju.jpg" alt="NA Raju" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">NA Raju</h5>
                        <p class="text-secondary fw-medium mb-0" style="font-size: 0.9rem;">Executive (Operations)</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=surya-kiran" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-secondary border-4 hover-lift">
                        <img src="../assets/images/team/surya_kiran.jpg" alt="A Surya Kiran" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">A Surya Kiran</h5>
                        <p class="text-secondary fw-medium mb-0" style="font-size: 0.9rem;">Engineer</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?php echo BASE_URL; ?>pages/team-member.php?id=prasad-rao" class="text-decoration-none text-dark">
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-top border-secondary border-4 hover-lift">
                        <img src="../assets/images/team/prasad_rao.jpg" alt="S Prasad Rao" class="rounded-circle mb-3 border border-3 border-light shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        <h5 class="fw-bold mb-1">S Prasad Rao</h5>
                        <p class="text-secondary fw-medium mb-0" style="font-size: 0.9rem;">Engineer</p>
                    </div>
                </a>
            </div>
        </div>
        
        <h3 class="fw-bold mt-5 mb-4 text-center">Crew</h3>
        <div class="text-center text-muted">
            <p>Including our dedicated active interns.</p>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
