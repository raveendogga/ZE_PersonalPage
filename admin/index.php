<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Ensure the tables exists, graceful fail if not mapped to actual deployed DB
$projects_count = 0;
$news_count = 0;
$messages_count = 0;
$messages = [];

try {
    $projects_count = $pdo->query("SELECT COUNT(*) FROM projects")->fetchColumn();
    $news_count = $pdo->query("SELECT COUNT(*) FROM news")->fetchColumn();
    $messages_count = $pdo->query("SELECT COUNT(*) FROM messages")->fetchColumn();
    $messages = $pdo->query("SELECT * FROM messages ORDER BY id DESC LIMIT 5")->fetchAll();
} catch(PDOException $e) {
    // Tables might not exist yet if DB setup wasn't run
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Zunik Energies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .sidebar { min-height: 100vh; background: #212529; color: #fff;}
        .sidebar a { color: #adb5bd; text-decoration: none; display: block; padding: 12px 20px; margin-bottom: 5px; border-radius: 8px; font-weight: 500;}
        .sidebar a:hover, .sidebar a.active { background: #0056b3; color: #fff; }
        .text-primary { color: #0056b3 !important; }
        .bg-primary { background-color: #0056b3 !important; }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3 shadow" style="width: 260px; position: sticky; top: 0; height: 100vh;">
            <div class="text-center mb-5 mt-3">
                <h4 class="text-white fw-bold mb-0">Zunik<span style="color:#28a745;">Energies</span></h4>
                <small class="text-muted">Control Panel</small>
            </div>
            
            <a href="index.php" class="active"><i class="bi bi-grid-fill me-3"></i> Dashboard</a>
            <a href="#"><i class="bi bi-briefcase-fill me-3"></i> Projects</a>
            <a href="#"><i class="bi bi-newspaper me-3"></i> News & Insights</a>
            <a href="#"><i class="bi bi-envelope-fill me-3"></i> Messages <span class="badge bg-danger ms-auto rounded-pill"><?php echo $messages_count > 0 ? $messages_count : ''; ?></span></a>
            <a href="#"><i class="bi bi-images me-3"></i> Banners</a>
            <a href="#"><i class="bi bi-gear-fill me-3"></i> Settings</a>
            
            <div class="position-absolute bottom-0 w-100 start-0 p-3">
                <a href="logout.php" class="text-danger hover-white border border-danger"><i class="bi bi-box-arrow-right me-3"></i> Secure Logout</a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-grow-1 p-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-1">Welcome back, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h2>
                    <p class="text-muted mb-0">Here is what's happening with your website today.</p>
                </div>
                <div>
                    <a href="../index.php" target="_blank" class="btn btn-outline-dark rounded-pill px-4"><i class="bi bi-box-arrow-up-right me-2"></i> View Live Site</a>
                </div>
            </div>
            
            <!-- Key Metrics -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white d-flex flex-row align-items-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-4 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-briefcase fs-2"></i>
                        </div>
                        <div>
                            <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 0.8rem;">Total Projects</p>
                            <h2 class="fw-bold mb-0"><?php echo $projects_count; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white d-flex flex-row align-items-center">
                        <div class="bg-success bg-opacity-10 text-success rounded-4 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-newspaper fs-2"></i>
                        </div>
                        <div>
                            <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 0.8rem;">News Articles</p>
                            <h2 class="fw-bold mb-0"><?php echo $news_count; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white d-flex flex-row align-items-center">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-4 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                            <i class="bi bi-envelope-open fs-2"></i>
                        </div>
                        <div>
                            <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 0.8rem;">Unread Inquiries</p>
                            <h2 class="fw-bold mb-0"><?php echo $messages_count; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Messages -->
            <div class="card border-0 shadow-sm mt-4 rounded-4 bg-white">
                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center rounded-top-4">
                    <h5 class="fw-bold mb-0">Recent Contact Messages</h5>
                    <a href="#" class="btn btn-sm btn-light rounded-pill px-3">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-muted" style="font-size: 0.85rem;">
                                <tr>
                                    <th class="py-3 ps-4 border-0">Sender Name</th>
                                    <th class="py-3 border-0">Email address</th>
                                    <th class="py-3 border-0">Subject</th>
                                    <th class="py-3 border-0 text-end pe-4">Date received</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <?php if(empty($messages)): ?>
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">No messages found.</td>
                                </tr>
                                <?php else: ?>
                                    <?php foreach($messages as $row): ?>
                                    <tr>
                                        <td class="ps-4 fw-medium"><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" class="text-decoration-none"><?php echo htmlspecialchars($row['email']); ?></a></td>
                                        <td><?php echo htmlspecialchars($row['subject']); ?></td>
                                        <td class="text-end pe-4 text-muted"><?php echo date('M d, Y h:i A', strtotime($row['created_at'])); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
