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
                            <li><a href="./produits&cat=adultes">adult</a>
                                <div class="megamenu">
                                    <div class="content_menu row">
                                        <div class="single-mega box_image col-lg-4 col-sm-12">
                                            <img src="<?= ASSETS ?>images/product/5.png" alt="">
                                        </div>
                                        <ul class="single-mega list col">
                                            <?php foreach ($gammes as $key => $gamme) : ?>
                                            <li><a href="#"><?= $gamme["gam_libele"] ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <ul class="col">
                                            <li>
                                                <a href="./produits&cat=adultes">
                                                    <button class="btn academy-btn">toute la gamme adule</button>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="./produits&cat=enfants">enfant</a>
                                <div class="megamenu">
                                    <div class="content_menu row">
                                        <div class="single-mega box_image col-lg-4 col-sm-12">
                                            <img src="<?= ASSETS ?>images/product/20.png" alt="">
                                        </div>
                                        <ul class="single-mega list col">
                                            <?php foreach ($gammes as $key => $gamme) : ?>
                                            <li><a href="#"><?= $gamme["gam_libele"] ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <ul class="col">
                                            <li>
                                                <a href="./produits&cat=enfants">
                                                    <button class="btn academy-btn">
                                                        toute la gamme enfant
                                                    </button>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="./produits&cat=bébés">bébé</a>
                                <div class="megamenu">
                                    <div class="content_menu row">
                                        <div class="single-mega box_image col-lg-4 col-sm-12">
                                            <img src="<?= ASSETS ?>images/product/17.jpg" alt="">
                                        </div>
                                        <ul class="single-mega list col">
                                            <?php foreach ($gammes as $key => $gamme) : ?>
                                            <li><a href="#"><?= $gamme["gam_libele"] ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <ul class="col">
                                            <li>
                                                <a href="./produits&cat=bébés">
                                                    <button class="btn academy-btn">toute la gamme bébé</button>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="col"></div>
                                    </div>
                                </div>
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