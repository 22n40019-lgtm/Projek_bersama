<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Kopi Kita</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #6f4e37, #bfa37a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
            width: 320px;
        }

        h2 {
            color: #6f4e37;
            margin-bottom: 25px;
        }

        label {
            display: block;
            text-align: left;
            color: #444;
            margin-bottom: 6px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input:focus {
            border-color: #6f4e37;
            outline: none;
        }

        .btn {
            background-color: #6f4e37;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
            font-size: 15px;
        }

        .btn:hover {
            background-color: #4e3525;
        }

        .back-link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #6f4e37;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
</head>
<body>
    <h2>Login Admin</h2>

    <form action="login_process.php" method="POST" class="login-form">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" class="btn">Login</button>
    </form>

    <br>
    <a href="index.php" class="btn" style="background-color:#8d6e63;">Kembali ke Beranda</a>
</body>
</html>
