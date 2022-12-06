<?php require_once VIEW . "globals.php"; ?>

<!-- Navbar Area -->
<div class="academy-main-menu nav_bar">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="academyNav">

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="<?php if ($this->request == "home" || $this->request == "") echo "active" ?>">
                                <a href="./home">Accueil</a>
                            </li>
                            <li class="<?php if ($cat == "adultes") echo "active" ?>"><a href="./produits&cat=adultes">adulte</a>
                                <div class="megamenu">
                                    <div class="content_menu row">
                                        <div class="single-mega box_image col-lg-3 col-sm-12">
                                            <img src="<?= ASSETS ?>images/blog-img/adult-cover.jpg" alt="">
                                        </div>
                                        <ul class="single-mega list col">
                                            <?php foreach ($effects as $key => $effect) : ?>
                                                <li>
                                                    <a href="./produits&cat=<?= $cat ?>&eff=<?= $effect["eff_libele"] ?>"><?= $effect["eff_libele"] ?></a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <ul class="col">
                                            <li>
                                                <a href="./produits&cat=adultes">
                                                    <button class="btn academy-btn">tous les produits</button>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="single-mega box_image col-lg-3 col-sm-12 d-flex justify-content-center">
                                            <img style="max-height: 250px;" src="<?= ASSETS ?>images/menu_image.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php isset($_GET['cat']) ? $cat = $_GET['cat'] : $cat = "all"; ?>
                            <li class="<?php if ($cat == "enfants") echo "active" ?>">
                                <a href="./produits&cat=enfants">enfant</a>
                            </li>
                            <li class="<?php if ($cat == "bebes") echo "active" ?>">
                                <a href="./produits&cat=bebes">bébé</a>
                            </li>
                            <li class="<?php if ($this->request == "savons") echo "active" ?>">
                                <a href="./savons">savons</a>
                            </li>
                            <li class="<?php if ($this->request == "services") echo "active" ?>">
                                <a href="./services">nos services</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>

                <!-- Calling Info -->
                <div class="calling-info">
                    <div class="call-center">
                        <a href="tel:+237650842071">
                            <i class="fa fa-phone"></i>
                            <span>(+237) 650 84 20 71</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>