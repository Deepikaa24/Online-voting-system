<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Voting System - Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
  background: url('../assets/bg1.png') center center / cover no-repeat fixed;


      background-size: cover;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .register-card {
      background-color: #ffffff;
      border: none;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      padding: 2rem;
    }

    .form-control,
    .form-select {
      border-radius: 0.5rem;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0069d9;
    }

    .form-label {
      font-weight: 500;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="register-card w-100" style="max-width: 500px;">
      <h3 class="text-center text-primary mb-4">Create an Account</h3>
      <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required placeholder="Enter your username"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Mobile Number</label>
          <input type="text" class="form-control" name="mobile" maxlength="10" required placeholder="Enter mobile number"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" minlength="4" required placeholder="Enter password"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="Cpassword" minlength="4" required placeholder="Confirm password"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Upload Photo</label>
          <input type="file" class="form-control" name="photo"/>
        </div>
        <div class="mb-4">
          <label class="form-label">User Type</label>
          <select name="std" class="form-select" required>
            <option value="" disabled selected>Select user type</option>
            <option value="Group">Group</option>
            <option value="Voter">Voter</option>
          </select>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
        <p class="text-center mt-3 text-muted">
          Already have an account? <a href="../" class="text-decoration-none">Login here</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
