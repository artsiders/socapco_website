<!DOCTYPE html>
<html lang="en">

<head>

     <title>socapco - contact</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= ASSETS ?>css/magnific-popup.css">
     <link rel="stylesheet" href="<?= ASSETS ?>css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?= ASSETS ?>css/templatemo-style.css">
</head>

<body>

     <!-- PRE LOADER -->
     <?php include_once VIEW . 'partials/_pre_loader.php' ?>


     <!-- MENU -->
     <?php include_once VIEW . 'partials/_navigation.php' ?>


     <!-- BLOG HEADER -->
     <section id="blog-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Do you Know What Thing Really Makes Artist Nowadays?</h2>
                    </div>

               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Contact us</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">

                         <!-- CONTACT FORM HERE -->
                         <form id="contact-form" role="form" action="#" method="post">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf-number" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <select class="form-control" id="cf-budgets" name="cf-budgets">
                                        <option>Budget Level</option>
                                        <option>$500 to $1,000</option>
                                        <option>$1,000 to $2,200</option>
                                        <option>$2,200 to $4,500</option>
                                        <option>$4,500 to $7,500</option>
                                        <option>$7,500 to $12,000</option>
                                        <option>$12,000 or more</option>
                                   </select>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <?php include_once VIEW . 'partials/_footer.php' ?>

     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Hydro Co</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                       <a href="https://www.facebook.com/templatemo">Forgot your
                                                            password?</a>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="<?= ASSETS ?>js/jquery.js"></script>
     <script src="<?= ASSETS ?>js/bootstrap.min.js"></script>
     <script src="<?= ASSETS ?>js/jquery.stellar.min.js"></script>
     <script src="<?= ASSETS ?>js/jquery.magnific-popup.min.js"></script>
     <script src="<?= ASSETS ?>js/smoothscroll.js"></script>
     <script src="<?= ASSETS ?>js/custom.js"></script>

</body>

</html>