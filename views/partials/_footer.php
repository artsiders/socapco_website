<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <a href="./home"><img src="<?= ASSETS ?>images/core-img/logo2.png" alt=""></a>
                        </div>
                        <p>
                            SOCAPCO, expert des peaux sensibles de toute la famille depuis plus de 90 ans vous partage ses conseils beauté.
                        </p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Menu</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li>
                                    <a href="./contact">Contacts</a>
                                </li>
                                <li>
                                    <a href="./about">A Propos</a>
                                </li>
                                <li>
                                    <a href="./savons">savons</a>
                                </li>
                                <li>
                                    <a href="./services">Services</aclass=>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Galerie</h6>
                        </div>
                        <div class="gallery-list d-flex justify-content-between flex-wrap">
                            <a href="<?= ASSETS ?>images/blog-img/1.png" class="gallery-img" title="Gallery Image 2"><img src="<?= ASSETS ?>images/blog-img/1.png" alt="">
                            </a>
                            <a href="<?= ASSETS ?>images/blog-img/2.png" class="gallery-img" title="Gallery Image 3"><img src="<?= ASSETS ?>images/blog-img/2.png" alt="">
                            </a>
                            <a href="<?= ASSETS ?>images/blog-img/3.png" class="gallery-img" title="Gallery Image 4"><img src="<?= ASSETS ?>images/blog-img/3.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>FCHF+W92, Bafoussam</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Principal: 650 84 20 71<br>Bureau: 699 37 9480</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>socapcocosmetiquesarl@yahoo.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This
                        website is made by <a href="http://alt-plus.batisseurs-unis.cm" target="_blank">Alt-plus</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script async src='<?= ASSETS ?>libs/embed.min.js'></script>
<script>
    let marginLeft
    let marginBottom
    if (window.matchMedia("(max-width: 800px)").matches) {
        marginLeft = 20
        marginBottom = 25
    } else {
        marginLeft = 50
        marginBottom = 56
    }
    var wa_btnSetting = {
        "btnColor": "#ff4545",
        "ctaText": "",
        "cornerRadius": 40,
        "marginBottom": marginBottom,
        "marginLeft": marginLeft,
        "marginRight": 50,
        "btnPosition": "left",
        "whatsAppNumber": "699379480",
        "welcomeMessage": "Bonjour à tous ! Quel plaisir de vous voir. dites nous si vous avez un problème",
        "zIndex": 999999,
        "btnColorScheme": "light"
    };
    var wa_widgetSetting = {
        "title": "Socapco",
        "subTitle": "réponse rapide",
        "headerBackgroundColor": "#ffb347",
        "headerColorScheme": "light",
        "greetingText": "Bonjour à tous ! Quel plaisir de vous voir.\nComment pouvons-nous vous aider?",
        "ctaText": "message",
        "btnColor": "#4ed073",
        "cornerRadius": 40,
        "welcomeMessage": "Hello",
        "btnColorScheme": "light",
        "brandImage": "<?= ASSETS ?>images/favicon.png",
        "darkHeaderColorScheme": {
            "title": "#333333",
            "subTitle": "#4F4F4F"
        }
    };
    window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
    };
</script>