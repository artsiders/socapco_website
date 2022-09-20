<div class="container">
    <!-- partial:index.partial.html -->
    <div class="button-group filters-button-group">
        <a href="./produits&cat=<?= $cat ?>&eff=all">
            <button class="btn academy-btn btn-sm button <?php if ($eff == "all") echo "is-checked"; ?>">tout</button>
        </a>
        <?php foreach ($effects as $key => $effect) : ?>
            <a href="./produits&cat=<?= $cat ?>&eff=<?= $effect["eff_libele"] ?>">
                <button class="btn academy-btn btn-sm button <?php if ($eff == $effect["eff_libele"]) echo "is-checked"; ?>">
                    <?= $effect["eff_libele"] ?>
                </button>
            </a>
        <?php endforeach; ?>
    </div>

    <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <?php if (count($allProductsClientSide) != 0) : ?>
            <?php foreach ($allProductsClientSide as $key => $product) : ?>
                <article class="card_product_main wow fadeInUp" data-wow-delay="<?= $key + 2 ?>00ms">
                    <div onclick="link(`./product_detail&id=<?= $product['id_product'] ?>`)" class="image_box">
                        <img src="<?= ASSETS ?>images/product/<?= $product["picture"] ?>" class="img-responsive" />
                    </div>
                    <div class="body">
                        <h5><?= $product["name"] ?></h5>
                        <span class="badge badge-dark badge-pill"><?= $product["grammage"] ?> g</span>

                        <p><?= substr($product["description"], 0, 50) ?> ...</p>
                        <a href="./product_detail&id=<?= $product["id_product"] ?>" class="btn academy-btn btn-sm">voir
                            plus</a>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="text-center col-12 h4 m-4 p-4 bg-overlay text-light">pas de produit <?= $eff ?> pour <?= $cat ?> disponible
                <br /> pour le moment. <br />
                <a href="./produits&cat=<?= $cat; ?>" class="btn academy-btn m-4" data-animation="fadeInUp" data-delay="1500ms">
                    voir d'autre produits
                </a>
            </div>
        <?php endif; ?>
    </section>
    <div class="container m-4">
        <div class="academy-pagination-area my-4">
            <nav>
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                        <li class="page-item <?php if ($curentPage == $i) echo "active" ?>">
                            <?php if ($curentPage == $i) : ?>
                                <a class="page-link"><?= $i ?></a>
                            <?php else : ?>
                                <a class="page-link" href="./produits&cat=<?= $cat ?>&pc=<?= $i ?>&eff=<?= $eff ?>"><?= $i ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

    <!-- partial -->
    <script src='<?= ASSETS ?>libs/galery/jquery.min.js'></script>
    <script src='<?= ASSETS ?>libs/galery/masonry.min.min.js'>
    </script>
    <script src='<?= ASSETS ?>libs/galery/isotope.min.js'>
    </script>
    <script src="<?= ASSETS ?>js/galery.js" default></script>

</div>