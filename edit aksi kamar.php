<?php
include 'koneksi.php';

$id_kamar=$_POST['kamar'];
$nama_karyawan=$_POST['nama'];
$type=$_POST['jenis kamar'];
mysqli_query($koneksi,"update kamar set id_kamar='$kamar',nama_kamar='$nama',type=$jenis_kamar");

header("location:kamar.php");
?>
