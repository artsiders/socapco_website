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
    }
}
