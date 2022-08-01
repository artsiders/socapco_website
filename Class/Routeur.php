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
        }
        if ($this->request == "detail") {
            include VIEW . "blog-detail.php";
        }
        if ($this->request == "about") {
            include VIEW . "about.php";
        }
        if ($this->request == "contact") {
            include VIEW . "contact.php";
        }
        if ($this->request == "test") {
            include VIEW . "dashboard.php";
        }

        // route admin app
        if ($this->request == "admin") {
            if (isset($_SESSION['socapco_admin']) and !empty($_SESSION['socapco_admin'])) {
                include VIEW . "dashboard.php";
            } else {
                include VIEW . "login_form.php";
            }
        }
        if ($this->request == "login") {
            if (isset($_SESSION['socapco_admin']) and !empty($_SESSION['socapco_admin'])) {
                header("location: admin");
            } else {
                include VIEW . "login_form.php";
            }
        }
        if ($this->request == "register") {
            if (isset($_SESSION['socapco_admin']) and !empty($_SESSION['socapco_admin'])) {
                header("location: admin");
            } else {
                include VIEW . "register_form.php";
            }
        }
    }
}
