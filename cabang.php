<?php include 'config/db.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <h1 style="margin-bottom: 20px;">Cabang Bakso Mas Nyok</h1>
    <?php
    $result = $conn->query("SELECT * FROM cabang");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='item-box'>";
            echo "<h3>" . htmlspecialchars($row['lokasi']) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row['alamat'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Belum ada data cabang.</p>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
