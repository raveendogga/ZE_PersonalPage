<?php
// Dynamically detect base URL relative to document root
if (!defined('BASE_URL')) {
    $doc_root = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) : '';
    $dir_path = str_replace('\\', '/', dirname(__DIR__));
    if ($doc_root && strpos($dir_path, $doc_root) === 0) {
        $base = substr($dir_path, strlen($doc_root));
    } else {
        $base = '/ZE_PersonalPage/';
    }
    $base = '/' . trim($base, '/') . '/';
    if ($base === '//') {
        $base = '/';
    }
    define('BASE_URL', $base);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zunik Energies - Corporate structured renewable energy solutions.">
    <title>Zunik Energies</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>

<!-- Topbar -->
<div class="topbar bg-dark text-light py-2 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <small><i class="bi bi-envelope me-2 text-primary"></i> info@zunikenergies.com</small>
                <small class="ms-4"><i class="bi bi-telephone me-2 text-primary"></i> +1 (919) 802 1235</small>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="text-light text-decoration-none me-3 hover-primary"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-light text-decoration-none me-3 hover-primary"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="text-light text-decoration-none hover-primary"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>index.php">
            <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="Zunik Energies" style="max-height: 50px;">
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-medium">
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'industries.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/industries.php">Industries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'sustainability.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/sustainability.php">Sustainability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'news.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 <?php echo ($current_page == 'careers.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>pages/careers.php">Careers</a>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a class="btn btn-primary px-4 rounded-pill shadow-sm" href="<?php echo BASE_URL; ?>pages/contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
