<!DOCTYPE html>
<html lang="en">

<?php
    include "./_partials/head.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Akame - Hair Salon HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!--manual CSS-->
    <link rel="stylesheet" href="./css/tentangkami.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <?php
        require_once "./_partials/header.php";
    ?>
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><!--<img src="../../img/logo.png" alt="">--></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Info Tani</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Akame About Area Start -->
    <section class="akame--about--area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-left mb-80 pr-5 pt-3">
                        <p>Jember • Tahun 2019</p>
                        <h2>Cerita Tentang Kami</h2>
                        <span>Riwayat</span>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about--us--content mb-80">
                        <p>Website ini dibuat untuk sistem informasi pertanian Indonesia, 
                        memudahkan masyarakat maupun perusahaan untuk mencari tahu data pertanian tiap daerah, 
                        seperti data bulan tanam, data bulan panen, komoditas tiap daerah 
                        dan lain lain yang bertujuan juga untuk mensejahterakan para tani</p>
                        <!--<img src="img/core-img/signature.png" alt="">-->
                        <h4>Info Tani Crew</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akame About Area End -->

    <!-- Akame Video Area Start -->
    <div class="akame--video--area">
        <div class="container">

            <!-- Video Content Area -->
            <div class="row">
                <div class="col-12">
                    <div class="video-content-area mb-80">
                        <img src="../../assets/img/bg-img/tani.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=YxvWmvZxyz0" class="video-play-btn wow bounceInDown" data-wow-delay="200ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <span>Case</span>
                        <img src="../../assets/img/bg-img/bajaksawah.jpg" alt="">
                        <p>Proses bajak sawah</p>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <span>Client</span>
                        <img src="../../assets/img/bg-img/musimtanam.jpg" alt="">
                        <p>Musim tanam</p>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <span>Award</span>
                        <img src="../../assets/img/bg-img/hama.jpg" alt="">
                        <p>Proses membasmi hama</p>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-80 wow fadeInUp" data-wow-delay="800ms">
                        <span>Style</span>
                        <img src="../../assets/img/bg-img/musimpanen.jpg" alt="">
                        <p>Musim panen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akame Video Area End -->

    <!-- Testimonial Area Start -->
    <section class="testimonial-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>Pertanian adalah sumber kehidupan, Petani adalah seorang yang berkeyakinan baik, orang yang bermoral tinggi, dan memiliki cinta kepada kebebasan yang kokoh.</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Che Guevara</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>Pertanian terlihat perkasa mudah ketika bajak Anda adalah pensil dan kau seribu mil dari ladang jagung.</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Dwight D. Eisenhower</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>Tidak akan mungkin menjadi bangsa yang berdaulat di bidang pangan, kalau jumlah bendungan dan saluran irigasi yang mengairi lahan-lahan pertanian kita di seluruh penjuru Tanah Air, sangat terbatas.</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Joko Widodo</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

   

    <!-- Our Expert Area Start -->
    <section class="akame-our-expert-area about-us-page section-padding-80-0">

        <!-- Side Thumbnail -->
        <div class="side-thumbnail" style="background-image: url(img/bg-img/.png);"></div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Anggota</h2>
                        <p>Tiap anggota memiliki peran masing-masing dalam pembuatan website, yaitu front end, back end, dan database. Dalam proses pembuatan, kami menggunakan aplikasi Github dekstop untuk kerjasama tim menyelesaikan website info tani.  </p>
                    </div>
                    <!-- Our Certificate -->
                    <div class="our-certificate-area mb-60 d-flex align-items-center">
                        <img src="img/core-img/certificate-1.png" alt="">
                        <img src="img/core-img/certificate-2.png" alt="">
                        <img src="img/core-img/certificate-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80">
                        <div class="team-member-img">
                            <img src="../../assets/img/bg-img/murpy.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Murpy Satria Nugraha</h5>
                            <p>Developer Team</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80">
                        <div class="team-member-img">
                            <img src="../../assets/img/bg-img/afif.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Afif Faris Hudaifi</h5>
                            <p>Developer Team</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80">
                        <div class="team-member-img">
                            <img src="../../assets/img/bg-img/rapep.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Rafif Zuhdi Filiatno</h5>
                            <p>Developer Team</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80">
                        <div class="team-member-img">
                            <img src="../../assets/img/bg-img/camalla.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Camalla Sabrina</h5>
                            <p>Developer Team</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Expert Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                        <p class="mb-30">Kita akan berusaha memberikan pelayanan yang maksimal untuk Anda</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">CAMRI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Waktu Pelayanan</h4>

                        <!-- Open Times -->
                        <div class="Waktu Pelayanan">
                            <p>Senin : Jumat: 10.00 WIB - 20.00 WIB</p>
                            <p>Sabtu: 10.00WIB - 17.00 WIB</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Kontak Kami</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel:(+62) 345 678 910</p>
                            <p>E-mail: infotani@gmail.com</p>
                            <p>Alamat: Jl. Mastrip</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>