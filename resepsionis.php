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
            background-color: black;
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
        .content {
            top: 50%;
            width: 100%;
            text-align: center;
            color: rgb(240, 237, 218);
            position: absolute;
            transform: translateY(-40%);
        }
        .main {
            width: 100%;
            height: 100vh;
            background-image: url("bg hotel.jpeg");
            background-size: cover;
            background-position: center; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        button {
            width: 150px;
            margin: 20px 10px;
            padding: 15px 0;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            color: rgb(255, 255, 255);
            background: transparent;
            border: 3px solid rgb(10, 9, 7);
            position: relative;
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
        
        }
        span{
            height: 100px;
            width: 0;
            left: 0;
            bottom: 0;
            position: absolute;
            border-radius: 10px;
            border-radius: 10px;
            background: rgb(255, 255, 255);
            transition: 0.5s;

        }
        navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: rgb(255, 254, 255);
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.4s;

        }

        .main .navbar{
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .main .content h2{
            font-size: 50px;
        }
        
        .about{
            width: 100%;
            height: 100vh;
        }
        .kamar {
    width: 300px;
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.kamar img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

.judul {
    font-size: 24px;
}

.deskripsi {
    font-size: 16px;
    margin-bottom: 10px;
}

.fitur {
    font-size: 18px;
    margin-bottom: 10px; 
    padding-left: 0;
    list-style: none;
}

.fitur li {
    margin: 5px 0;
}





    </style>
    div class="navbar">
                <label class="logo">HOTEL RND</label>
                
                <ul>
                    
                    <li><a href="resepsionis.php">resepsionis</a></li>
                    <li><a href="tamu.php">Tamu</a> </li>
                    <li><a href="transaksi.php">transaksi</a></li>
                    <li><a href="kamar.php">kamar</a> </li>
                </ul>
                 
            </div>

<table border="1">
    <tr>
        <td> id_resepsionis </td>
        <td> id_transaksi </td>
        <td> id_kamar </td>
        <td> id_tamu </td>
        <td>  gender </td>
        <td> tanggal_checkin</td>
        <td> tanggal_check_out </td>
        <td>  cara_bayar </td>
    </tr>
<?php
include"koneksi.php";
$data=mysqli_query($koneksi,"select * from resepsionis");
while($tampil=mysqli_fetch_array($data)){

    ?>
<tr> 
    <td> <?php echo $tampil['id_resepsionis'] ?> </td>
    <td> <?php echo $tampil['id_transaksi'] ?> </td>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['gender'] ?> </td>
    <td> <?php echo $tampil['tanggal_checkin'] ?> </td>
    <td> <?php echo $tampil['tanggal_check_out'] ?> </td>
    <td> <?php echo $tampil['cara_bayar'] ?> </td>
    <td><a href="hapus_resepsionis.php?id=<?php echo$tampil['id_resepsionis']; ?>" >Hapus</a>
    <td><a href="edit_resepsionis.php?id=<?php echo$tampil['id_resepsionis']; ?>" >Edit</a>
    </td>
</tr>
<?php
}
?>
</table>
<a href="input resepsionis.php"> Tambahkan data baru </a>

</html>