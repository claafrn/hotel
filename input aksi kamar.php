<?php
include 'koneksi.php';
$id_kamar  = $_POST['id_kamar'];
$nama_kamar = $_POST ['nama kamar'];
$fasilitas = $_POST ['fasilitas'];
$type = $_POST ['type'];
$harga = $_POST ['harga'];

mysqli_query($koneksi,"insert into kamar values ('$id_kamar','$nama_kamar','$fasilitas','$type','$harga')");
header("location:kamar.php");
?>