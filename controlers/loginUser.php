<?php
session_start();
require_once "../Models/Connexion.php";

$connect = new Connexion;
$connect = $connect->getConnect();


if (isset($_POST) and !empty($_POST)) {
    $resultArray = array(
        "msg" => "",
        "login" => true,
        "pass" => true,
        "isOk" => false
    );

    $userLogin = $_POST["login"];
    $userPass = $_POST["pass"];

    if (empty($userLogin)) {
        $resultArray['msg'] = "entrer votre nom d'utilisateur";
        $resultArray['login'] = false;
    } else if (empty($userPass)) {
        $resultArray['msg'] = "entrer votre mot de pass";
        $resultArray['pass'] = false;
    } else {
        require_once "../Models/Users.php";
        $result = new Users;
        $result = $result->checkUser($userLogin);

        if ($result) {
            // verification du mot de passe
            if (password_verify($userPass, $result["pass"])) {
                $_SESSION['socapco_admin']  = $result;
                $resultArray['isOk'] = true;
            } else {
                $resultArray['msg'] = "mot de passe incorrect :(";
                $resultArray['pass'] = false;
            }
            $resultArray['login'] = true;
        } else {
            $resultArray['msg'] = "le compte n'exite pas ou n'est pas encore valide";
            $resultArray['login'] = false;
        }
    }
    echo json_encode($resultArray);
}
