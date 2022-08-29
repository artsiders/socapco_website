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
                            <li class="d-none pages">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li class="<?php if ($this->request == "contact") echo "active" ?>">
                                        <a href="./contact">Contacts</a>
                                    </li>
                                    <li class="<?php if ($this->request == "about") echo "active" ?>">
                                        <a href="./about">A Propos</a>
                                    </li>
                                    <li><a href="#">Course</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Elements</a></li>
                                </ul>
                            </li>
                            <li class="<?php if ($cat == "adultes") echo "active" ?>"><a href="./produits&cat=adultes">adulte</a>
                                <div class="megamenu">
                                    <div class="content_menu row">
                                        <div class="single-mega box_image col-lg-4 col-sm-12">
                                            <img src="<?= ASSETS ?>images/product/5.png" alt="">
                                        </div>
                                        <ul class="col">
                                            <li>
                                                <a href="./produits&cat=adultes">
                                                    <button class="btn academy-btn">toute la gamme adultes</button>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="single-mega list col">
                                            <?php foreach ($effects as $key => $effect) : ?>
                                                <li><a href="#"><?= $effect["eff_libele"] ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </li>
                            <?php isset($_GET['cat']) ? $cat = $_GET['cat'] : $cat = ""; ?>
                            <li class="<?php if ($cat == "enfants") echo "active" ?>">
                                <a href="./produits&cat=enfants">enfant</a>
                            </li>
                            <li class="<?php if ($cat == "bebes") echo "active" ?>">
                                <a href="./produits&cat=bebes">bébé</a>
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
                        <a href="tel:+237000000000">
                            <i class="fa fa-whatsapp"></i>
                            <span>(+237) 000 000 000</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>