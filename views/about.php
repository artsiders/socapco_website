<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>socapco | A propos</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= ASSETS ?>images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>libs/swiper/swiper-bundle.min.css">

</head>

<body>
    <style>
        .swiper {
            width: 100%;
            height: 300px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
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

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2s.jpg);">
        <div class="bradcumbContent">
            <h2>Apropos de nous</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>entreprise</span>
                        <h3>Socapco Consm??tique <small>sarl</small></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h2>Faisons connaissances maintenant</h2>
                    <p>
                        Dans l???optique d???apporter aux Cameroun en particulier et ?? l???Afrique en general, les solutions
                        cosm??tiques adapt??es ?? leurs besoins, la Soci??t?? Camerounaise des Produits Cosm??tiques (SOCAPCO)
                        voit le jour en 2013 et s???implante ?? Bafoussam. Etant donn?? que chaque ??tre humain est beau ?? sa
                        maniere, notre souci c???est votre bien-??tre car l???esp??ce humain est au coeur de notre passion.
                    </p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h3>MOTIVATION</h3>
                    <p>
                        Rendre la beaute accessible ?? tous est notre motivation, voil?? pourquoi la Socapco s???est
                        assign??e la mission d???am??liorer, d???enrichir et de capitaliser la beaut?? des peaux noires et
                        metiss??es. D???avancer en mettant la ressource humaine et le management de qualit?? au c??ur du
                        metier afin d???offrir les produits de qualit?? au meilleur prix. L???objectif etant ainsi d???offrir
                        des produits de meilleures qualit??s gr??ce ?? la mise sur pied de notre politique d???innovation
                        permanente.
                    </p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h3>EQUIPE</h3>
                    <p>
                        Nous sommes passionn??s par ce que nous faisons et c???est ce qui nous pousse ?? toujours
                        entreprendre et s???am??liorer. Constitu??e ?? 70% des jeunes et dynamique, la Socapco pense que les
                        jeunes d???aujourd???hui sont l???Afrique de demain. C???est en des id??es fulgurantes et des strategies
                        des plus aiguis??es, que repose l???un des fondements de l???entreprise. Parce que l???industrie de la
                        beaut?? ??tant en r??forme permanente, s???adapter est le ma??tre mot pour s???y imposer et surtout y
                        faire perdurer son leadership.
                    </p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-social-share">
                        <h4>nous contactez</h4>
                        <a href="https://facebook.com/socapco" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-success"><i class="fa fa-whatsapp"></i></a>
                        <a href="mailto:contact@socapco.com" class="btn btn-danger"><i class="fa fa-envelope"></i></a>
                        <!-- Meta Info -->
                    </div>
                </div>
            </div>
            <div class="row d-none">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="<?= ASSETS ?>images/bg-img/bg-3.jpg" alt="">
                        <img src="<?= ASSETS ?>images/bg-img/bg-2.jpg" alt="">
                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper my-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="<?= ASSETS ?>images/bg-img/bg-2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="<?= ASSETS ?>images/bg-img/bg-3.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <script src="<?= ASSETS ?>libs/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
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

    <!-- ##### Footer Area Start ##### -->
    <?php include_once VIEW . "partials/_footer.php" ?>

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
    <!-- Fonction APP -->
    <script src="<?= ASSETS ?>js/fonction.js"></script>
</body>

</html>