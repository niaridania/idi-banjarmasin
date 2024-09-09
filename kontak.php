<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISDIKNIS V3.1</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/kontak.css">

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

    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./images/contact-us.jpg">
                </div>
                <h2>Kontak Kami</h2>
                <p>
                    Kami menghargai setiap pertanyaan, komentar, atau permintaan informasi dari Anda. Untuk itu, jangan ragu untuk menghubungi kami. Kami dengan senang hati akan membantu dan merespons dengan segera. Terima kasih atas perhatian Anda.
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>(+62) 81348936100</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>diklitbangrsas@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Gedung Rawat Jalan, Lt. 2 Manajemen, RSMAS</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li>
                        <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com"><i class="uil uil-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </aside>

            <form class="contact__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Adress" placeholder="Your Email Address" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </section>

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