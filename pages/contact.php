<?php 
require_once '../config/db.php';
require_once '../includes/header.php'; 

$success_msg = '';
$error_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_msg = 'Please fill out all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = 'Please enter a valid email address.';
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message, created_at) VALUES (:name, :email, :subject, :message, NOW())");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':subject' => $subject,
                ':message' => $message
            ]);
            $success_msg = 'Your message has been sent successfully. Our team will get back to you shortly.';
            // Email notification logic can be placed here (e.g., mail())
        } catch(PDOException $e) {
            // Check if table exists, if not fail gracefully
            $error_msg = 'We are currently setting up our systems. Please email us directly at info@zunikenergies.com.';
        }
    }
}
?>
<!-- Page Header -->
<div class="bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/contact-header.jpg') center/cover; padding-top: 100px !important; padding-bottom: 100px !important;">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-white text-decoration-none opacity-75">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-medium" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                    <h3 class="fw-bold mb-4">Get in Touch</h3>
                    <p class="text-muted mb-5">Have a question about our engineering services or want to discuss a potential partnership? Reach out to our specialized teams directly.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px; min-width: 60px;">
                            <i class="bi bi-geo-alt fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Global Headquarters</h5>
                            <p class="text-muted mb-0">I-2, TIDES Business Incubator,<br>IIT Roorkee, Roorkee-247667</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px; min-width: 60px;">
                            <i class="bi bi-envelope fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Email Support</h5>
                            <p class="text-muted mb-0">info@zunikenergies.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px; min-width: 60px;">
                            <i class="bi bi-telephone fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Phone Inquiry</h5>
                            <p class="text-muted mb-0">+1 (919) 802 1235<br>+91-8074357707</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                    <h3 class="fw-bold mb-4">Send us a Message</h3>
                    
                    <?php if(!empty($success_msg)): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i> <?php echo $success_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(!empty($error_msg)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> <?php echo $error_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-medium">Your Name *</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-medium">Your Email *</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label fw-medium">Subject *</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" id="subject" name="subject" required value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label fw-medium">Message *</label>
                                <textarea class="form-control form-control-lg bg-light border-0" id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 w-100 shadow-sm">Send Message <i class="bi bi-send ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps Integration -->
<div style="height: 400px; width: 100%;">
   <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=TIDES%20Business%20Incubator,%20IIT%20Roorkee&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy" title="Zunik Energies Headquarters Map"></iframe>
</div>

<?php require_once '../includes/footer.php'; ?>
