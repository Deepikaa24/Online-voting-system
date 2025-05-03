<?php
session_start();

$adminUsername = $_POST['admin_username'];
$adminPassword = $_POST['admin_password'];

if ($adminUsername === 'ElectionAdm' && $adminPassword === 'admElect_123') {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin_dashboard.php");
    exit();
} else {
    echo '<script>
        alert("Invalid admin credentials");
        window.location = "admin_login.php";
    </script>';
}
