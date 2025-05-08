<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Jika role bukan admin, tampilkan pesan
if ($_SESSION["role"] !== 'admin') {
    echo "<h2 style='color:red;'>Maaf, Anda tidak punya akses ke halaman ini!</h2>";
    echo "<p><a href='page_b.php'>Kembali ke Halaman Sebelumnya</a></p>";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman A (Admin Only)</title>
</head>
<body>
    <h1>Selamat Datang di Halaman A, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>Halaman ini hanya dapat diakses oleh Admin.</p>
    <p><a href="page_b.php">Go to Page B</a></p>
    <p><a href="page_c.php">Go to Page C</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>