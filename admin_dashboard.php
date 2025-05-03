<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}

include('../actions/connect.php');

$groupQuery = mysqli_query($con, "SELECT username, votes FROM `user data` WHERE standard='group'");
$groups = [];
$votes = [];

while ($row = mysqli_fetch_assoc($groupQuery)) {
    $groups[] = $row['username'];
    $votes[] = (int)$row['votes'];
}


// Count total voters
$voterQuery = mysqli_query($con, "SELECT COUNT(*) as total FROM `user data` WHERE standard='Voter'");
$voterCount = mysqli_fetch_assoc($voterQuery)['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      font-family: 'Segoe UI', sans-serif;
    }

    .dashboard-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .chart-container {
      height: 400px;
    }

    .header {
      font-weight: 700;
      font-size: 2rem;
      color: #333;
    }

    .voter-count {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .btn-logout {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    <canvas id="votesChart" width="400" height="300"></canvas>
  </style>
</head>
<body>
  <div class="container mt-5 position-relative">
    <a href="logout.php" class="btn btn-outline-danger btn-logout">
      <i class="bi bi-box-arrow-right me-1"></i> Logout
    </a>

    <div class="dashboard-card">
      <h1 class="header text-center mb-4">
        <i class="bi bi-bar-chart-line"></i> Admin Dashboard
      </h1>

      <div class="row align-items-center">
        <div class="col-md-8 chart-container">
          <canvas id="votesChart"></canvas>
        </div>
        <div class="col-md-4 text-center mt-4 mt-md-0">
          <div class="p-4 rounded shadow bg-white">
            <h5 class="text-muted">Total Voters</h5>
            <div class="voter-count text-primary"><?php echo $voterCount; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  const groupNames = <?php echo json_encode($groups); ?>;
  const groupVotes = <?php echo json_encode($votes); ?>;

  const backgroundColors = groupNames.map(name => {
    const lower = name.toLowerCase();
    if (lower.includes("bjp")) return "#ff6f00"; // Orange
    if (lower.includes("congress")) return "#28a745"; // Green
    if (lower.includes("bahujan") || lower.includes("bsp")) return "#007bff"; // Blue
    return "#6c757d"; // Default gray
  });

  const ctx = document.getElementById('votesChart').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: groupNames,
      datasets: [{
        label: 'Votes Received',
        data: groupVotes,
        backgroundColor: backgroundColors,
        borderRadius: 8,
        barThickness: 45,
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            label: function(context) {
              return `${context.dataset.label}: ${context.parsed.y} vote(s)`;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            precision: 0,
            stepSize: 1,
          }
        }
      }
    }
  });
</script>

</body>
</html>
