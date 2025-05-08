<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

if ($_SESSION["role"] !== 'admin' && $_SESSION["role"] !== 'member') {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman B (Admin & Member)</title>
</head>
<body>
    <h1>Selamat Datang di Halaman B, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>Halaman ini dapat diakses oleh Admin dan Member!</p>
    <?php if ($_SESSION["role"] === 'admin'): ?>
        <p><a href="page_a.php">Go to Page A (Admin Only)</a></p>
    <?php endif; ?>
    <p><a href="page_c.php">Go to Page C</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>