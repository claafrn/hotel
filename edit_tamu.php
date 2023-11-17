<?php
include"koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"select * from tamu where id_tamu = '$id'");
while($tampil=mysqli_fetch_array($data)){

  ?>
    <form method="post" action="edit aksi tamu.php">
    <table>
        <tr>
            <td>  id_tamu </td>
            <td> <input type="text" name="id_tamu" value="<?php echo $tampil['id_tamu'];?>">  </td>
        </tr>
        <tr>
            <td>  nama </td>
            <td> <input type="text" name="nama" value="<?php echo $tampil['nama'];?>" > </td>
        </tr>
        <tr>
            <td>  Alamat </td>
            <td> <input type="text" name="alamat"  value="<?php echo $tampil['Alamat'];?>"> </td>
        </tr>
        
        
        <tr>
            <td>  gender </td>
            <td> <input type="text" name="gender" value="<?php echo $tampil['gender'];?>"> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
<?php
}
?>