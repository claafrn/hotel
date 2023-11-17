<?php
include 'koneksi.php';

$id_transaksi=$_POST['transaksi'];
$nama_tamu=$_POST['nama'];
$jumlah_pembayaran=$_POST['jenis'];
mysqli_query($koneksi,"update transaksi set id_transaksi='$transaksi',nama_tamu='$nama',jumlah_pembayaran=$bayar");

header("location:transaksi.php");
?>