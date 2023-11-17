<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title> Document</title>
            <link rel="stylesheet" type="text/css" href="syle.css">
            <style>
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

.harga {
    font-size: 24px;
    color: #ff5733;
}

        





            </style>

        </head>
       <body>
        
        <div class="main">
            <div class="navbar">
                <label class="logo">HOTEL RND</label>
                
                <ul>
                    
                    <li><a href="resepsionis.php">resepsionis</a></li>
                    <li><a href="tamu.php">Tamu</a> </li>
                    <li><a href="transaksi.php">transaksi</a></li>
                    <li><a href="kamar.php">kamar</a> </li>
                </ul>
                
            </div>

            <div class="content">
                <h2>Wellcome</h2>
            </div>

        </div>

        <div class="about">
            <h2>About</h2>
            <div class="kamar">
        <img src="kamar.jpeg" alt="Kamar Sederhana">
        <h1 class="judul">Kamar Sederhana</h1>
        <p class="deskripsi">Kamar sederhana dengan fasilitas yang nyaman. Kamar ini dilengkapi dengan tempat tidur, meja, TV, dan kamar mandi pribadi.</p>
        <ul class="fitur">
            <li>Tempat tidur king-size</li>
            <li> Televisi </li>
            <li>Meja kerja</li>
            <li>Kamar mandi pribadi</li>
        </ul>
        <p class="harga">Harga per malam: $</p>
    </div>
    <div class="kamar">
        <img src="kamar2.jpeg" alt="Kamar Sederhan">
        <h1 class="judul">Kamar Sederhana</h1>
        <p class="deskripsi">Kamar sederhana dengan fasilitas yang nyaman. Kamar ini dilengkapi dengan tempat tidur, meja, TV, dan kamar mandi pribadi.</p>
        <ul class="fitur">
            <li>Tempat tidur king-size</li>
            <li> Televisi </li>
            <li>Meja kerja</li>
            <li>Kamar mandi pribadi</li>
        </ul>
        <p class="harga">Harga per malam: $</p>
    </div>
        </div>

       </body>
        
</html>