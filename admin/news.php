<?php
session_start();
require_once '../config/db.php';
if (!isset($_SESSION['admin_logged_in'])) { header('Location: login.php'); exit; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage News - Admin</title>
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
            <h2 class="fw-bold"><i class="bi bi-newspaper text-success me-2"></i>Manage News</h2>
            <button class="btn btn-success rounded-pill px-4 shadow-sm" onclick="alert('Article builder module to be plugged in here.')"><i class="bi bi-plus-lg me-2"></i>Add Article</button>
        </div>
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body text-center p-5">
                <i class="bi bi-newspaper text-muted opacity-25 d-block mb-3" style="font-size: 4rem;"></i>
                <h4 class="text-secondary fw-bold">News management interface initialized.</h4>
                <p class="text-muted">Database table ready. Add content capability is wired and waiting for full CMS editor plugin.</p>
            </div>
        </div>
    </div>
</body>
</html>
