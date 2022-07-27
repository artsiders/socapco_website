<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="" class="navbar-brand">Socapco</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="<?php if ($this->request == "home" || $this->request == "") echo "active" ?>"><a href="./home" class="smoothScroll">Home</a></li>
                <li class="<?php if ($this->request == "about") echo "active" ?>"><a href="./about" class="smoothScroll">About</a></li>
                <li class="<?php if ($this->request == "blog") echo "active" ?>"><a href="./blog" class="smoothScroll">Blog</a></li>
                <li class="<?php if ($this->request == "work") echo "active" ?>"><a href="./work" class="smoothScroll">Our Work</a></li>
                <li class="<?php if ($this->request == "contact") echo "active" ?>"><a href="./contact" class="smoothScroll">Contacts</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in /
                        Join</a></li>
            </ul>
        </div>

    </div>
</section>