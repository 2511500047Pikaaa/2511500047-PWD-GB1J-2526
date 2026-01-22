<?php
session_start();
require 'koneksi.php';

$id     = $_POST['id_pengunjung'];
$nama   = htmlspecialchars(trim($_POST['nama']));
$email  = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$no_hp  = htmlspecialchars(trim($_POST['no_hp']));
$alamat = htmlspecialchars(trim($_POST['alamat']));

$query = "UPDATE biodata_pengunjung SET
          nama=?, email=?, no_hp=?, alamat=?
          WHERE id_pengunjung=?";

$stmt = $conn->prepare($query);
$stmt->bind_param("ssssi", $nama, $email, $no_hp, $alamat, $id);

if ($stmt->execute()) {
    $_SESSION['status'] = "Data berhasil diupdate";
} else {
    $_SESSION['status'] = "Data gagal diupdate";
}

header("Location: biodata_read.php");
exit;
