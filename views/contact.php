<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="description" content="">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <!-- Title -->
     <title>socapco | contact</title>

     <!-- Favicon -->
     <link rel="icon" href="<?= ASSETS ?>img/core-img/favicon.ico">

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
     <div class="breadcumb-area bg-img" style="background-image: url(<?= ASSETS ?>img/bg-img/breadcumb.jpg);">
          <div class="bradcumbContent">
               <h2>Contact</h2>
          </div>
     </div>
     <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### Google Maps ##### -->
     <div class="map-area wow fadeInUp" data-wow-delay="300ms">
          <div id="googleMap"></div>
     </div>

     <!-- ##### Contact Area Start ##### -->
     <section class="contact-area">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="contact-content">
                              <div class="row">
                                   <!-- Contact Information -->
                                   <div class="col-12 col-lg-5">
                                        <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                             <div class="section-heading text-left">
                                                  <span>The Best</span>
                                                  <h3>Contact Us</h3>
                                                  <p class="mt-30">Lacinia, lacinia la cus non, fermen tum nisi. Donec et
                                                       sollicitudin. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed
                                                       faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut
                                                       in iaculis enim, et pulvinar mauris.</p>
                                             </div>

                                             <!-- Contact Social Info -->
                                             <div class="contact-social-info d-flex mb-30">
                                                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                  <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                                  <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                                  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                             </div>

                                             <!-- Single Contact Info -->
                                             <div class="single-contact-info d-flex">
                                                  <div class="contact-icon mr-15">
                                                       <i class="icon-placeholder"></i>
                                                  </div>
                                                  <p>4127/ 5B-C Mislane Road,<br> Gibraltar, UK</p>
                                             </div>

                                             <!-- Single Contact Info -->
                                             <div class="single-contact-info d-flex">
                                                  <div class="contact-icon mr-15">
                                                       <i class="icon-telephone-1"></i>
                                                  </div>
                                                  <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                                             </div>

                                             <!-- Single Contact Info -->
                                             <div class="single-contact-info d-flex">
                                                  <div class="contact-icon mr-15">
                                                       <i class="icon-contract"></i>
                                                  </div>
                                                  <p>office@yourbusiness.com</p>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- Contact Form Area -->
                                   <div class="col-12 col-lg-7">
                                        <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                             <form action="#" method="post">
                                                  <input type="text" class="form-control" id="name" placeholder="Name">
                                                  <input type="email" class="form-control" id="email" placeholder="E-mail">
                                                  <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                  <button class="btn academy-btn mt-30" type="submit">Contact Us</button>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ##### Contact Area End ##### -->

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
     <!-- Google Maps -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
     <script src="<?= ASSETS ?>libs/google-map/map-active.js"></script>
</body>

</html>