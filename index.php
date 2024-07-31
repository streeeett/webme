<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" style="margin:0 auto; width:50%">
<a href="tambah.php">Tambah siswa</a>
<table border="1" align="center" width="50% ">


<tr >
    <th>nama</th>
    <th>umur</th>
 
</tr>


<?php 
include 'koneksi.php';
$query = mysqli_query($koneksi,"select * from tbl_siswa");
while($siswa = mysqli_fetch_array($query)){
    ?>

<td><?= $siswa['nama']; ?></td>
<td><?= $siswa['umur']; ?></td>

<td>
<a href="edit.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Edit</butt></a>
<a href="delete.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Hapus</button></a>
</td>
</tr>
</tr>

    <?php
}
?>



</table>
</div>
</body>
</html>