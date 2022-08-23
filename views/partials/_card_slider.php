<?php
require_once MODEL . "Produit.php";

$products = new products;

try {
    $products = $products->readAllImportant();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

?>



<div class="row d-flex justify-content-center mb-4">
    <div class="slide-container swiper p-4 col-12">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php foreach ($products as $key => $product) : ?>
                    <div class="card_product swiper-slide  wow bounceIn" data-wow-delay="<?= $key + 2 ?>00ms">
                        <div class="imgBox">
                            <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" alt="product" class="mouse">
                        </div>

                        <div class="contentBox">
                            <h3><?= $product["name"] ?></h3>
                            <h2 class="price"><?= $product["gam_libele"] ?></h2>
                            <a href="./product_detail&id=<?= $product["id_product"] ?>" class="buy">voir plus</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="row d-flex justify-content-center my-4">
    <a href="./produits" class="btn academy-btn">Nos produits hydratent</a>
</div>