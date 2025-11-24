<?php
session_start();

// Simulasi akun admin tanpa database
$admin_user = "admin";
$admin_pass = "kopikita";

// Ambil input
$username = trim($_POST['username']);
$password = trim($_POST['password']);

if ($username === $admin_user && $password === $admin_pass) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>
        alert('Username atau password salah!');
        window.location.href = 'login.php';
    </script>";
    exit();
}
?>
