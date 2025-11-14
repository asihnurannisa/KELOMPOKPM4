php
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard SKA Polinela</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef3f7;
        }

        .header {
            background: #003f80;
            padding: 18px;
            color: white;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        }

        .main {
            display: flex;
        }

        .content {
            padding: 25px;
            flex: 1;
        }
    </style>
</head>
<body>
<div class="header">
    Sistem Survei Kepuasan Pelayanan SKA Politeknik Negeri Lampung
</div>

<div class="main">

