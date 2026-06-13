<?php
session_start();
require_once '../config/db.php';

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $error = "Please enter username and password.";
    } else {
        try {
            $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username LIMIT 1");
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_username'] = $user['username'];
                header('Location: index.php');
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        } catch(PDOException $e) {
            $error = "System error during authentication. Check Database setup.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Zunik Energies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .text-primary { color: #0056b3 !important; }
        .btn-primary { background-color: #0056b3; border-color: #0056b3; }
        .btn-primary:hover { background-color: #003d82; border-color: #003d82; }
    </style>
</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary mb-0">Zunik<span class="text-secondary" style="color:#28a745;">Energies</span></h2>
                            <p class="text-muted mt-2">Secure Admin Portal</p>
                        </div>
                        
                        <?php if($error): ?>
                            <div class="alert alert-danger p-3 rounded-3"><i class="bi bi-exclamation-triangle-fill me-2"></i> <?php echo htmlspecialchars($error); ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label class="form-label fw-medium">Username</label>
                                <input type="text" name="username" class="form-control form-control-lg bg-light border-0" required autofocus>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-medium">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg bg-light border-0" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 rounded-pill shadow-sm">Secure Login</button>
                        </form>
                        <div class="text-center mt-5">
                            <a href="../index.php" class="text-muted text-decoration-none hover-primary">&larr; Back to Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
