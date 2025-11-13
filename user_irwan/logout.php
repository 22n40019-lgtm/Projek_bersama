<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Logout...</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8f5f0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .fade-box {
            text-align: center;
            animation: fadeIn 1.2s ease-in-out forwards;
        }

        .fade-box h2 {
            margin-bottom: 10px;
            color: #5a3d2b;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 6px solid #d5c7b8;
            border-top-color: #8b4513;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

    <script>
        // Redirect setelah animasi 2.2 detik
        setTimeout(function() {
            window.location.href = "index.php";
        }, 2200);
    </script>
</head>
<body>

<div class="fade-box">
    <h2>Anda sedang logout...</h2>
    <div class="loader"></div>
</div>

</body>
</html>
