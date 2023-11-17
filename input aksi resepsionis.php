
<?php
include 'koneksi.php';
$id_resepsionis = $_POST['id_resepsionis'];
$id_transaksi  = $_POST['id_transaksi'];
$id_kamar= $_POST ['id_kamar'];
$id_tamu= $_POST ['id_tamu'];
$gender = $_POST ['gender'];
$tanggal_checkin = $_POST ['tanggal_checkin'];
$tanggal_check_out = $_POST ['tanggal_check_out'];
$cara_bayar = $_POST ['cara_bayar'];


mysqli_query($koneksi,"insert into resepsionis values ('$id_transaksi', '$id_resepsionis', '$tanggal_check_out','$tanggal_checkin','$id_kamar','$id_tamu','$gender','$cara_bayar')");
header("location:resepsionis.php");
?>