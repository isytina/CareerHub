<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Job Profiling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya tambahan supaya nampak lebih menarik */
        body { display: flex; flex-direction: column; min-height: 100vh; }
        .hero-section {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 100px 20px;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-box {
            transition: transform 0.3s;
            height: 100%;
        }
        .feature-box:hover {
            transform: translateY(-10px);
        }
        .main-content { flex-grow: 1; }
    </style>
</head>
<body class="bg-light">

    <!-- Memanggil Navbar -->
    <?php include 'navbar.php'; ?>

    <div class="main-content">
        <!-- Bahagian "Hero" (Header Besar) -->
        <div class="hero-section mb-5">
            <div class="container">
                <h1 class="display-4 fw-bold">Welcome to CareerHub</h1>
                <p class="lead mt-3">A modern and organised system for managing your profile, skills, and career records.</p>
                <a href="login.php" class="btn btn-light btn-lg mt-4 fw-bold text-primary shadow">LOGIN</a>
            </div>
        </div>

        <!-- Bahagian Info Tambahan -->
        <div class="container text-center mb-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 bg-white border rounded shadow-sm feature-box">
                        <h1 class="mb-3">📊</h1>
                        <h4>Interactive Analytics</h4>
                        <p class="text-muted">Monitor your skill levels using clear and meaningful charts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white border rounded shadow-sm feature-box">
                        <h1 class="mb-3">👨‍💻</h1>
                        <h4>Organised Profile</h4>
                        <p class="text-muted">Showcase your educational background and professional work experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white border rounded shadow-sm feature-box">
                        <h1 class="mb-3">🚀</h1>
                        <h4>Technical Skills</h4>
                        <p class="text-muted">Record and track your system mastery and technical levels over time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Panggil Footer (WAJIB UNTUK MARKAH PENUH) -->
    <?php include 'footer.php'; ?>

    <!-- Panggil JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>