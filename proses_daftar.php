<?php
// Koneksi ke database
require "koneksi.php";

// Proses simpan data hanya jika form dikirim (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Amankan semua input sekaligus
    $d = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);

    // Simpan ke tabel siswa
    $query = "INSERT INTO siswa (nama_lengkap, email, alamat, no_hp, kelas)
              VALUES ('$d[nama_lengkap]', '$d[email]', '$d[alamat]', '$d[no_hp]', '$d[kelas]')";

    // Kembali ke form dengan status berhasil / gagal
    $status = mysqli_query($koneksi, $query) ? "sukses" : "gagal";
    header("Location: index.php?status=$status");
    exit;
}
