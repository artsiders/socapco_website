<!DOCTYPE html>
<html lang="en">

<head>
     <title>Socapco - website</title>
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

                              <strong>Web Design</strong>
                              <span class="pull-right">85%</span>
                              <div class="progress">
                                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                              </div>

                              <strong>Photography</strong>
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
                              <h2>Our Blog</h2>
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
                                   <small><i class="fa fa-clock-o"></i> December 22, 2017</small>
                                   <h3><a href="./detail">How To Find Out Beautiful Workspace.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">Read article</a>
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
                                   <small><i class="fa fa-clock-o"></i> December 18, 2017</small>
                                   <h3><a href="./detail">woman sportwear.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">Read more</a>
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
                                   <small><i class="fa fa-clock-o"></i> December 14, 2017</small>
                                   <h3><a href="./detail">new creative fashion.</a></h3>
                                   <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                   <a href="./detail" class="btn section-btn">Read article</a>
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
                                   <small><i class="fa fa-clock-o"></i> December 10, 2017</small>
                                   <h3><a href="./detail">minimalist design trend in 2018.</a></h3>
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
                              <h2>Our work</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image1.jpg" class="image-popup">
                                   <img src="<?= ASSETS ?>images/work-image1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Clean &amp; Minimal</h3>
                                        <small>Product Design</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image2.jpg" class="image-popup">
                                   <img src="<?= ASSETS ?>images/work-image4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Studio Bag</h3>
                                        <small>Branding</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image3.jpg" class="image-popup">
                                   <img src="<?= ASSETS ?>images/work-image3.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Frame Design</h3>
                                        <small>Photography</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image4.jpg" class="image-popup">
                                   <img src="<?= ASSETS ?>images/work-image4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Paint Work</h3>
                                        <small>Art, Design</small>
                                   </div>
                              </a>
                         </div>
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

     <!-- SCRIPTS -->
     <script src="<?= ASSETS ?>js/jquery.js"></script>
     <script src="<?= ASSETS ?>js/bootstrap.min.js"></script>
     <script src="<?= ASSETS ?>js/jquery.stellar.min.js"></script>
     <script src="<?= ASSETS ?>js/jquery.magnific-popup.min.js"></script>
     <script src="<?= ASSETS ?>js/smoothscroll.js"></script>
     <script src="<?= ASSETS ?>js/custom.js"></script>
     <script src="<?= ASSETS ?>js/animate.js"></script>
     <script src="<?= ASSETS ?>js/animation.js"></script>

</body>

</html>