<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nim    = htmlspecialchars(trim($_POST['nim']));
  $nama   = htmlspecialchars(trim($_POST['nama']));
  $email  = htmlspecialchars(trim($_POST['email']));
  $alamat = htmlspecialchars(trim($_POST['alamat']));

  if ($nim && $nama) {
    mysqli_query($conn, "INSERT INTO biodata_mahasiswa
      (nim, nama, email, alamat)
      VALUES ('$nim','$nama','$email','$alamat')");
    
    header("Location: tampil.php?status=sukses");
    exit;
  }
}