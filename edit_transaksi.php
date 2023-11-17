<?php
include"koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from transaksi where id_transaksi = '$id'");
while($tampil=mysqli_fetch_array($data)){

    ?>
<form method="post" action="input transaksi.php">
    <table>
        <tr>
            <td>  id_transaksi </td>
            <td> <input type="text" name="id_transaksi" value="<?php echo $tampil['id_transaksi'];?>"> </td>
        </tr>
        <tr>
            <td>  nama_tamu </td>
            <td> <input type="text" name="nama_tamu"value="<?php echo $tampil['nama_tamu'];?>"> </td>> </td>
        </tr>
        <tr>
            <td>  jumlah_pembayaran </td>
            <td> <input type="number" name="jumlah_pembayaran" value="<?php echo $tampil['jumlah_pembayaran'];?>"> </td>> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
<?php
}
?>