<?php
session_start();
require 'koneksi.php';

$result = $conn->query("SELECT * FROM biodata_pengunjung");
?>

<h2>Data Biodata Pengunjung</h2>

<?php
if (isset($_SESSION['status'])) {
    echo "<p>{$_SESSION['status']}</p>";
    unset($_SESSION['status']);
}
?>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>No HP</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php while ($row = $result->fetch_assoc()) : ?>
<tr>
    <td><?= $row['id_pengunjung']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['no_hp']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td>
        <a href="biodata_edit.php?id=<?= $row['id_pengunjung']; ?>">Edit</a> |
        <a href="biodata_delete.php?id=<?= $row['id_pengunjung']; ?>" 
           onclick="return confirm('Yakin hapus data?')">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
