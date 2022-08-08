<!-- Navbar Area -->
<div class="academy-main-menu">
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
                            <li><a href="#">adults</a>
                                <div class="megamenu">
                                    <div class="single-mega cn-col-4">
                                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                                    </div>
                                    <div class="single-mega cn-col-4">
                                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                                    </div>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">enfants</a>
                                <div class="megamenu">
                                    <div class="single-mega cn-col-4">
                                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                                    </div>
                                    <div class="single-mega cn-col-4">
                                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                                    </div>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">bébés</a>
                                <div class="megamenu">
                                    <div class="single-mega cn-col-4">
                                        <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                                    </div>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services &amp; Features</a></li>
                                        <li><a href="#">Accordions and tabs</a></li>
                                        <li><a href="#">Menu ideas</a></li>
                                        <li><a href="#">Students Gallery</a></li>
                                    </ul>
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