<?php
class Routeur
{
    private $request;
    public function __construct($request)
    {
        $this->request = $request;
    }
    public function renderController()
    {
        if ($this->request == "home" || $this->request == "") {
            include VIEW . "home.php";
        } else if ($this->request == "detail") {
            include VIEW . "blog-detail.php";
        } else if ($this->request == "about") {
            include VIEW . "about.php";
        } else if ($this->request == "contact") {
            include VIEW . "contact.php";
        } else if ($this->request == "blog") {
            include VIEW . "blog.php";
        } else if ($this->request == "services") {
            include VIEW . "services.php";
        } else if ($this->request == "product_detail") {
            include VIEW . "product_detail.php";
        } else if ($this->request == "produits") {
            include VIEW . "products.php";
        }

        // route admin app
        else if ($this->request == "admin") {
            if (isset($_SESSION['socapco_admin']) and !empty($_SESSION['socapco_admin'])) {
                include VIEW . "dashboard.php";
            } else {
                include VIEW . "login_form.php";
            }
        } else if ($this->request == "login") {
            if (isset($_SESSION['socapco_admin']) and !empty($_SESSION['socapco_admin'])) {
                header("location: admin");
            } else {
                include VIEW . "login_form.php";
            }
        } else {
            include VIEW . "partials/admin/_404.php";
        }
    }
}
