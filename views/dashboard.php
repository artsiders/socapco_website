<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS ?>images/favicon.png">
    <title>Socapco - admin</title>

    <!-- Custom CSS -->
    <link href="<?= ASSETS ?>dist/css/style.css" rel="stylesheet">

    <link href="<?= ASSETS ?>libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="./admin">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= ASSETS ?>images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?= ASSETS ?>images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= ASSETS ?>images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?= ASSETS ?>images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="fa fa-bars fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= ASSETS ?>images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated fadeInRight">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="<?= ASSETS ?>images/uploads/<?= $_SESSION["socapco_admin"]["picture"] ?>" alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?= $_SESSION["socapco_admin"]["login"] ?></h4>
                                        <p class=" m-b-0"><?= $_SESSION["socapco_admin"]["email"] ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./admin&page=list_user">
                                    <i class="fa fa-cog m-r-5 m-l-5"></i>parametre du compte</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item log_out" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i>se déconnecter</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-20">
                                <div class="user-pic">
                                    <img src="<?= ASSETS ?>images/uploads/<?= $_SESSION["socapco_admin"]["picture"] ?>" alt="users" class="rounded-circle img-fluid" />
                                </div>
                                <div class="user-content hide-menu m-t-10">
                                    <h5 class="m-b-10 user-name font-medium"><?= $_SESSION["socapco_admin"]["login"] ?>
                                    </h5>
                                    <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm log_out">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                    <div class="dropdown-menu animated  fadeInUp " aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="./admin&page=list_user">
                                            <i class="fa fa-cog m-r-5 m-l-5"></i>parametre du compte</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item log_out" href="javascript:void(0)">
                                            <i class="fa fa-power-off m-r-5 m-l-5"></i>se déconnecter</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <?php isset($_GET['page']) ? $page = $_GET['page'] : $page = ""; ?>
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fab fa-product-hunt"></i>
                                <span class="hide-menu">Cosméthique</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item <?php if ($page == 'product' || $page == '') echo "active"; ?>">
                                    <a href="./admin" class="sidebar-link">
                                        <i class="fas fa-circle"></i>
                                        <span class="hide-menu"> produits </span>
                                    </a>
                                </li>
                                <li class="sidebar-item <?php if ($page == 'gamme') echo "active"; ?>">
                                    <a href="./admin&page=gamme" class="sidebar-link">
                                        <i class="fas fa-circle"></i>
                                        <span class="hide-menu"> gammes </span>
                                    </a>
                                </li>
                                <li class="sidebar-item <?php if ($page == 'effect') echo "active"; ?>">
                                    <a href="./admin&page=effect" class="sidebar-link">
                                        <i class="fas fa-circle"></i>
                                        <span class="hide-menu"> effets </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <span class="hide-menu">utilisateur</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item <?php if ($page == 'list_user') echo "active"; ?>">
                                    <a href="./admin&page=list_user" class="sidebar-link">
                                        <i class="fas fa-circle"></i>
                                        <span class="hide-menu"> liste </span>
                                    </a>
                                </li>
                                <li class="sidebar-item <?php if ($page == 'add_user') echo "active"; ?>">
                                    <a href="./admin&page=add_user" class="sidebar-link">
                                        <i class="fas fa-circle"></i>
                                        <span class="hide-menu"> ajouter </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" id="btnDiconect" aria-expanded="false">
                                <i class="fa fa-sign-out-alt"></i>
                                <span class="hide-menu"> se déconnecter </span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <!-- code list bar -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <?php include_once VIEW . "partials/_notification.php"; ?>
                    </div>
                    <div class="col-12">
                        <!-- Column -->
                        <?php
                        switch ($page) {
                            case '':
                                require_once VIEW . "partials/admin/_list_products.php";
                                break;
                            case 'product':
                                require_once VIEW . "partials/admin/_list_products.php";
                                break;
                            case 'gamme':
                                require_once VIEW . "partials/admin/_list_gamme.php";
                                break;
                            case 'effect':
                                require_once VIEW . "partials/admin/_list_effect.php";
                                break;
                            case 'add_user':
                                if ($_SESSION['socapco_admin']["is_admin"] >= 1) {
                                    require_once VIEW . "partials/admin/_add_user.php";
                                } else {
                        ?>
                                    <div class="container">
                                        <h1 class="h2 text-center">seulement pour les admins</h1>
                                    </div>
                        <?php
                                }
                                break;
                            case 'list_user':
                                require_once VIEW . "partials/admin/_list_user.php";
                                break;

                            default:
                                require_once VIEW . "partials/admin/_404.php";
                                break;
                        }
                        ?>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                                <option value="inverse">Inverse</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by admin. Designed and Developed by <a href="https://alt-plus.batisseurs-unis.cm">Alt plus</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= ASSETS ?>libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= ASSETS ?>extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="<?= ASSETS ?>extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= ASSETS ?>libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= ASSETS ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?= ASSETS ?>dist/js/app.min.js"></script>
    <script src="<?= ASSETS ?>dist/js/app.init.js"></script>
    <script src="<?= ASSETS ?>dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= ASSETS ?>libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= ASSETS ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= ASSETS ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= ASSETS ?>dist/js/custom.min.js"></script>

    <script src="<?= ASSETS ?>libs/footable/dist/footable.all.min.js"></script>
    <script src="<?= ASSETS ?>js/deconnexion.js"></script>
    <!--This page JavaScript -->
    <script src="<?= ASSETS ?>extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?= ASSETS ?>dist/js/pages/datatable/datatable-basic.init.js"></script>

    <script defer>
        $(document).ready(function() {
            $('#demo-foo-addrow').DataTable();
        });
    </script>
</body>

</html>