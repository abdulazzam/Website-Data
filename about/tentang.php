<?php include_once('../_header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .about-image {
            text-align: center;
        }
        .about-image img {
            max-width: 100%;
            height: auto;
        }
        .footer {
        position:absolute;
        bottom:10px;
        width:70%;
        height:50px;   /* Contoh tinggi footer 60px */
        }
        h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
        line-height: 1.5;
        font-weight: 400;
        font-family: "Lato", Arial, sans-serif;
        color: #000;
        }
    </style>
</head>
<body>
    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide</a>
            <!-- <h1>Halloooo...!!!</h1> -->
            <center>
                <img src="../_assets/gedung.png" width="1200" height="500">
            
                <h2>PT. Telekomunikasi Indonesia Internasional (Telin)</h2>
            
            
            <h3>Address :</h3>
            <p>Telkom Landmark Tower, Tower 2,16th & 17th floor The Telkom Hub</p>
            <p>Jalan Jenderal Gatot Subroto Kav. 52</p>
            <p>Jakarta Selatan 12710 - Indonesia</p>
            <h5> Kunjungi Website Kami
            <a href="https://www.telin.net">Telin</a>
            </h5>
            </center>
            <br><br>
            <div class="pull-right">
                <p>&copy; 2023 Telin. Hak cipta dilindungi.</p>
            </div>
    </div>
</body>

</html>


<?php include_once('../_footer.php'); ?>