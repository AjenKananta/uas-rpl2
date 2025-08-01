<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bakso Mas Nyok</title>
    <link rel="stylesheet" href="/baksomasnyok/assets/style.css">
    <link rel="icon" href="/baksomasnyok/assets/images/logo.png" type="image/png">
</head>
<body>
<header>
    <img src="/baksomasnyok/assets/images/logo.png" alt="Logo">
    <h1>Bakso Mas Nyok</h1>
</header>
<nav>
    <a href="/baksomasnyok/index.php">Beranda</a>
    <a href="/baksomasnyok/menu.php">Menu</a>
    <a href="/baksomasnyok/cabang.php">Cabang</a>
    <?php if (isset($_SESSION['admin'])): ?>
        <a href="/baksomasnyok/admin/dashboard.php">Dashboard</a>
        <a href="/baksomasnyok/admin/logout.php">Logout</a>
    <?php else: ?>
        <a href="/baksomasnyok/login.php">Login</a>
    <?php endif; ?>
</nav>
