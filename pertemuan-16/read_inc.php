<?php
require_once 'koneksi.php';
require_once 'fungsi.php'; // ← penting: require_once

$fieldContact = [
  "nama" => ["label" => "Nama:", "suffix" => ""],
  "email" => ["label" => "Email:", "suffix" => ""],
  "pesan" => ["label" => "Pesan Anda:", "suffix" => ""]
];

$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($q)) {
  $data = [
    "nama"  => $row["cnama"],
    "email" => $row["cemail"],
    "pesan" => $row["cpesan"]
  ];
  echo tampilkanBiodata($fieldContact, $data);
}
