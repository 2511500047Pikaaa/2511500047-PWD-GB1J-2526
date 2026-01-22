<?php
$conn = mysqli_connect("localhost", "root", "", "db_pwd2025");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
