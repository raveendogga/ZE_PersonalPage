<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$projects = [];
try {
    $projects = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC")->fetchAll();
} catch(PDOException $e) { }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'add') {
    $title = htmlspecialchars($_POST['title']);
    $category = htmlspecialchars($_POST['category']);
    $description = htmlspecialchars($_POST['description']);
    $image_url = 'assets/images/default.jpg'; // Placeholder
    
    try {
        $stmt = $pdo->prepare("INSERT INTO projects (title, category, description, image_url) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $category, $description, $image_url]);
        header("Location: projects.php?success=1");
        exit;
    } catch(PDOException $e) { }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Projects - Admin</title>
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
    <!-- Navbar placeholder for admin -->
    <nav class="navbar navbar-dark bg-dark px-4 py-3 shadow-sm">
        <a class="navbar-brand fw-bold" href="index.php">Zunik Admin</a>
        <a href="index.php" class="text-white text-decoration-none bg-secondary bg-opacity-25 px-3 py-1 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Dashboard</a>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold"><i class="bi bi-briefcase text-primary me-2"></i>Manage Projects</h2>
            <button class="btn btn-primary rounded-pill px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#addProjectModal"><i class="bi bi-plus-lg me-2"></i>Add Project</button>
        </div>
        
        <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-success rounded-3"><i class="bi bi-check-circle-fill me-2"></i>Project added successfully.</div>
        <?php endif; ?>

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-muted">
                        <tr>
                            <th class="ps-4 py-3">Project Title</th>
                            <th class="py-3">Category</th>
                            <th class="py-3">Date Added</th>
                            <th class="pe-4 py-3 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($projects)): ?>
                        <tr><td colspan="4" class="text-center py-5 text-muted"><i class="bi bi-folder-x fs-1 d-block mb-3 opacity-50"></i>No projects found. Use the button to add a new project.</td></tr>
                        <?php else: ?>
                            <?php foreach($projects as $p): ?>
                            <tr>
                                <td class="ps-4 fw-medium"><?php echo htmlspecialchars($p['title']); ?></td>
                                <td><span class="badge bg-light text-dark border px-2 py-1"><?php echo htmlspecialchars($p['category']); ?></span></td>
                                <td class="text-muted"><?php echo date('M d, Y', strtotime($p['created_at'])); ?></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-outline-secondary rounded-circle me-1" style="width:32px; height:32px;"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle" style="width:32px; height:32px;"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Project Modal -->
    <div class="modal fade" id="addProjectModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow">
          <form method="POST" action="">
              <input type="hidden" name="action" value="add">
              <div class="modal-header border-0 bg-light p-4 rounded-top-4">
                <h5 class="modal-title fw-bold">Add New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body p-4">
                <div class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-medium text-muted">Title</label>
                        <input type="text" name="title" class="form-control form-control-lg bg-light border-0" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-medium text-muted">Category</label>
                        <select name="category" class="form-select form-select-lg bg-light border-0" required>
                            <option value="">Select Category</option>
                            <option value="Solar">Solar</option>
                            <option value="Wind">Wind</option>
                            <option value="Storage">Energy Storage</option>
                            <option value="Microgrid">Microgrid</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-medium text-muted">Description</label>
                        <textarea name="description" class="form-control form-control-lg bg-light border-0" rows="4" required></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-medium text-muted">Project Main Image</label>
                        <input type="file" name="image" class="form-control form-control-lg bg-light border-0">
                        <div class="form-text mt-2"><i class="bi bi-info-circle me-1"></i> Image upload functionality is placeholder for the prototype.</div>
                    </div>
                </div>
              </div>
              <div class="modal-footer border-0 p-4 bg-light rounded-bottom-4">
                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary rounded-pill px-5 shadow-sm">Save Project</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
