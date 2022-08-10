<?php
require_once MODEL . "Produit.php";

$products = new products;

try {
     $products = $products->readAll();
} catch (EXCEPTION $e) {
     echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="description" content="">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <!-- Title -->
     <title>socapco | Accueil</title>

     <!-- Favicon -->
     <link rel="icon" href="<?= ASSETS ?>images/core-img/favicon.ico">

     <!-- Core Stylesheet -->
     <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">
     <!-- Core Stylesheet -->
     <link rel="stylesheet" href="<?= ASSETS ?>libs/swiper/swiper-bundle.min.css">

</head>

<body>
     <!-- ##### Preloader ##### -->
     <div id="preloader">
          <i class="circle-preloader"></i>
     </div>

     <!-- ##### Header Area Start ##### -->
     <header class="header-area">

          <!-- Top Header Area -->
          <?php include_once VIEW . "partials/_top_header.php" ?>

          <!-- Navbar Area -->
          <?php include_once VIEW . "partials/_navigation.php" ?>
     </header>
     <!-- ##### Header Area End ##### -->

     <!-- ##### Hero Area Start ##### -->
     <section class="hero-area">
          <div class="hero-slides owl-carousel">

               <!-- Single Hero Slide -->
               <div class="single-hero-slide bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                         <div class="row h-100 align-items-center">
                              <div class="col-12">
                                   <div class="hero-slides-content text-center">
                                        <h4 data-animation="fadeInUp" data-delay="100ms">faites vous plaisir, <br> sentez vous belle et légère avec les produits de la gamme </h4>
                                        <h2 data-animation="fadeInUp" data-delay="400ms"> BELLE FACE <br> ECLAIRCISSANT
                                        </h2>
                                        <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Découvrez tous nos produits</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <!-- Single Hero Slide -->
               <div class="single-hero-slide bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                         <div class="row h-100 align-items-center">
                              <div class="col-12">
                                   <div class="hero-slides-content text-center">
                                        <h4 data-animation="fadeInUp" data-delay="100ms">Faites plaisir à votre peaux,
                                             <br> Essayez le nouveau blanchisseur .
                                        </h4>
                                        <h2 data-animation="fadeInUp" data-delay="400ms">belle face <br>éclaircissement
                                        </h2>
                                        <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Nos produits</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ##### Hero Area End ##### -->

     <!-- ##### Top Feature Area Start ##### -->
     <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="features-content">
                              <div class="row no-gutters">
                                   <!-- Single Top Features -->
                                   <div class="col-12 col-md-4">
                                        <div class="single-top-features d-flex align-items-center justify-content-center">
                                             <a href="https://web.facebook.com/socapco/"><i class="fa fa-facebook-square"></i></a>
                                        </div>
                                   </div>
                                   <!-- Single Top Features -->
                                   <div class="col-12 col-md-4">
                                        <div class="single-top-features d-flex align-items-center justify-content-center">
                                             <a href="mailto:Service_client@socapco.com"><i class="fa fa-envelope"></i></a>
                                        </div>
                                   </div>
                                   <!-- Single Top Features -->
                                   <div class="col-12 col-md-4">
                                        <div class="single-top-features d-flex align-items-center justify-content-center">
                                             <a href="tel:+237000000000"><i class="icon-telephone-3"></i></a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### Top Feature Area End ##### -->

     <!-- card -->
     <h2 class="text-center mb-0 mt-4 mx-auto wow fadeInUp" data-wow-delay="300ms">Nos Produits</h2>

     <div class="row d-flex justify-content-center">
          <div class="slide-container swiper p-4 col-12">
               <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                         <div class="card_product swiper-slide">
                              <div class="imgBox">
                                   <img src="<?= ASSETS ?>images/about-image.png" alt="product" class="mouse">
                              </div>

                              <div class="contentBox">
                                   <h3>Nom Produit</h3>
                                   <h2 class="price">gamme</h2>
                                   <a href="#" class="buy">voir plus</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="swiper-button-next swiper-navBtn"></div>
               <div class="swiper-button-prev swiper-navBtn"></div>
               <div class="swiper-pagination"></div>
          </div>
     </div>
     <!-- end card -->

     <!-- ##### Course Area Start ##### -->
     <div class="academy-courses-area section-padding-100-0">
          <div class="container">
               <div class="row">
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                              <div class="course-icon">
                                   <i class="icon-id-card"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Business School</h4>
                                   <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                              </div>
                         </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                              <div class="course-icon">
                                   <i class="icon-worldwide"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Marketing</h4>
                                   <p>Lacinia, lacinia la cus non, fermen tum nisi.</p>
                              </div>
                         </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                              <div class="course-icon">
                                   <i class="icon-map"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Photography</h4>
                                   <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                              </div>
                         </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                              <div class="course-icon">
                                   <i class="icon-like"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Social Media</h4>
                                   <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                              </div>
                         </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                              <div class="course-icon">
                                   <i class="icon-responsive"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Development</h4>
                                   <p>Lacinia, lacinia la cus non, fermen tum nisi.</p>
                              </div>
                         </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                         <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                              <div class="course-icon">
                                   <i class="icon-message"></i>
                              </div>
                              <div class="course-content">
                                   <h4>Design</h4>
                                   <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### Course Area End ##### -->

     <!-- ##### Testimonials Area Start ##### -->
     <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?= ASSETS ?>images/bg-img/bg-2.jpg);">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                              <span>our testimonials</span>
                              <h3>See what our satisfied customers are saying about us</h3>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                         <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                              <div class="testimonial-thumb">
                                   <img src="<?= ASSETS ?>images/bg-img/t1.jpg" alt="">
                              </div>
                              <div class="testimonial-content">
                                   <h5>Great teachers</h5>
                                   <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus
                                        blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et
                                        tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic
                                        iturut magna.</p>
                                   <h6><span>Maria Smith,</span> Student</h6>
                              </div>
                         </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                         <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                              <div class="testimonial-thumb">
                                   <img src="<?= ASSETS ?>images/bg-img/t2.jpg" alt="">
                              </div>
                              <div class="testimonial-content">
                                   <h5>Easy and user friendly courses</h5>
                                   <p>Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus
                                        blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et
                                        tellus blandit. Etiam nec odio vestibul.</p>
                                   <h6><span>Shawn Gaines,</span> Student</h6>
                              </div>
                         </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                         <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                              <div class="testimonial-thumb">
                                   <img src="<?= ASSETS ?>images/bg-img/t3.jpg" alt="">
                              </div>
                              <div class="testimonial-content">
                                   <h5>I just love the courses here</h5>
                                   <p>Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit.
                                        Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.
                                        Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.</p>
                                   <h6><span>Ross Cooper,</span> Student</h6>
                              </div>
                         </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                         <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                              <div class="testimonial-thumb">
                                   <img src="<?= ASSETS ?>images/bg-img/t4.jpg" alt="">
                              </div>
                              <div class="testimonial-content">
                                   <h5>One good academy</h5>
                                   <p>Vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam
                                        nec odio vestibul. Etiam nec odio vestibu lum est mat tis effic iturut magna.
                                        Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul. Etiam nec odio
                                        vestibulum est mat tis effic iturut magnaNec odio vestibulum est mattis effic iturut
                                        magna.</p>
                                   <h6><span>James Williams,</span> Student</h6>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-12">
                         <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                              <a href="#" class="btn academy-btn">See More</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### Testimonials Area End ##### -->

     <!-- ##### Top Popular Courses Area Start ##### -->
     <div class="top-popular-courses-area section-padding-100-70">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                              <span>The Best</span>
                              <h3>Top Popular Courses</h3>
                         </div>
                    </div>
               </div>
               <div class="row">

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                              <div class="popular-course-content">
                                   <h5>Business for begginers</h5>
                                   <span>By Simon Smith | March 18, 2018</span>
                                   <div class="course-ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                   </div>
                                   <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est,
                                        in euismod.</p>
                                   <a href="#" class="btn academy-btn btn-sm">See More</a>
                              </div>
                              <div class="popular-course-thumb bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/pc-1.jpg);">
                              </div>
                         </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                              <div class="popular-course-content">
                                   <h5>Advanced HTML5</h5>
                                   <span>By Simon Smith | March 18, 2018</span>
                                   <div class="course-ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                   </div>
                                   <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est,
                                        in euismod.</p>
                                   <a href="#" class="btn academy-btn btn-sm">See More</a>
                              </div>
                              <div class="popular-course-thumb bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/pc-2.jpg);">
                              </div>
                         </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                              <div class="popular-course-content">
                                   <h5>Marketing 101</h5>
                                   <span>By Simon Smith | March 18, 2018</span>
                                   <div class="course-ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                   </div>
                                   <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est,
                                        in euismod.</p>
                                   <a href="#" class="btn academy-btn btn-sm">See More</a>
                              </div>
                              <div class="popular-course-thumb bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/pc-3.jpg);">
                              </div>
                         </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                         <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                              <div class="popular-course-content">
                                   <h5>Business for begginers</h5>
                                   <span>By Simon Smith | March 18, 2018</span>
                                   <div class="course-ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                   </div>
                                   <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est,
                                        in euismod.</p>
                                   <a href="#" class="btn academy-btn btn-sm">See More</a>
                              </div>
                              <div class="popular-course-thumb bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/pc-4.jpg);">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### Top Popular Courses Area End ##### -->

     <!-- ##### Partner Area Start ##### -->
     <div class="partner-area section-padding-0-100">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                              <a href="#"><img src="<?= ASSETS ?>images/clients-img/partner-1.png" alt=""></a>
                              <a href="#"><img src="<?= ASSETS ?>images/clients-img/partner-2.png" alt=""></a>
                              <a href="#"><img src="<?= ASSETS ?>images/clients-img/partner-3.png" alt=""></a>
                              <a href="#"><img src="<?= ASSETS ?>images/clients-img/partner-4.png" alt=""></a>
                              <a href="#"><img src="<?= ASSETS ?>images/clients-img/partner-5.png" alt=""></a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### Partner Area End ##### -->

     <!-- ##### CTA Area Start ##### -->
     <div class="call-to-action-area">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                              <h3>Do you want to enrole at our Academy? Get in touch!</h3>
                              <a href="#" class="btn academy-btn">See More</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- ##### CTA Area End ##### -->

     <!-- ##### Footer Area Start ##### -->
     <?php include_once VIEW . "partials/_footer.php" ?>
     <!-- ##### Footer Area Start ##### -->

     <!-- ##### All Javascript Script ##### -->
     <!-- jQuery-2.2.4 js -->
     <script src="<?= ASSETS ?>libs/jquery/jquery-2.2.4.min.js"></script>
     <!-- Popper js -->
     <script src="<?= ASSETS ?>libs/bootstrap/js/popper.min.js"></script>
     <!-- Bootstrap js -->
     <script src="<?= ASSETS ?>libs/bootstrap/js/bootstrap.min.js"></script>
     <!-- All Plugins js -->
     <script src="<?= ASSETS ?>libs/plugins/plugins.js"></script>
     <!-- Active js -->
     <script src="<?= ASSETS ?>libs/active.js"></script>
     <!-- slider  -->
     <script src="<?= ASSETS ?>libs/swiper/swiper-bundle.min.js"></script>
     <script src="<?= ASSETS ?>js/slider.js"></script>
</body>

</html>