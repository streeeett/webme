<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];



$sql = "insert into tbl_siswa values('$nama', '$umur')";
$query = mysqli_query($koneksi, $sql);

// mysqli_query($koneksi ,"INSERT INTO tb_list VALUES('$kegiatan','$tanggal','$status')");
header("location:index.php");

?>