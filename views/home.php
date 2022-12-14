<?php
require_once MODEL . "Produit.php";

$products = new products;

try {
    $products = $products->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>socapco | Accueil</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= ASSETS ?>images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>libs/swiper/swiper-bundle.min.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <?php include_once VIEW . "partials/_top_header.php" ?>

        <!-- Navbar Area -->
        <?php include_once VIEW . "partials/_navigation.php" ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <style>
        .divine {
            background-image: url('<?= ASSETS ?>images/bg-img/bg-1.jpg');
        }

        .carmel {
            background-image: url('<?= ASSETS ?>images/bg-img/bg-2.jpg');
        }

        .belle {
            background-image: url('<?= ASSETS ?>images/bg-img/bg-3.jpg');
        }

        @media screen and (max-width:800px) {
            .divine {
                background-image: url('<?= ASSETS ?>images/bg-img/bg-1-phone.jpg');
            }

            .divine .h4 {
                /* display: none; */
                margin-top: 75%;
            }

            .divine .hero-slides-content {
                text-align: center;
            }

            .carmel {
                background-image: url('<?= ASSETS ?>images/bg-img/bg-2-phone.jpg');
            }

            .belle {
                background-image: url('<?= ASSETS ?>images/bg-img/bg-3-phone.jpg');
            }
        }

        .carmel .hero-slides-content {
            text-align: right;
        }
    </style>
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img divine">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 class="h4" data-animation="fadeInUp" data-delay="100ms">faites vous plaisir, <br> sentez vous
                                    belle et l??g??re avec la gamme de produits</h4>
                                <h2 data-animation="fadeInUp" data-delay="300ms"> DIVINE Clart??
                                </h2>
                                <a href="./produits&eff=eclaircissant" class="btn academy-btn" data-animation="fadeInUp" data-delay="1000ms">Produits eclaircissant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img carmel">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Socapco Cosm??tique, l???expert des peaux sensibles,
                                    <br> vous propose une large gamme de produits b??b??
                                </h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">CARMELL??B??B??
                                </h2>
                                <a href="./produits&eff=hydratant" class="btn academy-btn" data-animation="fadeInUp" data-delay="1000ms">
                                    Produits hydratant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img belle">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Faites plaisir ?? votre peaux,
                                    <br> Essayez le nouveau blanchisseur .
                                </h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">belle face <br>??claircissement
                                </h2>
                                <a href="./produits&eff=gommant" class="btn academy-btn" data-animation="fadeInUp" data-delay="1500ms">
                                    Produits gommant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            fade: 'true',
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="col">
                            <h3 class="text-center text-light">Nos Meilleurs Prodruits</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- card slider -->
    <?php include_once VIEW . "partials/_card_slider.php" ?>

    <!-- end card -->


    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2s.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>socapco</span>
                        <h3>le slogan de l'entreprise</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <img src="<?= ASSETS ?>images/divine.jpg" alt="">
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="<?= ASSETS ?>images/logo.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p class="h2">DIVINE CLARTE</p>
                            <p class="h3">c'est simple</p>
                            <p>Formul??e ?? partir d'actifs d'origine naturelle ou issus de la pharmacie.</p>
                            <!-- <h6><span><a class="text-light" href="#">voir plus</a></span></h6> -->
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6 p-4">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="<?= ASSETS ?>images/logo.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p class="h2">BELLE FACE</p>
                            <p class="h3">C???EST EFFICACE</p>
                            <p>Des formules justement dos??es ?? l???efficacit?? prouv??e.</p>
                            <!-- <h6><span><a class="text-light" href="#">voir plus</a></span></h6> -->
                        </div>
                    </div>
                </div>

                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6 p-4">
                    <img src="<?= ASSETS ?>images/belle-face.jpg" alt="">
                </div>
            </div>
            <div class="row my-3">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <img src="<?= ASSETS ?>images/first-baby-Savon.jpg" alt="">
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="<?= ASSETS ?>images/logo.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p class="h2">FIRST BABY</p>
                            <p class="h3">c'est simple</p>
                            <p>Formul??e ?? partir d'actifs d'origine naturelle ou issus de la pharmacie.</p>
                            <!-- <h6><span><a class="text-light" href="#">voir plus</a></span></h6> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="#" class="btn academy-btn">voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------- -->

    <!-- ##### Footer Area Start ##### -->
    <?php include_once VIEW . "partials/_footer.php" ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= ASSETS ?>libs/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= ASSETS ?>libs/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= ASSETS ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= ASSETS ?>libs/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= ASSETS ?>libs/active.js"></script>
    <!-- slider  -->
    <script src="<?= ASSETS ?>libs/swiper/swiper-bundle.min.js"></script>
    <script src="<?= ASSETS ?>js/slider.js"></script>
    <!-- Fonction APP -->
    <script src="<?= ASSETS ?>js/fonction.js"></script>
    <!-- Initialize Swiper -->
</body>

</html>