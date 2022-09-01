<?php
session_start();
require_once "../Models/Connexion.php";

$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");


if (isset($_POST) && !empty($_POST)) {

    $resultArray = array(
        "msg" => "",
        "login" => true,
        "email" => true,
        "pass" => true,
        "login_already" => true,
        "isOk" => true,
    );
    extract($_POST);
    $datas = array(
        "login" => htmlspecialchars(strtolower(trim($login))),
        "email" => htmlspecialchars(strtolower(trim($email))),
        "pass" => htmlspecialchars(strtolower(trim($pass))),
    );

    if (strlen($pass) < 6) {
        $resultArray['pass'] = false;
        $resultArray['isOk'] = false;
        $resultArray['msg'] = "le mot de pass doit contenir minimum 6 carractère";
        // echo "<br>error_pass";
    }
    if (empty($pass)) {
        $resultArray['pass'] = false;
        $resultArray['isOk'] = false;
        $resultArray['msg'] = "entre un mot de passe s'il vous plait";
        // echo "<br>error_pass";
    }
    if (empty($email)) {
        $resultArray['email'] = false;
        $resultArray['isOk'] = false;
        $resultArray['msg'] = "l'adresse Email est obligatoire";
        // echo "<br>email";
    }
    if (empty($login)) {
        $resultArray['login'] = false;
        $resultArray['isOk'] = false;
        $resultArray['msg'] = "entrer un login svp";
        // echo "<br>login";
    }

    if (!empty($_FILES['picture']['name'])) {
        $image_name = $_FILES['picture']['name'];
        $file_tmp_name = $_FILES['picture']['tmp_name'];
        move_uploaded_file($file_tmp_name, ASSETS_ROOT . "images/uploads/$image_name");
    } else {
        $image_name = "default.png";
    }

    //je verifie si l'email exite déjà dans la bose de donnée____________________
    if (!empty($login)) {
        require_once "../Models/Users.php";
        $result = new Users;
        $result = $result->checkUser($login);

        if ($result) {
            $resultArray['login_already'] = false;
            $resultArray['login'] = false;
            $resultArray['isOk'] = false;
            $resultArray['msg'] = "soyer original ! ce login est déjà pris";
        } else { //si tout est OK on crypte le mot de pass
            $passCrypt = password_hash($pass, PASSWORD_DEFAULT);
        }
    }
    // END ________________________________________________________________________________

    // si le formulair est bien rempli, j'envoie les information dans la base de donnée
    if ($resultArray['isOk']) {
        $result = new Users;
        $result->create($datas, $passCrypt, $image_name);
    }
    echo json_encode($resultArray);
}
