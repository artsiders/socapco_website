<?php require_once VIEW . "globals.php"; ?>
<?php
require_once MODEL . "Produit.php";
if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];
    $product = new products;

    try {
        $product = $product->read($id);
    } catch (EXCEPTION $e) {
        echo $e->getMessage();
    }
} else {
    $product = "";
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
    <link rel="icon" href="<?= ASSETS ?>images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">

</head>

<body>
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
            <h2><?= $product["name"] ?></h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Product Details Area Start ##### -->
    <div class="product_details section-padding-100 p-t-20 container">
        <section class="wow fadeInUp row bg-img bg-overlay text-light p-4" data-wow-delay="300ms">
            <div class="col-md-6 col-sm-12 box_image">
                <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" alt="">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="">
                    <h5 class="text-light"><?= $product["name"] ?></h5>
                    <span>By Simon Smith | <?= $product["add_date"] ?></span>
                    <div class="course-ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p class="text-light"><?= $product["description"] ?>.</p>
                </div>
            </div>
        </section>

        <div class="list_product container mt-4">
            <span class="text-center h3 d-block">Suggéstion</span>
            <section class="transitions-enabled fluid masonry js-masonry grid">
                <?php foreach ($suggProducts as $key => $product) : ?>
                <article class="card_product_main <?= $product["id_gamme"] ?> wow bounceIn"
                    data-wow-delay="<?= $key + 2 ?>00ms">
                    <div class="image_box">
                        <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" class="img-responsive" />
                    </div>
                    <div class="body">
                        <h5><?= $product["name"] ?></h5>
                        <span>By Simon Smith | March 18, 2018</span>
                        <div class="">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p><?= $product["description"] ?></p>
                        <a href="./product_detail&id=<?= $product["id_product"] ?>" class="btn academy-btn btn-sm">voir
                            plus</a>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

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