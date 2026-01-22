<?php
require_once 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("ID tidak valid!");
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM tbl_tamu WHERE cid = $id";
$q   = mysqli_query($conn, $sql);

if (mysqli_num_rows($q) === 0) {
  die("Data tidak ditemukan");
}

$data = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Biodata</title>
</head>
<body>

<h2>Edit Data Pengunjung</h2>

<form action="biodata_update.php" method="POST">
  <input type="hidden" name="id" value="<?= $data['cid']; ?>">

  <label>Nama</label><br>
  <input type="text" name="nama" value="<?= htmlspecialchars($data['cnama']); ?>"><br><br>

  <label>Email</label><br>
  <input type="email" name="email" value="<?= htmlspecialchars($data['cemail']); ?>"><br><br>

  <label>Pesan</label><br>
  <textarea name="pesan"><?= htmlspecialchars($data['cpesan']); ?></textarea><br><br>

  <button type="submit">Update</button>
  <a href="index.php">Batal</a>
</form>

</body>
</html>
