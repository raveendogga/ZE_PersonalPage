<?php 
require_once 'includes/header.php'; 
// In a real scenario, we'd fetch actual banners and projects from the DB
?>

<!-- Hero Section -->
<section class="hero-section position-relative pb-5">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 80vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/solar_power_plant.png') center/cover;">
                <div class="container h-100 d-flex align-items-center" style="min-height: 80vh;">
                    <div class="row w-100">
                        <div class="col-lg-8 col-md-10 text-white">
                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-3 rounded-pill">Zunik is Unique</span>
                            <h1 class="display-3 fw-bold mb-4 text-white">Zunik Energies Welcomes You</h1>
                            <p class="lead mb-4 fw-light text-light">We deliver custom-engineered renewable intelligence to drive industrial excellence and a cleaner tomorrow.</p>
                            <div class="d-flex gap-3 mt-4">
                                <a href="<?php echo BASE_URL; ?>pages/services.php" class="btn btn-primary btn-lg rounded-pill px-4 shadow">Our Services</a>
                                <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="min-height: 80vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/wind_turbines.png') center/cover;">
                <div class="container h-100 d-flex align-items-center" style="min-height: 80vh;">
                    <div class="row w-100">
                        <div class="col-lg-8 col-md-10 text-white">
                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-3 rounded-pill">Innovating Power</span>
                            <h1 class="display-3 fw-bold mb-4 text-white">Advanced Technology Infrastructure</h1>
                            <p class="lead mb-4 fw-light text-light">Building robust matrices tailored for complex industrial energy demands.</p>
                            <div class="d-flex gap-3 mt-4">
                                <a href="<?php echo BASE_URL; ?>pages/projects.php" class="btn btn-primary btn-lg rounded-pill px-4 shadow">Explore Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="min-height: 80vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/hero-3.jpg') center/cover;">
                <div class="container h-100 d-flex align-items-center" style="min-height: 80vh;">
                    <div class="row w-100">
                        <div class="col-lg-8 col-md-10 text-white">
                            <span class="badge bg-primary text-uppercase px-3 py-2 mb-3 rounded-pill">Global Reach</span>
                            <h1 class="display-3 fw-bold mb-4 text-white">Partnering for a Greener World</h1>
                            <p class="lead mb-4 fw-light text-light">We collaborate with international entities to ensure the highest institutional sustainability standards.</p>
                            <div class="d-flex gap-3 mt-4">
                                <a href="<?php echo BASE_URL; ?>pages/about.php" class="btn btn-primary btn-lg rounded-pill px-4 shadow">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Live Site Slides 1-17 -->
            <?php
            for ($i = 1; $i <= 17; $i++) {
                // Skip slides that might be duplicates of the first 3 if we want, but user asked for all of them.
                echo '
                <div class="carousel-item" style="min-height: 80vh; background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(\'assets/images/slides/slide' . $i . '.jpg\') center/cover;">
                    <div class="container h-100 d-flex align-items-center" style="min-height: 80vh;">
                        <div class="row w-100">
                            <!-- No text overlay for these ambient slides -->
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
        
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- About Intro Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="assets/images/solar_power_plant.png" alt="About Zunik Energies" class="img-fluid rounded-4 shadow-lg" style="min-height: 400px; object-fit: cover;">
                    <div class="position-absolute bottom-0 end-0 bg-primary text-white p-4 rounded-4 shadow-lg me-n4 mb-n4 d-none d-md-block" style="transform: translate(-20px, -20px);">
                        <h2 class="display-4 fw-bold mb-0 text-white">10+</h2>
                        <p class="mb-0 fs-5">Years Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Who We Are</h6>
                <h2 class="display-5 fw-bold mb-4">Leading the World Toward a Green Tomorrow</h2>
                <p class="text-muted mb-4 fs-5">Zunik Energies is a premier industrial and corporate energy solution provider. We engineer and develop utility-scale renewable systems that offer high-performance and sustainability tailored for heavy industries.</p>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3 overflow-hidden shadow-sm" style="width: 60px; height: 60px;">
                                <img src="assets/images/icon_advanced_tech.png" alt="Advanced Tech" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                            <h5 class="mb-0 fw-semibold">Advanced Tech</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3 overflow-hidden shadow-sm" style="width: 60px; height: 60px;">
                                <img src="assets/images/icon_reliable_power.png" alt="Reliable Power" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                            <h5 class="mb-0 fw-semibold">Reliable Power</h5>
                        </div>
                    </div>
                </div>
                <a href="<?php echo BASE_URL; ?>pages/about.php" class="btn btn-outline-primary btn-lg rounded-pill px-4">Learn More About Us <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase fw-bold mb-2">Our Capabilities</h6>
            <h2 class="display-5 fw-bold section-title text-center mx-auto">Core Services</h2>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 bg-white border-0 hover-lift shadow-sm">
                    <div class="rounded-3 overflow-hidden shadow-sm mb-4" style="width: 80px; height: 80px;">
                        <img src="assets/images/icon_solar_farm.png" alt="Solar Farm Integration" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-3 fw-bold">Solar Farm Integration</h4>
                    <p class="text-muted mb-4">Utility-scale solar power harvesting, customized to deliver grid-parity energy for massive industrial demands.</p>
                    <a href="<?php echo BASE_URL; ?>pages/services.php" class="mt-auto fw-bold text-decoration-none text-primary">Read More <i class="bi bi-chevron-right fs-6 ms-1"></i></a>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 bg-white border-0 hover-lift shadow-sm">
                    <div class="rounded-3 overflow-hidden shadow-sm mb-4" style="width: 80px; height: 80px;">
                        <img src="assets/images/icon_energy_storage.png" alt="Energy Storage Systems" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-3 fw-bold">Energy Storage Systems</h4>
                    <p class="text-muted mb-4">State-of-the-art battery storage grids that minimize downtime and stabilize load profiles efficiently.</p>
                    <a href="<?php echo BASE_URL; ?>pages/services.php" class="mt-auto fw-bold text-decoration-none text-primary">Read More <i class="bi bi-chevron-right fs-6 ms-1"></i></a>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 bg-white border-0 hover-lift shadow-sm">
                    <div class="rounded-3 overflow-hidden shadow-sm mb-4" style="width: 80px; height: 80px;">
                        <img src="assets/images/icon_wind_power.png" alt="Wind Power Optimization" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <h4 class="mb-3 fw-bold">Wind Power Optimization</h4>
                    <p class="text-muted mb-4">Designing and maintaining high-yield wind power matrices tailored for vast industrial corridors.</p>
                    <a href="<?php echo BASE_URL; ?>pages/services.php" class="mt-auto fw-bold text-decoration-none text-primary">Read More <i class="bi bi-chevron-right fs-6 ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h6 class="text-primary text-uppercase fw-bold mb-2">Our Portfolio</h6>
                <h2 class="display-5 fw-bold section-title mb-0">Featured Projects</h2>
            </div>
            <a href="<?php echo BASE_URL; ?>pages/projects.php" class="btn btn-outline-dark d-none d-md-block rounded-pill px-4">View All Projects</a>
        </div>
        
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-6">
                <div class="card border-0 text-white overflow-hidden rounded-4 shadow-sm group">
                    <!-- Placeholder bg -->
                    <div style="background-color: #555; height: 350px; background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.8)), url('assets/images/proj-1.jpg') center/cover;"></div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                        <span class="badge bg-secondary mb-2 align-self-start py-2 px-3">Industrial Solar</span>
                        <h3 class="card-title fw-bold text-white mb-1">Alpha Manufacturing Grid</h3>
                        <p class="card-text text-light opacity-75">15MW Installation in Texas</p>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-lg-6">
                <div class="card border-0 text-white overflow-hidden rounded-4 shadow-sm group">
                    <div style="background-color: #555; height: 350px; background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.8)), url('assets/images/proj-2.jpg') center/cover;"></div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                        <span class="badge bg-secondary mb-2 align-self-start py-2 px-3">Wind Farm</span>
                        <h3 class="card-title fw-bold text-white mb-1">Zephyr Coastal Array</h3>
                        <p class="card-text text-light opacity-75">32MW Offshore Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Counter -->
<section class="section-padding bg-primary text-white" style="background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <h1 class="display-3 fw-bold text-white mb-2 counter">250+</h1>
                <p class="fs-5 text-white-50 mb-0">Projects Completed</p>
            </div>
            <div class="col-md-3 col-6">
                <h1 class="display-3 fw-bold text-white mb-2 counter">50MW</h1>
                <p class="fs-5 text-white-50 mb-0">Energy Generated</p>
            </div>
            <div class="col-md-3 col-6">
                <h1 class="display-3 fw-bold text-white mb-2 counter">100+</h1>
                <p class="fs-5 text-white-50 mb-0">Corporate Clients</p>
            </div>
            <div class="col-md-3 col-6">
                <h1 class="display-3 fw-bold text-white mb-2 counter">15+</h1>
                <p class="fs-5 text-white-50 mb-0">Awards Won</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Why Zunik Energies</h6>
                <h2 class="display-5 fw-bold mb-4">Engineering a Sustainable Tomorrow</h2>
                <p class="text-muted fs-5 mb-4">Our institutional expertise and relentless focus on innovation empower our clients to achieve their sustainability targets seamlessly.</p>
                
                <ul class="list-unstyled">
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-secondary fs-4 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">End-to-end Solutions</h5>
                            <p class="text-muted">From strategic planning to final construction and maintenance.</p>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-secondary fs-4 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Cost-effective Implementation</h5>
                            <p class="text-muted">Maximized ROI via high-yield technology and strict timeline adherence.</p>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-secondary fs-4 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Global Standards</h5>
                            <p class="text-muted">Compliance with highest international safety and efficiency metrics.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <!-- Video or Image placeholder -->
                <div class="rounded-4 overflow-hidden shadow-lg position-relative" style="background-color: #ddd; height: 450px; background: url('assets/images/hero-3.jpg') center/cover;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="#" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; box-shadow: 0 0 0 15px rgba(0,86,179,0.3);">
                            <i class="bi bi-play-fill fs-1 ms-1 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By Logos -->
<section class="pt-2 pb-5 bg-white border-bottom">
    <div class="container text-center">
        <h3 class="fw-bold text-muted mb-5 text-uppercase d-none">Trusted By</h3>
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/iit_roorkee.jpg" alt="IIT Roorkee" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/apis.png" alt="APIS" class="img-fluid" style="max-height: 90px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/xlr8.png" alt="XLR8" class="img-fluid" style="max-height: 90px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/dipp.jpg" alt="DIPP" class="img-fluid" style="max-height: 120px;">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/ikp.gif" alt="IKP Knowledge Park" class="img-fluid" style="max-height: 90px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/startup_india.png" alt="Startup India" class="img-fluid" style="max-height: 70px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/iitrhf.gif" alt="IIT Roorkee Heritage Foundation" class="img-fluid" style="max-height: 90px;">
            </div>
            <div class="col-md-3 col-6 text-center my-3">
                <img src="assets/images/partners/tides.png" alt="Tides Business Incubator" class="img-fluid" style="max-height: 90px;">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-dark text-white text-center" style="background: linear-gradient(rgba(18,18,18,0.9), rgba(18,18,18,0.9)), url('assets/images/cta-bg.jpg') center/cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4 text-white">Ready to Transform Your Corporate Energy Strategy?</h2>
                <p class="lead mb-5 text-light opacity-75">Connect with our team to explore tailor-made renewable implementations that drive actual grid-level resilience.</p>
                <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow fs-5">Contact Our Experts</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
