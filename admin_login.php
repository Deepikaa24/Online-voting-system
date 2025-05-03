<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow p-4">
          <h3 class="text-center mb-4">Admin Login</h3>
          <form method="POST" action="admin_authenticate.php">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="admin_username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="admin_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <a href="../" class="d-block text-center mt-3">⬅ Back to User Login</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
