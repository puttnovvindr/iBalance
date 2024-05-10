<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="hasil.css">
</head>
<body>
    <?php 
        include 'database.php'; 
        $output;
        if (isset($_GET['output'])) {
            $output = $_GET['output'];
            if($output == 0){
                $iter = 0;
            }else{
                $iter = 3 * $output;
            }
        }
    ?>
    <div class="header">
        <!-- navbar -->
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.svg" alt="">
                <h3>iBalance</h3>
            </div>
            <div class="menu">
                <a href="homepage.html">Beranda</a>
                <a href="tentang-kami.html">Tentang Kami</a>
                <a href="artikel.html">Artikel</a>
                <a href="tests.php">Personality Test</a>
                <a href="tim.html">Tim</a>
                <button><a href="#">Daftar</a></button>
            </div>
        </div>

        <div class="judul">
            <h1>Hasil</h1>
            <p>Berdasarkan analisis yang teliti, kami telah menyusun rekomendasi 
                perusahaan yang sesuai dengan profil Anda.<br> Setiap rekomendasi 
                disesuaikan dengan toleransi mental dan faktor-faktor lain yang Anda pilih dalam tes.</p>
        </div>
    </div>

    <!-- hasil -->
    <div class="hasil">
        <img src="images/hasil.svg" alt="">
        <h1>Kondisi Mental Anda</h1><br>
        <?php echo "<p> $stress_description[$output] </p><br>";?>
    </div>

    <!-- rekomendasi-perusahaan -->
    
    <div class="rekomendasi">
        <h1>Rekomendasi Pekerjaan</h1>
        <?php 
            echo '<div class="container">';
            echo '<div class="box">';
            echo '<img src="images/company.svg" id="img" alt="">';
            echo '<div class="text">';
            echo "<h3>" . $companies[$iter]->name . "</h3>";
            echo "<p>" . $companies[$iter]->positionOpen . "</p>";
            echo "<p>" . $companies[$iter]->description . "</p>"; 
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            $iter++;

            echo '<div class="container">';
            echo '<div class="box">';
            echo '<img src="images/company.svg" id="img" alt="">';
            echo '<div class="text">';
            echo "<h3>" . $companies[$iter]->name . "</h3>";
            echo "<p>" . $companies[$iter]->positionOpen . "</p>";
            echo "<p>" . $companies[$iter]->description . "</p>"; 
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            $iter++;

            echo '<div class="container">';
            echo '<div class="box">';
            echo '<img src="images/company.svg" id="img" alt="">';
            echo '<div class="text">';
            echo "<h3>" . $companies[$iter]->name . "</h3>";
            echo "<p>" . $companies[$iter]->positionOpen . "</p>";
            echo "<p>" . $companies[$iter]->description . "</p>"; 
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            $iter++;
        ?>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-logo">
                <div class="images">
                    <img src="images/logo.svg" alt="">
                    <h1>iBalance</h1>
                </div>
            <p>Pahami dan Temukan Pekerjaan sesuai Toleransi Mental</p>
            </div>
            <div class="footer-layanan">
                <h3>Layanan</h3>
                <p>Terapi Psikologis</p>
                <p>Konseling Mental</p>
                <p>Kelompok Dukungan</p>
                <p>Manajemen Kasus</p>
            </div>
            <div class="footer-kontak">
                <h3>Kontak</h3>
                <div class="box">
                    <img src="images/call-footer.svg" alt="">
                    <p>+14 5464 8272</p>
                </div>
                <div class="box">
                    <img src="images/message-footer.svg" alt="">
                    <p>sessario@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/location-footer.svg" alt="">
                    <p>Tower 192, Jakarta Selatan</p>
                </div>
            </div>
            <div class="footer-tautan">
                <h3>Tautan</h3>
                <a href="">Privacy Policy</a>
                <a href="">Terms of Use</a>
            </div>
        </div>
    </div>
</body>
</html>
