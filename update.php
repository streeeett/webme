<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];



$sql = "UPDATE tbl_siswa set umur='$umur' where nama='$nama'";
$query = mysqli_query($koneksi, $sql);


header("location:index.php");

?>