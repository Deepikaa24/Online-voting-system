<?php
session_start();
if (!isset($_SESSION["id"])) {
    header('location:../');
}
$data = $_SESSION['data'];
$status = $_SESSION['status'] == 1 
    ? '<span class="badge bg-success">Voted</span>' 
    : '<span class="badge bg-warning text-dark">Not Voted</span>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Voting Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
    }

    .dashboard-card {
      background-color: #ffffff;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      padding: 2rem;
    }

    .group-card {
      background-color: #fdfdfd;
      border: 1px solid #e0e0e0;
      border-radius: 1rem;
      padding: 1rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
    }

    .vote-btn {
      width: 100%;
      border-radius: 0.5rem;
    }

    .header-btns a {
      margin-right: 1rem;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-primary">Dashboard</h2>
      <div class="header-btns">
        <a href="../" class="btn btn-outline-primary">Back</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>

    <div class="row">
      <!-- Voting Section -->
      <div class="col-md-7">
        <?php if (isset($_SESSION['groups'])): ?>
            <?php foreach ($_SESSION['groups'] as $group): ?>
  <div class="card mb-4 shadow-sm">
    <div class="row g-0 align-items-center">
      <div class="col-md-4 p-3 text-center">
        <img src="../uploads/<?php echo $group['photo']; ?>" alt="Group Image" class="img-fluid rounded">
      </div>
      <div class="col-md-8 p-3">
        <h5 class="card-title"><?php echo $group['username']; ?></h5>
        

       
          <form action="../actions/voting.php" method="POST">
            <input type="hidden" name="groupvotes" value="<?php echo $group['votes']; ?>">
            <input type="hidden" name="groupid" value="<?php echo $group['id']; ?>">
            <button type="submit" class="btn btn-success vote-btn" 
              <?php echo $_SESSION['status'] == 1 ? 'disabled' : ''; ?>>
              <?php echo $_SESSION['status'] == 1 ? 'Voted' : 'Vote'; ?>
            </button>
          </form>
        
      </div>
    </div>
  </div>
<?php endforeach; ?>

        <?php else: ?>
          <div class="alert alert-info">No groups available for voting.</div>
        <?php endif; ?>
      </div>

      <!-- User Profile Section -->
      <div class="col-md-5">
        <div class="dashboard-card text-center">
          <img src="../uploads/<?php echo $data['photo']; ?>" alt="User Image" class="profile-pic mb-3">
          <h5 class="mb-1"><?php echo $data['username']; ?></h5>
          <p class="text-muted mb-2"><?php echo $data['mobile number']; ?></p>
          
            <p>Status: <?php echo $status; ?></p>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>
