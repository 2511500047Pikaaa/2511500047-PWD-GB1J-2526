<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($conn,"DELETE FROM biodata_mahasiswa WHERE id=$id");

if ($hapus) {
  header("Location: tampil.php?status=hapus_sukses");
} else {
  header("Location: tampil.php?status=hapus_gagal");
}
exit;