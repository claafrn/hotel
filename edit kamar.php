<?php
include"koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from kamar where id_kamar = '$id' ");
while($tampil=mysqli_fetch_array($data)){

    ?>
<form method="post" action="input-kamar.php">
    <table>
        <tr>
            <td>  id_kamar </td>
            <td> <input type="text" name="id_kamar" value="<?php echo $tampil['id_kamar'];?>"> </td>
        </tr>
        <tr>
            <td>  nama_kamar </td>
            <td> <input type="text" name="nama kamar"value="<?php echo $tampil['nama_kamar'];?>"> </td>> </td>
        </tr>
        
        <tr>
            <td>  fasilitas </td>
            <td> <input type="number" name="fasilitas" value="<?php echo $tampil['fasilitas'];?>"> </td>> </td>
        </tr>
        <tr>
            <td> type </td>
            <td> <input type="text" name="type" value="<?php echo $tampil['type'];?>"> </td>></td>
        </tr>
        <tr>
            <td> harga </td>
            <td> <input type="text" name="harga" value="<?php echo $tampil['harga'];?>"> </td>></td>
        </tr>
        <tr>
            <td> <input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
<?php
}
?>