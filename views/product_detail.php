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
            <h2><?= $product["gam_libele"] ?></h2>
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
                <div class="m-2">
                    <h5 class="text-light"><?= $product["name"] ?></h5>
                    <div class="d-flex">
                        <h4><span class="badge badge-warning m-1"><?= $product["gam_libele"] ?></span></h4>
                        <h4><span class="badge badge-warning m-1"><?= $product["grammage"] ?> g</span></h4>
                    </div>
                    <span>by socapco | <?= date('j, F Y', strtotime($product["add_date"])); ?></span>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card border-dark bg-img bg-overlay">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    description
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $product["description"] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card border-dark bg-img bg-overlay">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ingrédients
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php
                                $ingredients = mb_split(",", $product["ingredient"]);
                                foreach ($ingredients as $key => $ingredient) {
                                    echo "<div class='badge badge-light m-2'>$ingredient</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card border-dark bg-img bg-overlay">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    autres
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="list_product container mt-4">
            <span class="text-center h3 d-block">Suggéstion de produit similaire</span>
            <section class="transitions-enabled fluid masonry js-masonry grid">
                <?php
                $products = new Products;
                try {
                    $suggProducts = $products->readSuggest(4, $product['gam_libele']);
                } catch (EXCEPTION $e) {
                    echo $e->getMessage();
                }
                ?>
                <?php foreach ($suggProducts as $key => $product) : ?>
                    <article class="card_product_main <?= $product["id_gamme"] ?> wow bounceIn" data-wow-delay="<?= $key + 2 ?>00ms">
                        <div class="image_box">
                            <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" class="img-responsive" />
                        </div>
                        <div class="body">
                            <h5><?= $product["name"] ?></h5>
                            <span class=" badge badge-dark badge-pill"><?= $product["grammage"] ?> g</span>

                            <p><?= substr($product["description"], 0, 50) ?>...</p>
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
    <!-- Fonction APP -->
    <script src="<?= ASSETS ?>js/fonction.js"></script>
</body>

</html>