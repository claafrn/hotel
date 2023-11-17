<?php
include"koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from resepsionis where id_resepsionis = '$id'");
while($tampil=mysqli_fetch_array($data)){

    ?>
<form method="post" action="edit aksi resepsionis.php">
    <table>
        <tr>
        <td>  id_resepsionis </td>
            <td> <input type="text" name="id_resepsionis"  value="<?php echo $tampil['id_resepsionis'];?>"> </td>
        </tr>
        <tr>
            <td>  id_transaksi </td>
            <td> <input type="text" name="id_transaksi" value="<?php echo $tampil['id_transaksi'];?>"> </td>
        </tr>
        <tr>
            <td> id_kamar  </td>
            <td> <input type="text" name="id_kamar"  value="<?php echo $tampil['id_kamar'];?>"> </td>
        </tr>
        <tr>
            <td> id_tamu  </td>
            <td> <input type="text" name="id_tamu"  value="<?php echo $tampil['id_tamu'];?>"> </td>
        </tr>
        
        <tr>
            <td>  gender </td>
            <td> <input type="text" name="gender"  value="<?php echo $tampil['gender'];?>"> </td>
        </tr>
        <tr>
            <td>  tanggal_checkin </td>
            <td> <input type="number" name="tanggal_checkin"  value="<?php echo $tampil['tanggal_checkin'];?>"> </td>
        </tr>
        <tr>
            <td>  tanggal_check_out </td>
            <td> <input type="number" name="tanggal_check_out"  value="<?php echo $tampil['tanggal_check_out'];?>"> </td>
        </tr>
        <tr>
            <td>  cara_bayar </td>
            <td> <input type="text" name="cara_bayar"  value="<?php echo $tampil['cara_bayar'];?>"> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
<?php
}
?>