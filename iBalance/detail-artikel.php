<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="detail-artikel.css">
</head>
<body>
    <div class="header">
    <?php 
        include 'artikelDatabase.php'; 
        $id;
        if (isset($_GET['id'])) {
            $id = $_GET['id'] - 1;
        }
    ?>
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
            <h1>Artikel</h1>
            <p>Dari tips kesehatan mental hingga artikel tentang teknik penanganan stres, 
            kami menyajikan informasi yang <br> relevan dan bermanfaat untuk membantu Anda 
            memahami dan mengelola kesejahteraan mental Anda.</p>
        </div>
    </div>

    <!-- detail-artikel -->
    <div class="detail-artikel">
        <img src="images/detail-artikel2.svg" alt=""><br><br>
        <h1><?php echo $artikel[$id]->name ?></h1><br>
        <p><?php echo $artikel[$id]->content ?>
    </div>

    <!-- artikel -->
    <div class="artikel">
        <div class="text">
            <h1>Relevansi Artikel</h1>
        </div>
        <div class="container">
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Mengatasi Stres di Tempat Kerja: Teknik Penanganan yang Efektif</h2>
                <p>Stres di tempat kerja bisa menjadi hal yang menantang bagi banyak orang..<span><a href="detail-artikel.php?id=1"> Read more</a></span></p>
            </div>
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Menjaga Kesehatan Mental di Era Digital: Tips dan Strategi Praktis</h2>
                <p>Era digital membawa banyak manfaat, tetapi juga menimbulkan tantangan baru bagi kesehatan..<span><a href="detail-artikel.php?id=2"> Read more</a></span></p>
            </div>
            <div class="box">
                <img src="images/dummy.svg" alt="">
                <h2>Meditasi untuk Menenangkan Pikiran dan Emosional</h2>
                <p>Meditasi adalah cara yang efektif untuk menenangkan pikiran dan mengurangi stres..<span><a href="detail-artikel.php?id=3"> Read more</a></span></p>
            </div>
        </div>
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