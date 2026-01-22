<?php
require_once 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("ID tidak valid!");
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM tbl_tamu WHERE cid = $id";
$q   = mysqli_query($conn, $sql);

if (mysqli_num_rows($q) == 0) {
  die("Data tidak ditemukan");
}

$data = mysqli_fetch_assoc($q);
?>
