<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISDIKNIS V3.1</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tentang.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo-icon.png">

    <!-- GOOGLE FONTS POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="../index.php">
                <h4>RSMAS</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="../index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="praktik.php">Praktik</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="../authentication.php"class="btn btn-light">Masuk</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <section class="courses">
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/coass-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan Coass</h4>
                    <p>
                        Selama praktik coass, mahasiswa kedokteran yang disebut "co-assistant" atau "coass" akan terlibat langsung dalam pengelolaan pasien di bawah pengawasan langsung dari dokter dan tenaga medis berpengalaman.
                    </p>
                    <a href="#" class="btn btn-primary">Pelajari</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/ppds-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan PPDS</h4>
                    <p>
                        Praktik Pendidikan Profesi Dokter Spesialis (PPDS) adalah program pascasarjana yang ditujukan untuk mahasiswa kedokteran yang ingin mengkhususkan diri dalam suatu bidang spesialisasi medis.
                    </p>
                    <a href="#" class="btn btn-primary">Pelajari</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/ppa-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan PPA Lainnya</h4>
                    <p>
                        Program pendidikan tingkat lanjut untuk tenaga medis setelah menyelesaikan pendidikan dasar di bidang masing-masing, dengan tujuan menghasilkan tenaga profesional yang kompeten dan berkualitas.
                    </p>
                    <a href="#" class="btn btn-light">Pelajari</a>
                </div>
            </article>
        </div>
    </section>
    <!-- END OF COURSE -->


    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="../index.php" class="footer__logo">
                    <h4>RSMAS</h4>
                </a>
                <p>
                    Jl. Brig Jend. Hasan Basri No. 1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan
                    Selatan 70125
                </p>
            </div>
    
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="praktik.php">Praktik</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>
    
            <div class="footer__3">
                <h4>Primacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
    
            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>(0511) 92392392</p>
                    <p>diklitbangrsmas@gmail.com</p>
                </div>
    
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; Instalasi IT/PDE RSUD dr. H. Moch. Ansari Saleh</small>
        </div>
    </footer>
    
    <script src="./js/main.js"></script>
</body>
</html>