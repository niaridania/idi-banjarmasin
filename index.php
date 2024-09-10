<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDI Cab. Banjarmasin</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-icon.png">

    <!-- GOOGLE FONTS POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h4>IDI BANJARMASIN </h4></a>
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
                <li><a href="index.php">Kegiatan</a></li>
                <li><a href="index.php">Berita</a></li>
                <li><a href="index.php">Galeri</a></li>
                <li>
                    <a href="#">Berkas</a>
                    <ul class="dropdown">
                        <li><a href="tentang.php">Surat Keputusan</a></li>
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

    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Ikatan Dokter Indonesia Cab. Banjarmasin</h1>
                <p>Halo, para peserta didik praktik. Selamat datang di RSUD dr. H. Moch. Ansari Saleh Banjarmasin! Bersiaplah untuk melampaui batasan dan berkembang bersama kami di tempat di mana praktik klinis dipertemukan dengan dedikasi tinggi. Bersama tim medis berpengalaman, kalian akan mendapatkan kesempatan untuk belajar dan mengasah keterampilan dalam perawatan kesehatan, merasakan atmosfer profesionalisme dan dedikasi dalam memberikan layanan kesehatan berkualitas bagi masyarakat sekitar. </p>
                <a href="authentication.php" class="btn btn-primary">Daftar Anggota</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="images/header.png" loading="lazy">
                </div>
            </div>
        </div>
    </header>
    <!-- END OF HEADER -->

    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Pelayanan</h1>
                <p>IDI Banjarmasin menyediakan pelayanan profesional dalam meningkatkan kompetensi dokter melalui pelatihan, seminar, dan konsultasi medis untuk mendukung kesehatan masyarakat.</p>
                <a href="#" class="btn btn-light">Pelajari Selanjutnya</a>
            </div>
            <div class="categories__right">
                <article class="category">
                    <span class="category__icon"><i class="uil uil-file-check-alt"></i></span>
                    <h5>Keanggotaan</h5>
                    <p>Daftar menjadi anggota IDI Banjarmasin dengan mengisi form yang ada pada website.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-file-bookmark-alt"></i></span>
                    <h5>Izin Praktik</h5>
                    <p>Rekomendasi Izin Praktik. pengajuan izin membuka tempat praktik dokter di banjarmasin</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-registered"></i></span>
                    <h5>KRIP</h5>
                    <p>Pembekalan kompetensi dan serkom dokter</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-files-landscapes-alt"></i></span>
                    <h5>STR</h5>
                    <p>Surat Tanda Rekomendasi</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-file-medical-alt"></i></span>
                    <h5>Kompetensi</h5>
                    <p>Kompetensi Dokter</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-angle-double-right"></i></span>
                    <h5>Studi Kasus</h5>
                    <p>Berisikan forum terkait pelayanan IDI Banjarmasin</p>
                </article>
            </div>
        </div>
    </section>
    <!-- END OF CATEGORIES -->

    <section class="courses">
        <h2>Kegiatan Terbaru</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="images/coass-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan Coass</h4>
                    <p>
                        Selama praktik coass, mahasiswa kedokteran yang disebut "co-assistant" atau "coass" akan terlibat langsung dalam pengelolaan pasien di bawah pengawasan langsung dari dokter dan tenaga medis berpengalaman.
                    </p>
                    <a href="#" class="btn btn-light">Lihat Selengkapnya</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/ppds-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan PPDS</h4>
                    <p>
                        Praktik Pendidikan Profesi Dokter Spesialis (PPDS) adalah program pascasarjana yang ditujukan untuk mahasiswa kedokteran yang ingin mengkhususkan diri dalam suatu bidang spesialisasi medis.
                    </p>
                    <a href="#" class="btn btn-light">Lihat Selengkapnya</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/ppa-1.jpg" loading="lazy">
                </div>
                <div class="course__info">
                    <h4>Pendidikan PPA Lainnya</h4>
                    <p>
                        Program pendidikan tingkat lanjut untuk tenaga medis setelah menyelesaikan pendidikan dasar di bidang masing-masing, dengan tujuan menghasilkan tenaga profesional yang kompeten dan berkualitas.
                    </p>
                    <a href="#" class="btn btn-light">Lihat Selengkapnya</a>
                </div>
            </article>
        </div>
    </section>
    <!-- END OF COURSE -->

    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis, hic commodi!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam
                        eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis,
                        hic commodi!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam
                        eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis,
                        hic commodi!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam
                        eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis,
                        hic commodi!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam
                        eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis,
                        hic commodi!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right courses for me ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis deserunt accusamus quibusdam
                        eum et vero. Molestias, aliquid optio nam beatae excepturi est aspernatur doloribus velit totam officiis,
                        hic commodi!</p>
                </div>
            </article>
        </div>
    </section>
    <!-- END OF FAQS -->

    <section class="container testimonials__container mySwiper">
        <h2>Berita Terbaru</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis excepturi deserunt?
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis
                        neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis
                        excepturi deserunt?
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis
                        neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis
                        excepturi deserunt?
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis
                        neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis
                        excepturi deserunt?
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis
                        neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis
                        excepturi deserunt?
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/avatar1.jpg" loading="lazy">
                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Mahasiswa Coass</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque ipsa id repellendus ad illum, debitis
                        neque. Praesentium odit, repellendus perspiciatis quia velit ab laudantium consectetur magni, ullam nobis
                        excepturi deserunt?
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- END OF TESTIMONIALS -->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // when window width is >= 600px and 1280px
            breakpoints: {
                600: {
                    slidesPerView: 2
                },

                1280: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>
</html>