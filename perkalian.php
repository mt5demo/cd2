<?php
// Ambil input dan hitung hasil jika keduanya angka
$angka1 = $_POST['angka1'] ?? "";
$angka2 = $_POST['angka2'] ?? "";
$hasil = is_numeric($angka1) && is_numeric($angka2) ? $angka1 * $angka2 : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Operasi Perkalian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Program Operasi Perkalian</h2>

    <!-- Form input dua bilangan -->
    <form action="perkalian.php" method="POST">
        <label for="angka1">Bilangan Pertama</label>
        <input type="number" id="angka1" name="angka1" value="<?= htmlspecialchars($angka1) ?>" placeholder="Contoh: 8" required>

        <label for="angka2">Bilangan Kedua</label>
        <input type="number" id="angka2" name="angka2" value="<?= htmlspecialchars($angka2) ?>" placeholder="Contoh: 9" required>

        <button type="submit">Hitung</button>
    </form>

    <!-- Tampilkan hasil perkalian -->
    <?php if ($hasil !== null): ?>
        <div class="result-box">Hasil Perkalian: <?= $angka1 ?> &times; <?= $angka2 ?> = <?= $hasil ?></div>
    <?php endif; ?>

    <a class="nav-link" href="index.php">&laquo; Kembali ke Form Pendaftaran</a>
</div>
</body>
</html>
