<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
include '../config/db.php';

// Proses Tambah Menu
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $conn->query("INSERT INTO menu (nama, harga, deskripsi) VALUES ('$nama', '$harga', '$deskripsi')");
}

// Proses Hapus Menu
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM menu WHERE id=$id");
}
?>

<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Edit Menu</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Menu" required><br><br>
        <input type="number" name="harga" placeholder="Harga" required><br><br>
        <textarea name="deskripsi" placeholder="Deskripsi Menu" rows="4" cols="50"></textarea><br><br>
        <button class="button" name="tambah">Tambah Menu</button>
    </form>

    <h3>Daftar Menu</h3>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM menu");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['nama']) . " - Rp " . number_format($row['harga']) . " 
            <a href='?hapus=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a></li>";
        }
        ?>
    </ul>
</div>
<?php include '../includes/footer.php'; ?>
