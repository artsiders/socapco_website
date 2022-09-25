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
    <title>Socapco | services</title>

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
    <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/manufacture.jpg);">
        <div class="bradcumbContent">
            <h2>Nos Services</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100 block_services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="400ms">
                                    <a href="#" class="post-title">Atelier de fabriquation plastique</a>
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <video src="<?= ASSETS ?>videos/2.mp4" muted autoplay loop></video>
                                    </div>
                                    <!-- Post Title -->
                                    <a href="./contact" class="post-title">contacter socapco</a>
                                    <!-- Post Excerpt -->
                                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et
                                        sollicitudin est, in euismod. Vitae turpis lacinia, lacinia lacus non, fermentum
                                        nisi. Donec et sollicitudin est.
                                    </p>
                                    <a href="">
                                        <button class="btn academy-btn btn-sm">en savoir plus ...</button>
                                    </a>
                                </div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">Savonerie</a>
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <video src="<?= ASSETS ?>videos/1.mp4" muted autoplay loop></video>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et
                                        sollicitudin est, in euismod. Vitae turpis lacinia, lacinia lacus non, fermentum
                                        nisi. Donec et sollicitudin est.</p>
                                </div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Title -->
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <video src="<?= ASSETS ?>videos/3.mp4" muted autoplay loop></video>
                                    </div>
                                    <a href="#" class="post-title">Cosméthique</a>
                                    <!-- Post Excerpt -->
                                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et
                                        sollicitudin est, in euismod. Vitae turpis lacinia, lacinia lacus non, fermentum
                                        nisi. Donec et sollicitudin est.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>


                        <!-- Add Widget -->
                        <div class="add-widget mb-4">
                            <a href="#"><img src="<?= ASSETS ?>images/blog-img/add.png" alt=""></a>
                        </div>
                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Produit mis en avant</h5>
                            <?php foreach ($productsImportant as $key => $product) : ?>
                                <a href="./product_detail&id=<?= $product["id_product"] ?>">
                                    <div class="single-latest-blog-post d-flex mb-30 bg-light p-2">
                                        <div style="background: linear-gradient(to right, #ffb347, #ffcc33);" class="latest-blog-post-thumb d-flex justify-content-center p-1">
                                            <img style="max-height: 100px;" src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" alt="produit">
                                        </div>
                                        <div class="latest-blog-post-content">
                                            <a href="#" class="post-title">
                                                <h6><?= $product["name"] ?></h6>
                                            </a>
                                            <a href="#" class="post-date"><?= $product["gam_libele"] ?></a>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
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
    <!-- Fonction APP -->
    <script src="<?= ASSETS ?>js/fonction.js"></script>
</body>

</html>