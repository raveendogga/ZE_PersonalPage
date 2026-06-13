<?php
session_start();
require_once '../config/db.php';
if (!isset($_SESSION['admin_logged_in'])) { header('Location: login.php'); exit; }

$messages = [];
try {
    $messages = $pdo->query("SELECT * FROM messages ORDER BY id DESC")->fetchAll();
} catch(PDOException $e) {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Messages - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .text-primary { color: #0056b3 !important; }
        .bg-primary { background-color: #0056b3 !important; }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark px-4 py-3 shadow-sm">
        <a class="navbar-brand fw-bold" href="index.php">Zunik Admin</a>
        <a href="index.php" class="text-white text-decoration-none bg-secondary bg-opacity-25 px-3 py-1 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Dashboard</a>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold"><i class="bi bi-envelope-open text-warning me-2"></i>Contact Inquiries</h2>
            <button class="btn btn-outline-secondary rounded-pill px-3 shadow-sm"><i class="bi bi-download me-2"></i>Export CSV</button>
        </div>
        
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="ps-4 py-3">Sender Details</th>
                                <th class="py-3">Subject / Message preview</th>
                                <th class="pe-4 py-3 text-end">Date / Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($messages)): ?>
                            <tr><td colspan="3" class="text-center py-5 text-muted"><i class="bi bi-inbox fs-1 d-block mb-3 opacity-50"></i>No form submissions yet.</td></tr>
                            <?php else: ?>
                                <?php foreach($messages as $m): ?>
                                <tr>
                                    <td class="ps-4">
                                        <div class="fw-bold"><?php echo htmlspecialchars($m['name']); ?></div>
                                        <div class="text-muted small"><a href="mailto:<?php echo htmlspecialchars($m['email']); ?>" class="text-decoration-none"><?php echo htmlspecialchars($m['email']); ?></a></div>
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($m['subject']); ?></div>
                                        <div class="text-muted small w-75 text-truncate" style="max-width: 400px;"><?php echo htmlspecialchars($m['message']); ?></div>
                                    </td>
                                    <td class="pe-4 text-end text-muted small">
                                        <div class="fw-medium text-dark"><?php echo date('M d, Y', strtotime($m['created_at'])); ?></div>
                                        <div><?php echo date('h:i A', strtotime($m['created_at'])); ?></div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
