<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
    <?php 
    include "koneksi.php";
    $nama = $_GET['nama'];
    $query = mysqli_query($koneksi, "select * from tbl_siswa where nama='$nama'");
    $siswa = mysqli_fetch_array($query);
    
    ?>
    <p><input type="hidden" name="nama" value="<?= $siswa['nama']?>"></p>
    <p>Umur <input type="number" name="umur" id="" value="<?= $siswa['umur']?>"></p>
    <button type="submit">Edit</button>


    </form>
</body>
</html>