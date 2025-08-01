<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $konten = $_POST['konten'];
    $conn->query("DELETE FROM beranda");
    $conn->query("INSERT INTO beranda (konten) VALUES ('$konten')");
    echo "Beranda diperbarui!";
}
$res = $conn->query("SELECT * FROM beranda LIMIT 1");
$row = $res->fetch_assoc();
?>
<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Edit Beranda</h2>
    <form method="POST">
        <textarea name="konten" rows="10" cols="50"><?= $row['konten'] ?? '' ?></textarea><br><br>
        <button class="button">Simpan</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
