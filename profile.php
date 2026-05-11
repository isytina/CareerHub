<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Job Profiling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f6f9; display: flex; flex-direction: column; min-height: 100vh; }
        .card-custom { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<!-- Panggil Navbar -->
<?php include 'navbar.php'; ?>

<div class="container mt-5 mb-5 flex-grow-1">
    <h2 class="fw-bold text-secondary mb-4">User Profile</h2>
    
    <div class="row g-4">
        <!-- Kad Gambar & Info Ringkas -->
        <div class="col-md-4">
            <div class="card card-custom text-center p-4">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0d6efd&color=fff&size=150" class="rounded-circle mx-auto mb-3" alt="Profile Picture" style="width: 150px; height: 150px;">
                <h4 class="fw-bold">Admin User</h4>
                <p class="text-muted mb-3">Web Developer</p>
                <button class="btn btn-primary w-100 mb-2">Edit Profile</button>
                <button class="btn btn-outline-secondary w-100">Download CV</button>
            </div>
        </div>
        
        <!-- Kad Butiran Peribadi & Pendidikan (Format Jadual/Senarai) -->
        <div class="col-md-8">
            <div class="card card-custom p-4 mb-4">
                <h5 class="fw-bold border-bottom pb-2 mb-3"><i class="bi bi-person-lines-fill text-primary me-2"></i>Personal Details</h5>
                <table class="table table-borderless">
                    <tbody>
                        <tr><th style="width: 150px;">Full Name</th><td>: Admin User</td></tr>
                        <tr><th>Email</th><td>: admin@careerhub.com</td></tr>
                        <tr><th>Phone</th><td>: +60 12-345 6789</td></tr>
                        <tr><th>Location</th><td>: Kuala Lumpur, Malaysia</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="card card-custom p-4">
                <h5 class="fw-bold border-bottom pb-2 mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Education Background</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <h6 class="fw-bold mb-1">Bachelor of Information Science (Hons.)</h6>
                        <p class="text-muted mb-0">Universiti Teknologi MARA (UiTM) | 2023 - Present</p>
                    </li>
                    <li class="list-group-item px-0">
                        <h6 class="fw-bold mb-1">Diploma in Computer Science</h6>
                        <p class="text-muted mb-0">Universiti Teknologi MARA (UiTM) | 2020 - 2023</p>
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