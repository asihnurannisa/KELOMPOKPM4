<?php
// login.php
session_start();
require 'koneksiDB.php';

// Cek jika form login dikirim
if (['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Contoh login sederhana (silakan sesuaikan)
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = 'admin';
        header('Location: dashboard.php');
        exit;
    } else {
        echo 'Login gagal!';
    }
}
?>

<html>
<body>
    <form method='POST'>
        <input type='text' name='username' placeholder='Username'><br>
        <input type='password' name='password' placeholder='Password'><br>
        <button type='submit'>Login</button>
    </form>
</body>
</html>
