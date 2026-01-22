<?php
$conn = new mysqli("localhost", "root", "", "biodata_pengunjung");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
