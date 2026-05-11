<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulasi log masuk tanpa database
    if ($username === 'admin' && $password === '1234') {
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Invalid username or password!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Job Profiling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; display: flex; align-items: center; justify-content: center; height: 100vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
        .login-card { width: 100%; max-width: 400px; padding: 2.5rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background: white; }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">CareerHub</h2>
        <p class="text-muted">Sign in to your account</p>
    </div>
    
    <?php if ($error): ?>
        <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label fw-semibold">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
        </div>
        <div class="mb-4">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Login</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>