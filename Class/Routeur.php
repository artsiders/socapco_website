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
    }
}
