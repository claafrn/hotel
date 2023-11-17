<?php
include 'koneksi.php';
$id_tamu  = $_POST['id_tamu'];
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$gender = $_POST ['gender'];

mysqli_query($koneksi,"insert into tamu values ('$id_tamu','$nama','$alamat','$gender')");
header("location:tamu.php");
?>