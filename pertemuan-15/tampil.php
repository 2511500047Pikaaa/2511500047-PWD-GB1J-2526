<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM biodata_mahasiswa");
?>

<table border="1">
<tr>
  <th>NIM</th><th>Nama</th><th>Aksi</th>
</tr>
<?php while ($d = mysqli_fetch_assoc($data)) { ?>
<tr>
  <td><?= $d['nim'] ?></td>
  <td><?= $d['nama'] ?></td>
  <td>
    <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
    <a href="hapus.php?id=<?= $d['id'] ?>" 
       onclick="return confirm('Yakin hapus?')">Delete</a>
  </td>
</tr>
<?php } ?>
</table>

<?php
if (isset($_GET['status'])) {
  echo "<p>Data berhasil ".$_GET['status']."</p>";
}
?>

<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == 'hapus_sukses') {
    echo "<p style='color:green'>Data berhasil dihapus</p>";
  } elseif ($_GET['status'] == 'hapus_gagal') {
    echo "<p style='color:red'>Data gagal dihapus</p>";
  }
}
?>