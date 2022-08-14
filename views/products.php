<?php require_once VIEW . "globals.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Socapco | blog</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= ASSETS ?>images/favicon.png">

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
    <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2.jpg);">
        <div class="bradcumbContent">
            <h2>produits <?php if ($cat != "all") echo $cat; ?></h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-100 section-padding-10">
        <div class="container">

            <div class="list_product row">
                <span class="text-center col-12">nos gamme de produits pour <?= $cat; ?></span>
                <!-- galery product  -->
                <?php include_once VIEW . "partials/_galery.php" ?>
                <!-- END galery product  -->
            </div>

            <!-- Pagination Area Start -->
            <div class="container">
                <div class="academy-pagination-area wow fadeInUp my-4" data-wow-delay="400ms">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ##### Blog Area End ##### -->

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

</body>

</html>