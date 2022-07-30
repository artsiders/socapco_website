<!DOCTYPE html>
<html lang="en">

<head>

     <title>socapco - à propos</title>
     <?php include_once VIEW . "partials/_head.php" ?>
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
                         <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
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
                                   <img src="<?= ASSETS ?>/images/post-4d0925278b5484b8a6236cb952a63bbb9ea09391d6101391c8faed70.webp" class="img-responsive" alt="Blog Image">
                              </div>
                              <h2>Faisons connaissances maintenant</h2>
                              <p>
                                   Dans l’optique d’apporter aux Cameroun en particulier et à l’Afrique en general, les solutions cosmétiques adaptées à leurs besoins, la Société Camerounaise des Produits Cosmétiques (SOCAPCO) voit le jour en 2013 et s’implante à Bafoussam. Etant donné que chaque être humain est beau à sa maniere, notre souci c’est votre bien-être car l’espèce humain est au coeur de notre passion.
                              </p>

                              <h3>MOTIVATION</h3>
                              <p>
                                   Rendre la beaute accessible à tous est notre motivation, voilà pourquoi la Socapco s’est assignée la mission d’améliorer, d’enrichir et de capitaliser la beauté des peaux noires et metissées. D’avancer en mettant la ressource humaine et le management de qualité au cœur du metier afin d’offrir les produits de qualité au meilleur prix. L’objectif etant ainsi d’offrir des produits de meilleures qualités grâce à la mise sur pied de notre politique d’innovation permanente.
                              </p>

                              <h3>EQUIPE</h3>
                              <p>
                                   Nous sommes passionnés par ce que nous faisons et c’est ce qui nous pousse à toujours entreprendre et s’améliorer. Constituée à 70% des jeunes et dynamique, la Socapco pense que les jeunes d’aujourd’hui sont l’Afrique de demain. C’est en des idées fulgurantes et des strategies des plus aiguisées, que repose l’un des fondements de l’entreprise. Parce que l’industrie de la beauté étant en réforme permanente, s’adapter est le maître mot pour s’y imposer et surtout y faire perdurer son leadership.
                              </p>

                              <div class="blog-social-share">
                                   <h4>nous contactez</h4>
                                   <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>facebook</a>
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
                                                       <a href="#">Forgot your password?</a>
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
</body>

</html>