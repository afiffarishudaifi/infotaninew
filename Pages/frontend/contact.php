<!DOCTYPE html>
<html lang="en">

<?php
    include "./_partials/head.php";
?>

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
    <!-- Header Area End -->

    <!-- Google Maps Start -->
    <!--<div class="akame-google-maps-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48396.58860923626!2d-74.02909054214638!3d40.70069315381758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547805689070" allowfullscreen></iframe>
    </div>-->
    <!-- Google Maps End -->

    <!-- Contact Information Area Start -->
    <!--<section class="contact-information-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Information -->
                <!--<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <h3><span class="fa fa-mobile-phone"></span></h3>
                        <h4>No HP</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <!--<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <h3><span class="fa fa-map-marker"></span></h3>
                        <h4>Alamat</h4>
                        <p>Iris Watson, 283 Fusce Rd,NY</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <!--<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <h3><span class="fa fa-clock-o"></span></h3>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <!--<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <h3><span class="fa fa-envelope-square"></span></h3>
                        <h4>Email</h4>
                        <p>info.colorlib@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Contact Information Area End -->

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Tinggalkan Pesan</h2>
                        <p>Silahkan masukkan pertanyaan tentang apa yang anda butuhkan.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="../../controller/phpmailer/mail.php" method="post" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="nama" class="form-control mb-30" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control mb-30" placeholder="Masukkan Email" required>
                            </div>
                            <div class="col-12">
                                <textarea name="komentar" class="form-control mb-30" placeholder="Masukkan pertanyaan"  required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="kirim" class="btn akame-btn btn-success mt-15 active">Kirim Komentar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

    <!-- Footer Area Start -->
    <?php
        require_once "_partials/footer.php";
    ?>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <?php require_once "./_partials/js.php"; ?>

</body>

</html>
