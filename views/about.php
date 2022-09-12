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
    <link rel="icon" href="<?= ASSETS ?>images/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">

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

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/breadcumb.jpg);">
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
                        <h3>Socapco Consmétique <small>sarl</small></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h2>Faisons connaissances maintenant</h2>
                    <p>
                        Dans l’optique d’apporter aux Cameroun en particulier et à l’Afrique en general, les solutions
                        cosmétiques adaptées à leurs besoins, la Société Camerounaise des Produits Cosmétiques (SOCAPCO)
                        voit le jour en 2013 et s’implante à Bafoussam. Etant donné que chaque être humain est beau à sa
                        maniere, notre souci c’est votre bien-être car l’espèce humain est au coeur de notre passion.
                    </p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h3>MOTIVATION</h3>
                    <p>
                        Rendre la beaute accessible à tous est notre motivation, voilà pourquoi la Socapco s’est
                        assignée la mission d’améliorer, d’enrichir et de capitaliser la beauté des peaux noires et
                        metissées. D’avancer en mettant la ressource humaine et le management de qualité au cœur du
                        metier afin d’offrir les produits de qualité au meilleur prix. L’objectif etant ainsi d’offrir
                        des produits de meilleures qualités grâce à la mise sur pied de notre politique d’innovation
                        permanente.
                    </p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="400ms">
                    <h3>EQUIPE</h3>
                    <p>
                        Nous sommes passionnés par ce que nous faisons et c’est ce qui nous pousse à toujours
                        entreprendre et s’améliorer. Constituée à 70% des jeunes et dynamique, la Socapco pense que les
                        jeunes d’aujourd’hui sont l’Afrique de demain. C’est en des idées fulgurantes et des strategies
                        des plus aiguisées, que repose l’un des fondements de l’entreprise. Parce que l’industrie de la
                        beauté étant en réforme permanente, s’adapter est le maître mot pour s’y imposer et surtout y
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
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="<?= ASSETS ?>images/bg-img/bg-3.jpg" alt="">
                        <img src="<?= ASSETS ?>images/bg-img/bg-2.jpg" alt="">
                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Features Area Start ##### -->

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