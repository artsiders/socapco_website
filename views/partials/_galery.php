<div class="container">
    <!-- partial:index.partial.html -->
    <div class="button-group filters-button-group">
        <!-- <button class="btn academy-btn btn-sm is-checked" data-filter="*">all</button> -->
        <?php foreach ($gammes as $key => $gamme) : ?>
        <button class="btn academy-btn btn-sm button"
            data-filter=".<?= $gamme["id_gamme"] ?>"><?= $gamme["gam_libele"] ?></button>
        <?php endforeach; ?>
    </div>

    <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <?php foreach ($allProducts as $key => $product) : ?>
        <article class="card_product_main <?= $product["id_gamme"] ?>">
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

    <?php foreach ($allProducts as $key => $product) : ?>
    <div class="wow d-none fadeInUp card_product_main filter-<?= $gamme["id_gamme"] ?>" data-wow-delay="400ms">
        <div class="image_box">
            <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" alt="">
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
    </div>
    <?php endforeach; ?>
    <!-- partial -->
    <script src='<?= ASSETS ?>libs/galery/jquery.min.js'></script>
    <script src='<?= ASSETS ?>libs/galery/masonry.min.min.js'>
    </script>
    <script src='<?= ASSETS ?>libs/galery/isotope.min.js'>
    </script>
    <script src="<?= ASSETS ?>js/galery.js" default></script>

</div>