<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Test</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
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
            <h1>Personality Test AI</h1>
            <p>Personality Test dirancang untuk membantu pengguna memahami diri 
                melalui serangkaian pertanyaan yang dipilih secara cermat. Tes ini <br>
                menyediakan pengalaman informatif, dengan rekomendasi perusahaan yang 
                disesuaikan dengan toleransi mental pengguna sebagai hasil akhirnya.</p>
        </div>

        <div class="notes">
            <div class="box">
                <img src="images/ps-1.svg" alt=""><br><br>
                <p>Sangat mudah, hanya membutuhkan sedikit waktu Anda</p>
            </div>
            <div class="box">
                <img src="images/ps-2.svg" alt=""><br><br>
                <p>Tolong jujur dalam menjawab
                    (Walaupun kamu tidak menyukainya)</p>
            </div>
            <div class="box">
                <img src="images/ps-3.svg" alt=""><br><br>
                <p>Jangan berikan jawaban “netral”</p>
            </div>
        </div>
    </div>

    <div class="kosong">
    </div>
<!-- test -->
    <div class="test">
        <form id="personalityForm" action="prediction.php" method="post">
            <div class="big-container">
                <div class="container-1">
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa mudah bagi Anda untuk beradaptasi dengan perubahan lingkungan kerja?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test1" value="1">
                            <input type="radio" name="test1" value="2">
                            <input type="radio" name="test1" value="3">
                            <input type="radio" name="test1" value="4">
                            <input type="radio" name="test1" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa penting bagi Anda untuk memiliki kebebasan dalam mengatur waktu kerja Anda?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test2" value="1">
                            <input type="radio" name="test2" value="2">
                            <input type="radio" name="test2" value="3">
                            <input type="radio" name="test2" value="4">
                            <input type="radio" name="test2" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa nyaman Anda dalam bekerja dengan tenggat waktu yang ketat?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test3" value="1">
                            <input type="radio" name="test3" value="2">
                            <input type="radio" name="test3" value="3">
                            <input type="radio" name="test3" value="4">
                            <input type="radio" name="test3" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa besar Anda merasa terlibat dalam pekerjaan yang Anda lakukan?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test4" value="1">
                            <input type="radio" name="test4" value="2">
                            <input type="radio" name="test4" value="3">
                            <input type="radio" name="test4" value="4">
                            <input type="radio" name="test4" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa penting bagi Anda untuk menerima umpan balik konstruktif dari rekan kerja atau atasan?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test5" value="1">
                            <input type="radio" name="test5" value="2">
                            <input type="radio" name="test5" value="3">
                            <input type="radio" name="test5" value="4">
                            <input type="radio" name="test5" value="5">  
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="click-btn">
                        <button id="next-1"><a>Next</a></button>
                    </div>
                </div>
        
                <div class="container-2">
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa besar Anda merasa nyaman dalam berbicara di depan umum?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test5" value="1">
                            <input type="radio" name="test5" value="2">
                            <input type="radio" name="test5" value="3">
                            <input type="radio" name="test5" value="4">
                            <input type="radio" name="test5" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa sering Anda mencari tahu dan belajar hal baru dalam pekerjaan Anda?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test6" value="1">
                            <input type="radio" name="test6" value="2">
                            <input type="radio" name="test6" value="3">
                            <input type="radio" name="test6" value="4">
                            <input type="radio" name="test6" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa nyaman Anda dalam bekerja dengan orang-orang dari berbagai latar belakang?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test7" value="1">
                            <input type="radio" name="test7" value="2">
                            <input type="radio" name="test7" value="3">
                            <input type="radio" name="test7" value="4">
                            <input type="radio" name="test7" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa sering Anda merasa tertekan oleh tugas-tugas yang diberikan?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test8" value="1">
                            <input type="radio" name="test8" value="2">
                            <input type="radio" name="test8" value="3">
                            <input type="radio" name="test8" value="4">
                            <input type="radio" name="test8" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa penting bagi Anda untuk memiliki kesempatan untuk pertumbuhan dan pengembangan karier?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test9" value="1">
                            <input type="radio" name="test9" value="2">
                            <input type="radio" name="test9" value="3">
                            <input type="radio" name="test9" value="4">
                            <input type="radio" name="test9" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box">
                        <h2>Seberapa penting bagi Anda untuk memiliki keseimbangan antara kehidupan pribadi dan profesional?</h2>
                        <div class="radio-btn">
                            <p>False</p>
                            <input type="radio" name="test10" value="1">
                            <input type="radio" name="test10" value="2">
                            <input type="radio" name="test10" value="3">
                            <input type="radio" name="test10" value="4">
                            <input type="radio" name="test10" value="5">
                            <p>True</p>
                        </div>
                    </div>
                    <img src="images/line.svg" alt="">
                    <div class="box-btn">
                        <div class="text-inter">
                            <h2>How many years have you spent in this industry?</h2>
                            <input type="text" name="experience" placeholder="Enter years of experience">
                        </div>
                        <div class="text-inter">
                            <h2>How many hours are you willing to work in a day?</h2>
                            <input type="text" name="hours" placeholder="Enter hours per day">
                        </div>
                    </div>

                    <div class="click-btn">
                        <div class="prev-btn">
                            <button id="prev"><a>Previous</a></button>
                        </div>
                        <div class="submit-btn">
                            <button type="submit"><a>Submit</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        var container1 = document.querySelector(".container-1");
        var container2 = document.querySelector(".container-2");

        var next1 = document.getElementById("next-1");
        var next2 = document.getElementById("next-2");
        var prev = document.getElementById("prev");

        next1.addEventListener("click", function(event) {
            event.preventDefault(); // Menghentikan perilaku default dari tautan
            container1.style.display = "none";
            container2.style.display = "flex";
        });

        prev.addEventListener("click", function(event) {
            event.preventDefault(); // Menghentikan perilaku default dari tautan
            container1.style.display = "flex";
            container2.style.display = "none";
        });
</script>

    </script>
</body>
</html>