<?php include 'config/db.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="hero">
    Selamat Datang di <br>Bakso Mas Nyok!
</div>

<div class="container">
    <?php
    $res = $conn->query("SELECT * FROM beranda LIMIT 1");
    $row = $res->fetch_assoc();
    echo "<p style='font-size:18px; margin-bottom:20px;'>" . nl2br($row['konten']) . "</p>";
    ?>

    <h2>Menu Unggulan Kami</h2>

    <div class="card">
        <img src="assets/images/menu1.jpg" alt="Bakso Spesial">
        <div class="content">
            <h3>Bakso Jumbo Spesial</h3>
            <p>Bakso besar isi telur puyuh, urat, dan kuah kaldu daging sapi asli!</p>
            <button class="button" onclick="location.href='menu.php'">Lihat Semua Menu</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
