<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$query = "SELECT * FROM t_kirimucapan ORDER BY id_kirim DESC";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wedding Invitation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/justin.css" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    
    <!-- bagian pertama -->
    <div class="section1">
        <div class="frame1">
            <div>
                <p class="fontbold sl-fadeIn">You're Invited!</p>
                <p class="fontlight sl-fadeIn">to Attend Wedding of</p>
                <p class="mainfontclara sl-fadeIn">Riri</p>
                <p class="mainfontdan sl-fadeIn">&</p>
                <p class="mainfontdaniel sl-fadeIn">Arman</p>
            </div>
        </div>
        <!-- <div><a href="#main2" class="play sl-fadeIn"></a></div> -->
    </div>

    <!-- bagian kedua Long Frame  -->
    <div class="section2">
        <div class="frame2 sl-Up" id="main2">
            <div>
                <p class="fontlight2 sl-fadeIn">We're Getting Married</p>
                <p class="mainfontclara2 sl-fadeIn">Riri</p>
                <p class="mainfontdan2 sl-fadeIn">&</p>
                <p class="mainfontdaniel2 sl-fadeIn">Arman</p>
                <p class="fontdate sl-fadeIn">23 Januari 2022</p>
            </div>
        </div>
        <div class="flower sl-fadeIn"></div>
        <div>
            <p class="qsannisa sl-fadeIn">“And one of His Signs is this, that He created wives for you from among yourselves that you may find peace of mind in them, and He has put love and tenderness between you. In that surely are Signs for a people who reflect.”</p>
            <p class="qsannisa1 sl-fadeIn">( QS. Ar rum 21 )</p>
        </div>

        <!-- bagian ketiga -->

        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="img/img3-01.svg" class="imgres">
            </div>
            
            <div class="mySlides fade">
              <img src="img/img3-02.svg" class="imgres">
            </div>
            
            <div class="mySlides fade">
              <img src="img/img3-03.svg" class="imgres">
            </div>
        
            </div>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            

        <!-- <div class="frame3"></div> -->

        <div class="circlepicw sl-fadeIn"></div>
        <div>
            <p class="circlepicwmainfont sl-fadeIn">Rifkan Amalia S.M</p>
            <p class="circlepicwsecfont sl-fadeIn">Putri ke 1 dari</p>
            <p class="circlepicwfont sl-fadeIn">Alm Bapak. Wahyudin</p>
            <p class="circlepicwfont2 sl-fadeIn">Ibu. Ervina</p>
        </div>

        <div class="circlepicp sl-fadeIn"></div>
        <div>
            <p class="circlepicpmainfont sl-fadeIn">Arman Hermawan S.H</p>
            <p class="circlepicpsecfont sl-fadeIn">Putra ke 5 dari</p>
            <p class="circlepicpfont sl-fadeIn">Alm Bapak. H.Soebarna Djajadilaga</p>
            <p class="circlepicpfont2 sl-fadeIn">Ibu. Hj. Ety Soepenti</p>
        </div>

        <!-- bagian keempat -->
        <div class="frame4">
                <div>
                    <p class="mainfont4 sl-fadeIn">AKAD NIKAH</p>
                    <div class="lineright sl-fadeIn"></div>
                    <div class="lineleft sl-fadeIn"></div>
                    <div class="timedate4 sl-fadeIn">23 Januari 2023 <br> 09.00 WIB</div>
                    <div class="place4 sl-fadeIn">D'GREEN RESTO AND COFFE</div>
                    <div class="address4 sl-fadeIn">Jl. Selabintana No. 54 Selabatu, Cikole Kota Sukabumi, Jawa Barat</div>
                      
                    <button type="button" class="btnlocation sl-fadeIn"><!--<img src="img/location.svg">--> Lihat Lokasi</button>
                </div>
                <div>
                    <p class="mainfont4-2 sl-fadeIn">RESEPSI</p>
                    <div class="lineright-2 sl-fadeIn"></div>
                    <div class="lineleft-2 sl-fadeIn"></div>
                    <div class="timedate4-2 sl-fadeIn">23 Januari 2022 <br> 11.00 - 13.00 WIB</div>
                    <div class="place4-2 sl-fadeIn">D'GREEN RESTO AND COFFE</div>
                    <div class="address4-2 sl-fadeIn">Jl. Selabintana No. 54 Selabatu, Cikole Kota Sukabumi, Jawa Barat</div>
                    <button type="button" class="btnlocation-2 sl-fadeIn"><!--<img src="img/location.svg">-->Lihat Lokasi</button>
                </div>
        </div>

        <!-- bagian kelima -->
        <div class="frame5">
            <div>
                <p class="fontkirimucapan sl-fadeIn">Kirim Ucapan</p>
                <!-- <input type="text" class="inputboxnama" placeholder="Nama" > -->
                <form action="add.php" method="post" name="form1">
                    
                    <input type="text" id="nama" name="nama" class="inputboxnama sl-fadeIn" placeholder="Nama">

                    <input type="text" id="alamat" name="alamat" class="inputboxalamat sl-fadeIn" placeholder="Alamat">

                    <input type="text" id="ucapan_selamat" name="ucapan_selamat" class="inputboxselamat sl-fadeIn" placeholder="Ucapan Selamat">
                
                    <input type="submit" name="Submit" class="btnkirim sl-fadeIn" value="Kirim">
                </form>
                
            </div>

            <div class="iconucapan sl-fadeIn"></div>

            <!-- <p class="fontnamaucapan sl-fadeIn">Intan</p>
            <p class="fontpesanucapan sl-fadeIn">cekcekcekcek</p> -->
            
            <table width='80%' border=1>
                <tr>
                    <th>Nama</th> <th>Ucapan Selamat</th>
                </tr>
                    <?php
                    
                    if ($result)
                    {
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['nama']."</td>";
                        echo "<td>".$user_data['ucapan_selamat']."</td>"; 
                        }
                    }
                ?>
            </table>
            

            <div class="iconucapan2 sl-fadeIn"></div>

            
        </div>

        <!-- bagian keenam -->
        <div class="frame6">
            
            <div>
                <p class="fontharipernikahan sl-fadeIn">Hari Pernikahan</p>
                <p id="demo" class="fonttime6 sl-fadeIn"></p>
                <p class="fonthari sl-fadeIn">Hari</p>
                <p class="fontjam sl-fadeIn">Jam</p>
                <p class="fontmenit sl-fadeIn">Menit</p>
                <p class="fontdetik sl-fadeIn">Detik</p>

                <!-- <p id="demo" class="demo"></p> -->
            </div>
        </div>

        <!-- footer -->
        <div class="footer sl-fadeIn">
            <div>
                
            </div>
        </div>
    </div>

</body>
<script src="js/main.js"></script>
<script src="js/countdown.js"></script>
<script src="js/justin.js"></script>
</html>