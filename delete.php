<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "delete from tbl_siswa where nama='$nama'";
$query = mysqli_query($koneksi, $sql);
if (!$query) {
    die(mysqli_error($koneksi));
    }
    header("Location: index.php");
    ?>