<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
?>
<?php include '../config/db.php'; ?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="edit_beranda.php">Edit Beranda</a></li>
        <li><a href="edit_menu.php">Edit Menu</a></li>
        <li><a href="edit_cabang.php">Edit Cabang</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
