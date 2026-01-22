<?php
session_start();
require 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID tidak valid!");
}

$id = (int) $_GET['id'];

if ($conn->query("DELETE FROM tbl_tamu WHERE cid=$id")) {
    $_SESSION['status'] = "Data berhasil dihapus";
} else {
    $_SESSION['status'] = "Gagal menghapus data";
}

header("Location: biodata_read.php");
exit;
