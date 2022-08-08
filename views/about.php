<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="description" content="">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <!-- Title -->
     <title>socapco | A propos</title>

     <!-- Favicon -->
     <link rel="icon" href="<?= ASSETS ?>images/core-img/favicon.ico">

     <!-- Core Stylesheet -->
     <link rel="stylesheet" href="<?= ASSETS ?>scss/style.css">

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

     <!-- ##### Breadcumb Area Start ##### -->
     <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>images/bg-img/breadcumb.jpg);">
          <div class="bradcumbContent">
               <h2>Apropos de nous</h2>
          </div>
     </div>
     <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### About Us Area Start ##### -->
     <section class="about-us-area mt-50 section-padding-100">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                              <span>The Best</span>
                              <h3>We are the Academy</h3>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                         <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in
                              euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae
                              urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam
                              tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis
                              ornare hendrerit. Maecenas sodales suscipit ipsum.</p>
                    </div>
                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                         <p>Vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.
                              Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna
                              consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam
                              tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis
                              ornare hendrerit. Maecenas sodales suscipit ipsum.</p>
                    </div>
               </div>
               <div class="row">
                    <div class="col-12">
                         <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                              <img src="<?= ASSETS ?>images/bg-img/bg-3.jpg" alt="">
                              <img src="<?= ASSETS ?>images/bg-img/bg-2.jpg" alt="">
                              <img src="<?= ASSETS ?>images/bg-img/bg-1.jpg" alt="">
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ##### About Us Area End ##### -->

     <!-- ##### Team Area Start ##### -->
     <section class="teachers-area section-padding-0-100">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                              <span>The Best</span>
                              <h3>Meet the Teachers</h3>
                         </div>
                    </div>
               </div>

               <div class="row">
                    <!-- Single Teachers -->
                    <div class="col-12 col-sm-6 col-lg-3">
                         <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                              <!-- Thumbnail -->
                              <div class="teachers-thumbnail">
                                   <img src="<?= ASSETS ?>images/bg-img/tea1.jpg" alt="">
                              </div>
                              <!-- Meta Info -->
                              <div class="teachers-info mt-30">
                                   <h5>Maria D. Smith</h5>
                                   <span>Marketing Proffesor</span>
                              </div>
                         </div>
                    </div>
                    <!-- Single Teachers -->
                    <div class="col-12 col-sm-6 col-lg-3">
                         <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                              <!-- Thumbnail -->
                              <div class="teachers-thumbnail">
                                   <img src="<?= ASSETS ?>images/bg-img/tea2.jpg" alt="">
                              </div>
                              <!-- Meta Info -->
                              <div class="teachers-info mt-30">
                                   <h5>Simon Duval</h5>
                                   <span>Digital Proffesor</span>
                              </div>
                         </div>
                    </div>
                    <!-- Single Teachers -->
                    <div class="col-12 col-sm-6 col-lg-3">
                         <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                              <!-- Thumbnail -->
                              <div class="teachers-thumbnail">
                                   <img src="<?= ASSETS ?>images/bg-img/tea3.jpg" alt="">
                              </div>
                              <!-- Meta Info -->
                              <div class="teachers-info mt-30">
                                   <h5>James Hogan</h5>
                                   <span>HTML Proffesor</span>
                              </div>
                         </div>
                    </div>
                    <!-- Single Teachers -->
                    <div class="col-12 col-sm-6 col-lg-3">
                         <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                              <!-- Thumbnail -->
                              <div class="teachers-thumbnail">
                                   <img src="<?= ASSETS ?>images/bg-img/tea4.jpg" alt="">
                              </div>
                              <!-- Meta Info -->
                              <div class="teachers-info mt-30">
                                   <h5>Claudia Williams</h5>
                                   <span>Marketing Proffesor</span>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="row">
                    <div class="col-12">
                         <div class="view-all text-center wow fadeInUp" data-wow-delay="800ms">
                              <a href="#" class="btn academy-btn">All Teachers</a>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ##### Features Area Start ##### -->

     <!-- ##### Footer Area Start ##### -->
     <?php include_once VIEW . "partials/_footer.php" ?>

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
</body>

</html>