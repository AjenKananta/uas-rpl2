<?php include 'config/db.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <h1 style="margin-bottom: 20px;">Menu Bakso Mas Nyok</h1>
    <?php
    $result = $conn->query("SELECT * FROM menu");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='item-box'>";
            echo "<h3>" . htmlspecialchars($row['nama']) . " - Rp " . number_format($row['harga']) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row['deskripsi'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Belum ada menu tersedia.</p>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
