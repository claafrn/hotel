<?php
include 'koneksi.php';

$id_resepsionis = $_POST['id_reservasi'];
$id_karyawan  = $_POST['id_kar'];
$id_kamar= $_POST ['id_kamar'];
$id_tamu= $_POST ['id_pelanggan'];
mysqli_query($koneksi,"update resepsionis set id_resepsionis='$id_reservasi',id_karyawan='$id_kar','id_kamar=$id_kamar',id_tamu=$id_pelanggan");

header("location:resepsionis.php");
?>