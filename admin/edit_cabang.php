<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
include '../config/db.php';

// Tambah Cabang
if (isset($_POST['tambah'])) {
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamat'];
    $conn->query("INSERT INTO cabang (lokasi, alamat) VALUES ('$lokasi', '$alamat')");
}

// Hapus Cabang
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM cabang WHERE id=$id");
}
?>

<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Edit Cabang</h2>

    <form method="POST">
        <input type="text" name="lokasi" placeholder="Nama Lokasi" required><br><br>
        <textarea name="alamat" placeholder="Alamat Lengkap" rows="4" cols="50" required></textarea><br><br>
        <button class="button" name="tambah">Tambah Cabang</button>
    </form>

    <h3>Daftar Cabang</h3>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM cabang");
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . htmlspecialchars($row['lokasi']) . ":</strong> " . htmlspecialchars($row['alamat']) .
            " <a href='?hapus=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a></li>";
        }
        ?>
    </ul>
</div>
<?php include '../includes/footer.php'; ?>
