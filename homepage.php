<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting System - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .group-card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease-in-out;
    }
    .group-card:hover {
      transform: translateY(-5px);
    }
    .group-img {
      max-height: 150px;
      object-fit: contain;
    }
    .nav-link-btn {
      margin: 0 0.5rem;
    }
    .classic-heading {
      font-family: 'Georgia', serif;
      font-weight: 700;
      font-size: 5rem;
      margin-bottom: 1.5rem;
      color: #0d3b66;
      opacity: 0.9;
    }
    .evote-banner {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto 1rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
    <img src="assets/eci-logo.svg" alignment="left" alt="E-Voting Banner" class="evote-banner">
      <span class="navbar-brand mb-0 h1">Voting System</span>
      <div>
        <a href="index.php" class="btn btn-outline-primary nav-link-btn">Login</a>
        <a href="./voting/registration.php" class="btn btn-outline-success nav-link-btn">Sign Up</a>
        <a href="./voting/admin_login.php" class="btn btn-outline-danger nav-link-btn">Admin Login</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <img src="assets/banner.jpg" alt="E-Voting Banner" class="evote-banner">
    <h2 class="text-center classic-heading" style="color: #003366;">E-VOTING</h2>
    <h4 class="text-center mb-4">Participating Groups</h4>
    <div class="row">
      <!-- Group 1 -->
      <div class="col-md-4 mb-4">
        <div class="card group-card p-3 text-center">
          <img src="assets/bjp.jpg" class="group-img mb-3" alt="BJP Logo">
          <h5 class="card-title">Bharatiya Janata Party (BJP)</h5>
          <p class="card-text">A major political party in India promoting nationalism, economic reforms, and strong leadership.</p>
        </div>
      </div>

      <!-- Group 2 -->
      <div class="col-md-4 mb-4">
        <div class="card group-card p-3 text-center">
          <img src="assets/congress.png" class="group-img mb-3" alt="Congress Logo">
          <h5 class="card-title">Indian National Congress</h5>
          <p class="card-text">India's oldest political party known for its role in independence and focus on social justice and welfare.</p>
        </div>
      </div>

      <!-- Group 3 -->
      <div class="col-md-4 mb-4">
        <div class="card group-card p-3 text-center">
          <img src="assets/bsp.png" class="group-img mb-3" alt="BSP Logo">
          <h5 class="card-title">Bahujan Samaj Party (BSP)</h5>
          <p class="card-text">Focused on representing the Dalits, OBCs and marginalized groups to ensure social equality.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
