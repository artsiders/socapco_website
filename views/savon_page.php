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
    <title>Socapco | savons</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= ASSETS ?>images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">
</head>

<body>
    <style>
        .content_card_soap {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .content_card_soap .card_soap {
            width: 250px;
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
        <!-- LIGHTBOX -->
        <link rel="stylesheet" href="<?= ASSETS ?>libs/lightbox2-2.11.3/css/lightbox.min.css">
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2.jpg);">
        <div class="bradcumbContent">
            <h2>savon de ménage</h2>
        </div>
    </div>

    <!-- ##### Breadcumb Area End ##### -->
    <div class="container mt-10 section-padding-100-70">

        <div class="content_card_soap">
            <?php foreach ($allSoapPaginate as $key => $soap) : ?>
                <div class="card_soap">
                    <div class="card shadow-sm">
                        <a id="imageSoap" href="<?= ASSETS ?>images/product/<?= $soap["picture"] ?>" class="bd-placeholder-img card-img-top image_box" data-lightbox="soapgallery" data-title="<?= $soap['description'] ?>">
                            <img width="100%" height="225" src="<?= ASSETS ?>images/product/<?= $soap["picture"] ?>" class="img-responsive" />
                        </a>

                        <div class="card-body">
                            <p class="card-text"><?= substr($soap["description"], 0, 50) ?> ...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="document.getElementById('imageSoap').click()" class="btn academy-btn btn-sm">voir
                                        plus</button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="badge badge-dark badge-pill"><?= $soap['grammage'] . " " . $soap['unite'] ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Pagination Area Start -->
        </div>
        <div class="container m-4">
            <div class="academy-pagination-area wow fadeInUp my-4" data-wow-delay="400ms">
                <nav>
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $totalPageSoap; $i++) : ?>
                            <li class="page-item <?php if ($curentPage == $i) echo "active" ?>">
                                <?php if ($curentPage == $i) : ?>
                                    <a class="page-link"><?= $i ?></a>
                                <?php else : ?>
                                    <a class="page-link" href="./savons&ps=<?= $i ?>"><?= $i ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
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
    <!-- LIGHTBOX -->
    <script src="<?= ASSETS ?>libs/lightbox2-2.11.3/js/lightbox.min.js"></script>

</body>

</html>