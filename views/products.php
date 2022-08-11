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
    <title>Socapco | blog</title>

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

    <section class="hero-area">
        <div class="">
            <div class="single-hero-slide bg-img"
                style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2.jpg); background-attachment: fixed;">
                <div class="h1 text-light text-center my-4 py-4 d-flex"
                    style="height: 300px; align-items:center; justify-content:center;" height="200px">
                    produits
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-10">
        <div class="container">

            <div class="list_product">
                <?php foreach ($products as $key => $product) : ?>
                <div class="wow fadeInUp card_product_main" data-wow-delay="400ms">
                    <div class="image_box">
                        <img src="<?= ASSETS ?>images/product/<?= $product["picture"]?>" alt="">
                    </div>
                    <div class="body">
                        <h5><?= $product["name"]?></h5>
                        <span>By Simon Smith | March 18, 2018</span>
                        <div class="">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p><?= $product["description"]?></p>
                        <a href="./product_detail&id=<?= $product["id_product"]?>" class="btn academy-btn btn-sm">voir plus</a>
                    </div>
                </div>
                <?php endforeach; ?>
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