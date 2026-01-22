<?php
require_once 'koneksi.php';
require_once 'fungsi.php';

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

  echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px'>";
  echo tampilkanBiodata($fieldContact, $data);

  // 🔑 INI KUNCI UTAMANYA
  echo "<a href='biodata_edit.php?id={$row['cid']}'>Edit</a>";
  echo "</div>";
}
