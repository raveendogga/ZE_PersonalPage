<?php
$current_page = 'team-member.php';
require_once '../includes/header.php';
require_once '../data/team_data.php';

// Get the requested team member ID from the URL
$member_id = isset($_GET['id']) ? $_GET['id'] : null;

// Validate that an ID was provided and it exists in our data array
if (!$member_id || !array_key_exists($member_id, $team_members)) {
    // Redirect back to the about us page if invalid
    header("Location: about.php");
    exit();
}

// Extract the specific member's data
$member = $team_members[$member_id];
?>

<div class="bg-light py-5">
    <div class="container py-4">
        
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>pages/about.php" class="text-decoration-none">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($member['name']); ?></li>
            </ol>
        </nav>

        <div class="row bg-white rounded-4 shadow-sm overflow-hidden border border-light">
            <!-- Left Column: Photo & Quick Links -->
            <div class="col-lg-4 text-center p-5 bg-white border-end border-light d-flex flex-column align-items-center justify-content-center">
                <div class="mb-4 position-relative">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>" class="rounded-circle shadow-lg border border-4 border-white" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <h2 class="fw-bold mb-1"><?php echo htmlspecialchars($member['name']); ?></h2>
                <h5 class="text-primary mb-4"><?php echo htmlspecialchars($member['role']); ?></h5>
                
                <a href="<?php echo htmlspecialchars($member['linkedin']); ?>" target="_blank" class="btn btn-outline-primary rounded-pill px-4 py-2 w-100 mb-3 d-flex align-items-center justify-content-center">
                    <i class="bi bi-linkedin me-2 fs-5"></i> LinkedIn Profile
                </a>
                <a href="mailto:info@zunikenergies.com" class="btn btn-primary rounded-pill px-4 py-2 w-100 d-flex align-items-center justify-content-center shadow-sm">
                    <i class="bi bi-envelope-fill me-2 fs-5"></i> Contact Expert
                </a>
            </div>
            
            <!-- Right Column: Biography & Expertise -->
            <div class="col-lg-8 p-5">
                <div class="mb-5">
                    <h3 class="fw-bold mb-4 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill text-primary me-3 fs-3"></i> Professional Biography
                    </h3>
                    <p class="lead text-muted lh-lg" style="font-size: 1.15rem;">
                        <?php echo htmlspecialchars($member['bio']); ?>
                    </p>
                </div>

                <hr class="my-5 border-secondary opacity-25">

                <div>
                    <h3 class="fw-bold mb-4 d-flex align-items-center">
                        <i class="bi bi-star-fill text-primary me-3 fs-4"></i> Areas of Expertise
                    </h3>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <?php foreach($member['expertise'] as $skill): ?>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill fs-6 fw-normal border border-primary border-opacity-25">
                                <?php echo htmlspecialchars($skill); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?php echo BASE_URL; ?>pages/about.php" class="btn btn-outline-secondary rounded-pill px-4">
                <i class="bi bi-arrow-left me-2"></i> Back to Team Directory
            </a>
        </div>

    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
