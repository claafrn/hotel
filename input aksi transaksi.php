<?php
include 'koneksi.php';
$id_karyawan  = $_POST['id_transaksi'];
$nama_karyawan = $_POST ['nama_tamu'];
$gender = $_POST ['jumlah_pembayaran'];

mysqli_query($koneksi,"insert into transaksi values ('$id_karyawan','$nama_karyawan','$gender')");
header("location:transaksi.php");
?>