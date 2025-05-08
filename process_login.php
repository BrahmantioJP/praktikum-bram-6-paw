<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    
    $valid_users = [
        'admin' => [
            'username' => 'admin',
            'password' => 'admin123',
            'role' => 'admin'
        ],
        'member' => [
            'member' => 'member',
            'password' => 'member123',
            'role' => 'member'
        ]
    ];

    if (array_key_exists($username, $valid_users)) {
        if ($password == $valid_users[$username]['password'] && $role == $valid_users[$username]['role']) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $role;

            setcookie("user_pref", 'light_theme', time() + (86400 * 30), '/');
            header("location: page_b.php");
            exit;
        }
    }

    echo " Error: Username, Password, atau Role yang Anda Masukkan Tidak Valid.";
}
?>