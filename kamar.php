<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background: url("resp.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        nav a:hover{
            background-color: #ff0000;
            color: yellow;
        }
        table{
            width: 78%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            overflow: hidden;
        }
        table thead tr{
            background: rgba(255, 0, 0, 0.7);
        }
        th,td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #ff0000;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        a{
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: black;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ;
        }
        a:hover{
            background-color: ff3333;
        }
        a:active{
            background-color: 990000;
        }
        .add-button {
            display: block;
            margin-top: 20px;
            text-align: center;
            bottom: 50px;
        }


    </style>
<table border="1">
    <tr>
        <td> id_kamar </td>
        <td> nama_kamar </td>
        <td> fasilitas </td>
        <td> type </td>
        <td> harga </td>
    </tr>
<?php
include"koneksi.php";
$data=mysqli_query($koneksi,"select * from kamar");
while($tampil=mysqli_fetch_array($data)){

    ?>
<tr> 
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['nama_kamar'] ?> </td>
    <td> <?php echo $tampil['fasilitas'] ?> </td>
    <td> <?php echo $tampil['type'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td><a href="hapus kamar.php?id=<?php echo$tampil['id_kamar']; ?>" > hapus</a>
    <td><a href="edit kamar.php?id=<?php echo$tampil['id_kamar']; ?>"> edit </a>
    </td>
</tr>
<?php
}
?>
</table>
<a href="input kamar.php"> Tambahkan data baru </a>

</html>