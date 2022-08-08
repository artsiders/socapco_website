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
     <title>Socapco - website</title>
     <?php include_once VIEW . "partials/_head.php" ?>
</head>

<body>

     <!-- PRE LOADER -->
     <?php include_once VIEW . 'partials/_pre_loader.php' ?>


     <!-- MENU -->
     <?php include_once VIEW . 'partials/_navigation.php' ?>



     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                              <a href="#about" class="btn section-btn smoothScroll">visitez</a>
                              <span>
                                   CONTACTEZ NOUS (+237) 000-000-000
                                   <small>pour passer commande</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <!-- <iframe src="https://www.youtube.com/embed/AqcjdkPMPJA" frameborder="0"
                                        allowfullscreen></iframe> -->
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Let us introduce</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="about-info skill-thumb">

                              <strong>text simple</strong>
                              <span class="pull-right">text</span>
                              <div class="progress">
                                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                              </div>

                              <strong>test</strong>
                              <span class="pull-right">90%</span>
                              <div class="progress">
                                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                              </div>

                              <strong>Content Marketing</strong>
                              <span class="pull-right">75%</span>
                              <div class="progress">
                                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                              </div>

                              <strong>CMS Admin</strong>
                              <span class="pull-right">70%</span>
                              <div class="progress">
                                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="<?= ASSETS ?>images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>



     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>departement</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="./detail"><img src="<?= ASSETS ?>images/blog-image1.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-clock-o"></i> text simple</small>
                                   <h3><a href="./detail">Lorem ipsum dolor sit amet.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">plus</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="./detail"><img src="<?= ASSETS ?>images/blog-image2.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-clock-o"></i> text simple</small>
                                   <h3><a href="./detail">Lorem ipsum dolor sit amet..</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">plus</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="./detail"><img src="<?= ASSETS ?>images/blog-image3.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-clock-o"></i> text simple</small>
                                   <h3><a href="./detail">Lorem ipsum dolor sit amet.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">plus</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href="./detail"><img src="<?= ASSETS ?>images/blog-image4.jpg" class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <small><i class="fa fa-clock-o"></i> text simple</small>
                                   <h3><a href="./detail">Lorem ipsum dolor sit amet.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">View Detail</a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- WORK -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>produits</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <?php foreach ($products as $key => $product) : ?>
                         <div class="col-md-3 col-sm-6">
                              <!-- WORK THUMB -->
                              <div class="work-thumb">
                                   <a href="images/work-image1.jpg" class="image-popup">
                                        <img src="<?= ASSETS ?>images/uploads/<?= $product['picture'] ?>" class="img-responsive" alt="Work">

                                        <div class="work-info">
                                             <h3>Clean &amp; Minimal</h3>
                                             <small>Product Design</small>
                                        </div>
                                   </a>
                              </div>
                         </div>

                    <?php endforeach; ?>
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
                                             <h2>Socapco</h2>
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

</body>

</html>