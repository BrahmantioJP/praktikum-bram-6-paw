<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman C (Public)</title>
</head>
<body>
    <h1>Selamat Datang di Halaman C</h1>
    <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
        <p>Hello, <?php echo $_SESSION["username"]; ?>! (Role: <?php echo $_SESSION["role"]; ?>)</p>
        <p>Halaman ini bisa diakses oleh semua Role. Enjoy!</p>
        <?php if ($_SESSION["role"] === 'admin'): ?>
            <p><a href="page_a.php">Go to Page A (Admin Only)</a></p>
        <?php endif; ?>
        <p><a href="page_b.php">Go to Page B</a></p>
        <p><a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="index.php">Login</a> untuk mengakses halaman ini.</p>
    <?php endif; ?>
</body>
</html>
