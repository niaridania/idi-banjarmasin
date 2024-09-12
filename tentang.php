<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDI Cab. Banjarmasin</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tentang.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo-icon.png">

    <!-- GOOGLE FONTS POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="logo-container">
                <img src="images/logo-icon.png" alt="Logo" class="logo">
                <h4>IDI BANJARMASIN</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="index.php">Beranda</a></li>
                <li>
                    <a href="#">Pelayanan</a>
                    <ul class="dropdown">
                        <li><a href="#">Rekomendasi SIP</a></li>
                        <li><a href="#">Registrasi Anggota Baru / Ulang</a></li>
                        <li><a href="#">Pengajuan Rekomendasi Masuk PPDS</a></li>
                        <li><a href="#">Permohonan Mutasi Keluar IDI Cab. Banjarmasin</a></li>
                    </ul>
                </li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li>
                    <a href="#">Berkas</a>
                    <ul class="dropdown">
                        <li><a href="#">Surat Keputusan</a></li>
                        <li><a href="#">Surat Edaran</a></li>
                        <li><a href="#">Buku dan Panduan</a></li>
                        <li><a href="#">Peraturan Bidang Kesehatan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tentang</a>
                    <ul class="dropdown">
                        <li><a href="tentang.php">Profile IDI Cab. Banjarmasin</a></li>
                        <li><a href="#">Sejarah Organisasi</a></li>
                        <li><a href="#">Susunan Pengurus</a></li>
                    </ul>
                </li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="./images/tentang-2.png" loading="lazy">
            </div>
            <div class="about__achievements-right">
                <h1>Profil Rumah Sakit</h1>
                <p>
                    Rumah Sakit Ansari Saleh Banjarmasin adalah lembaga pelayanan kesehatan yang berlokasi di Banjarmasin, Kalimantan Selatan. Kami berkomitmen untuk menyediakan pelayanan medis berkualitas tinggi dengan tenaga medis berpengalaman dan fasilitas modern. Dengan berbagai spesialisasi, kami siap memberikan perawatan holistik dan solusi kesehatan bagi masyarakat.
                </p>
                <div class="achievements__cards">
                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-video"></i>
                        </span>
                        <h3>450+</h3>
                        <p>Course</p>
                    </article>

                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <h3>79,000+</h3>
                        <p>Students</p>
                    </article>

                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-trophy"></i>
                        </span>
                        <h3>26+</h3>
                        <p>Awards</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF ACHIEVEMENT -->

    <section class="team">
        <h2>Pembimbing</h2>
        <div class="container team__container">
            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm1.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Anwari Halim, Sp. OG</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm4.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Bill Harman, Sp. OG</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm2.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Ayub M. Assa, Sp. OG(K)</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm3.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. M. Anhar Dani, Sp. OG, M.Ked. Klin</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm5.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Fellita Ratri Anggraeni, Sp. OG</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm6.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Sintia Damayanti, Sp. OG</h4>
                    <p>Kebidanan dan Penyakit Kandungan</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Winda Safiitri, Sp.THT-KL</h4>
                    <p>Penyakit Telinga Hidung Tenggorokan – Kerongkongan Leher (THTKL)</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Hamita, Sp.THT-KL</h4>
                    <p>Penyakit Telinga Hidung Tenggorokan – Kerongkongan Leher (THTKL)</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm7.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Kasan Wongdjaja, Sp. PD, Finasim</h4>
                    <p>Penyakit Dalam</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm8.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Hj. Wiwit Agung SNC, Sp. PD (K)</h4>
                    <p>Penyakit Dalam</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Dewi Rizki Agustina, Sp. PD</h4>
                    <p>Penyakit Dalam</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Ana Khairina, Sp. PD</h4>
                    <p>Penyakit Dalam</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Oldi Dedya, Sp. PD</h4>
                    <p>Penyakit Dalam</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Priyanti Kisworini, Sp. A, M.Kes</h4>
                    <p>Kesehatan Anak</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Yulia Margareta L. Toruan, Sp. A</h4>
                    <p>Kesehatan Anak</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Dewiyana, Sp.S</h4>
                    <p>Penyakit Syaraf</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Meilda Sartika Dewi, Sp.S</h4>
                    <p>Penyakit Syaraf</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Dwiana Safitri, Sp.KK</h4>
                    <p>Kesehatan Kulit Kelamin</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Ahyar Nawi Husin, Sp.Kj</h4>
                    <p>Ilmu Kedokteran Jiwa</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. Anidiah Nofy Hadi, Sp.KJ, M.Kes</h4>
                    <p>Ilmu Kedokteran Jiwa</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm9.jpg">
                </div>
                <div class="team__member-info">
                    <h4>dr. M. Rudiannor, Sp.P</h4>
                    <p>Paru</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
                </div>
            </article>
        </div>
    </section>
    <!-- END OF TEAM -->

    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>IDI BANJARMASIN</h4></a>
                <p>
                    Jl. Brig Jend. Hasan Basri No. 9, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="berita.php">Berita</a></li>
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
                    <p>(0811) 515-876</p>
                    <p>cabangbanjarmasinidi@gmail.com</p>
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
            <small>Copyright &copy; Codesign</small>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>