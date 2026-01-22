<?php
require 'koneksi.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM biodata_pengunjung WHERE id_pengunjung=$id")->fetch_assoc();
?>

<h2>Edit Biodata Pengunjung</h2>

<form method="POST" action="biodata_update.php">
    <input type="text" name="id_pengunjung" value="<?= $data['id_pengunjung']; ?>" readonly>

    <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
    <input type="email" name="email" value="<?= $data['email']; ?>" required>
    <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>">
    <textarea name="alamat"><?= $data['alamat']; ?></textarea>

    <button type="submit">Kirim</button>
    <a href="biodata_read.php">Batal</a>
</form>
