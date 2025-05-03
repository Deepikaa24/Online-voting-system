<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Election System Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('assets/bg1.png') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.9); /* light + slightly transparent */
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
      width: 100%;
      max-width: 400px;
    }

    .login-title {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
      color: #333;
    }

    .admin-btn {
      position: absolute;
      top: 20px;
      right: 20px;
    }
  </style>
</head>
<body>

  <!-- Admin Login Button -->
  <a href="./voting/admin_login.php" class="btn btn-outline-dark position-absolute top-0 end-0 m-3">Admin Login</a>


  <!-- Floating Login Form -->
  <div class="login-box">
    <h2 class="login-title">Voting System Login</h2>
    <form action="./actions/login.php" method="POST">
      <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="mobile_no_" placeholder="Mobile Number" maxlength="10" minlength="10" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" minlength="4" required>
      </div>
      <div class="mb-3">
        <select name="std" class="form-select" required>
          <option value="Group">Group</option>
          <option value="Voter">Voter</option>
        </select>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      <p class="mt-3 text-center">Don't have an account? <a href="./voting/registration.php">Register here</a></p>
    </form>
  </div>

</body>
</html>
