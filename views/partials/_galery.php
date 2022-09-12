<div class="container">
    <!-- partial:index.partial.html -->
    <div class="button-group filters-button-group">
        <button class="btn academy-btn btn-sm button is-checked" data-filter="*">tout</button>
        <?php foreach ($effects as $key => $effect) : ?>
            <button class="btn academy-btn btn-sm button" data-filter=".<?= $effect["id_effect"] ?>"><?= $effect["eff_libele"] ?></button>
        <?php endforeach; ?>
    </div>

    <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <?php foreach ($allProducts as $key => $product) : ?>
            <article class="card_product_main <?= $product["id_effect"] ?>  wow bounceIn" data-wow-delay="<?= $key + 2 ?>00ms">
                <div onclick="link(`./product_detail&id=<?= $product['id_product'] ?>`)" class="image_box">
                    <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" class="img-responsive" />
                </div>
                <div class="body">
                    <h5><?= $product["name"] ?></h5>
                    <span class=" badge badge-dark badge-pill"><?= $product["grammage"] ?> g</span>

                    <p><?= substr($product["description"], 0, 50) ?> ...</p>
                    <a href="./product_detail&id=<?= $product["id_product"] ?>" class="btn academy-btn btn-sm">voir
                        plus</a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

    <!-- partial -->
    <script src='<?= ASSETS ?>libs/galery/jquery.min.js'></script>
    <script src='<?= ASSETS ?>libs/galery/masonry.min.min.js'>
    </script>
    <script src='<?= ASSETS ?>libs/galery/isotope.min.js'>
    </script>
    <script src="<?= ASSETS ?>js/galery.js" default></script>

</div>