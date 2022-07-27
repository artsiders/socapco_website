<!DOCTYPE html>
<html lang="en">

<head>

     <title>socapco - à propos</title>
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


     <!-- BLOG DETAIL -->
     <section id="blog-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <!-- BLOG THUMB -->
                         <div class="blog-detail-thumb">
                              <div class="blog-image">
                                   <img src="images/blog-detail-image.jpg" class="img-responsive" alt="Blog Image">
                              </div>
                              <h2>What makes you happy everyday?</h2>
                              <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus
                                   augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.
                                   Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus
                                   purus augue vulputate voluptate neque</p>

                              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quisquam,
                                   aut, eum, natus excepturi impedit ipsa rerum ratione id dolores ducimus minus eos
                                   veniam similique.</blockquote>

                              <p>Vivamus quis velit sed ante suscipit aliquam nec sed ex. Maecenas porta leo at mi
                                   suscipit congue. Donec ipsum metus, tristique eu leo ut, luctu Vivamus sit amet purus
                                   nec risus mollis tempor.</p>

                              <div class="blog-ads">
                                   <h4>Blog Sample Advertising</h4>
                              </div>

                              <ul>
                                   <li>Brand Identity ipsum dolor eget vestibulum justo imper diet.</li>
                                   <li>Social Marketing porta leo at mi suscipit congue. Donec ipsum metus, tristique
                                        leo luctus.</li>
                                   <li>Wordpress Themes augue vulputate voluptate neque, curabitur dolor vitae massa.
                                   </li>
                              </ul>
                              <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus
                                   augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.</p>
                              <div class="blog-social-share">
                                   <h4>Share this article</h4>
                                   <a href="https://www.facebook.com/templatemo" class="btn btn-primary"><i class="fa fa-facebook"></i>facebook</a>
                                   <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>twitter</a>
                                   <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>google plus</a>
                              </div>
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