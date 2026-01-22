<?php
session_start();
require 'koneksi.php';

$id = $_GET['id'];

if ($conn->query("DELETE FROM biodata_pengunjung WHERE id_pengunjung=$id")) {
    $_SESSION['status'] = "Data berhasil dihapus";
} else {
    $_SESSION['status'] = "Gagal menghapus data";
}

header("Location: biodata_read.php");
exit;
