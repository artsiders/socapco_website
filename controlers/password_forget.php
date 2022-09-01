<?php
session_start();
require_once "../Models/Connexion.php";

$connect = new Connexion;
$connect = $connect->getConnect();


if (isset($_POST) and !empty($_POST)) {
    $resultArray = array(
        "msg" => "",
        "email" => true,
        "isOk" => false
    );
    extract($_POST);

    if (empty($useremail)) {
        $resultArray['msg'] = "entrer votre nom d'utilisateur";
        $resultArray['email'] = false;
    } else if (empty($userPass)) {
        $resultArray['msg'] = "entrer votre mot de pass";
        $resultArray['pass'] = false;
    } else {
        require_once "../Models/Users.php";
        $result = new Users;
        $result = $result->checkUser($useremail);

        if ($result) {
            // verification du mot de passe
            if (password_verify($userPass, $result["pass"])) {
                $_SESSION['socapco_admin']  = $result;
                $resultArray['isOk'] = true;
            } else {
                $resultArray['msg'] = "mot de passe incorrect :(";
                $resultArray['pass'] = false;
            }
            $resultArray['email'] = true;
        } else {
            $resultArray['msg'] = "le compte n'exite pas ou n'est pas encore valide";
            $resultArray['email'] = false;
        }
    }
    echo json_encode($resultArray);
}
