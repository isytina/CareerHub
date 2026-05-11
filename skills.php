<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Job Profiling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f6f9; display: flex; flex-direction: column; min-height: 100vh; }
        .card-custom { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .progress { height: 20px; border-radius: 10px; }
    </style>
</head>
<body>

<!-- Panggil Navbar -->
<?php include 'navbar.php'; ?>

<div class="container mt-5 mb-5 flex-grow-1">
    <h2 class="fw-bold text-secondary mb-4">Technical & Soft Skills</h2>

    <div class="row g-4">
        <!-- Kad Kemahiran Teknikal -->
        <div class="col-md-6">
            <div class="card card-custom p-4 h-100">
                <h5 class="fw-bold border-bottom pb-2 mb-4"><i class="bi bi-laptop text-primary me-2"></i>Technical Skills</h5>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between"><span>PHP</span><span>85%</span></div>
                    <div class="progress"><div class="progress-bar bg-primary" style="width: 85%;"></div></div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between"><span>HTML/CSS</span><span>90%</span></div>
                    <div class="progress"><div class="progress-bar bg-success" style="width: 90%;"></div></div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between"><span>JavaScript</span><span>75%</span></div>
                    <div class="progress"><div class="progress-bar bg-warning text-dark" style="width: 75%;"></div></div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between"><span>UI/UX Design</span><span>80%</span></div>
                    <div class="progress"><div class="progress-bar bg-info" style="width: 80%;"></div></div>
                </div>
            </div>
        </div>

        <!-- Kad Bahasa & Sijil -->
        <div class="col-md-6">
            <div class="card card-custom p-4 h-100">
                <h5 class="fw-bold border-bottom pb-2 mb-4"><i class="bi bi-award-fill text-primary me-2"></i>Languages & Certifications</h5>
                
                <h6 class="fw-bold mt-2">Languages</h6>
                <ul class="list-unstyled mb-4">
                    <li><i class="bi bi-check2-circle text-success me-2"></i>English (Professional)</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i>Malay (Native)</li>
                </ul>

                <h6 class="fw-bold">Certifications</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <strong>Advanced Web Development</strong><br>
                        <small class="text-muted">Issued by Coursera (2025)</small>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <strong>Responsive Web Design</strong><br>
                        <small class="text-muted">Issued by freeCodeCamp (2024)</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Panggil Footer -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>