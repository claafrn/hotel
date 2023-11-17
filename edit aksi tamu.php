<?php
include 'koneksi.php';
$id_tamu  = $_POST['id_tamu'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$gender = $_POST ['gender'];

mysqli_query($koneksi,"update tamu set id_tamu='$id_tamu',nama='$nama',alamat='$alamat',gender='$gender'");
header("location:tamu.php");
?>