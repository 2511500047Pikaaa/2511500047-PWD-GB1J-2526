<?php
session_start();
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitasi
    $nama   = htmlspecialchars(trim($_POST['nama']));
    $email  = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $no_hp  = htmlspecialchars(trim($_POST['no_hp']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));

    // Validasi
    if (empty($nama) || empty($email)) {
        $_SESSION['status'] = "Data wajib tidak boleh kosong!";
        header("Location: biodata_read.php");
        exit;
    }

    // Insert
    $query = "INSERT INTO biodata_pengunjung 
              (nama, email, no_hp, alamat)
              VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $nama, $email, $no_hp, $alamat);

    if ($stmt->execute()) {
        $_SESSION['status'] = "Data berhasil disimpan";
    } else {
        $_SESSION['status'] = "Gagal menyimpan data";
    }

    // PRG
    header("Location: biodata_read.php");
    exit;
}
