<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Job Profiling</title>
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- PANGGILAN CHART.JS DI SINI -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; min-height: 100vh; }
        .card-custom { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<div class="container mt-4 mb-5 flex-grow-1">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-secondary">Analytics Dashboard</h2>
        <button class="btn btn-primary"><i class="bi bi-printer-fill me-2"></i>Print Report</button>
    </div>

    <!-- Statistik Kad -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card card-custom bg-primary text-white h-100 p-3">
                <h6 class="fw-bold">TOTAL PROJECTS</h6>
                <h1 class="display-4 fw-bold">12</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom bg-success text-white h-100 p-3">
                <h6 class="fw-bold">SKILLS MASTERED</h6>
                <h1 class="display-4 fw-bold">8</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom bg-warning text-dark h-100 p-3">
                <h6 class="fw-bold">PROFILE STATUS</h6>
                <h1 class="display-5 fw-bold">Completed</h1>
            </div>
        </div>
    </div>

    <!-- Carta & Aktiviti -->
    <div class="row g-4">
        
        <!-- Bahagian Graf Chart.js -->
        <div class="col-md-8">
            <div class="card card-custom h-100">
                <div class="card-header bg-primary text-white fw-bold">
                    Technical Skills Performance
                </div>
                <div class="card-body" style="height: 350px;">
    <canvas id="skillsChart"></canvas>
</div>
            </div>
        </div>
        
        <!-- Aktiviti Terkini -->
        <div class="col-md-4">
            <div class="card card-custom h-100">
                <div class="card-header bg-white fw-bold text-secondary border-bottom">
                    <i class="bi bi-bell-fill text-primary me-2"></i>Recent Activities
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 border-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Login successful (8:00 AM)</li>
                        <li class="list-group-item px-0 border-0"><i class="bi bi-pencil-square text-warning me-2"></i>Updated 'Bootstrap' skill</li>
                        <li class="list-group-item px-0 border-0"><i class="bi bi-cloud-upload-fill text-primary me-2"></i>Uploaded new resume</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SKRIP UNTUK MENGHASILKAN GRAF -->
<script>
    const ctx = document.getElementById('skillsChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['PHP', 'HTML/CSS', 'JavaScript', 'UI/UX'],
            datasets: [{
                label: 'Skill Level (%)',
                data: [70, 90, 60, 85],
                backgroundColor: ['#0d6efd', '#198754', '#ffc107', '#0dcaf0'],
                borderWidth: 1,
                borderRadius: 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
</script>
</body>
</html>