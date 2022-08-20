<?php
require_once "../Models/Users.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");

if (isset($_POST['id']) && !empty($_POST['id'])) {

    $resultArray = array(
        "msg" => "",
        "login" => true,
        "email" => true,
        "image" => true,
        "isOk" => true,
        "insertIsOk" => null
    );
    $email = htmlspecialchars($_POST['email']);
    $login = htmlspecialchars($_POST['login']);

    if (empty($login)) {
        $resultArray["login"] = false;
        $resultArray["isOk"] = false;
        $resultArray["msg"] = "le nom d'utilisateur est obligatoire";
    }
    if (empty($email)) {
        $resultArray["email"] = false;
        $resultArray["isOk"] = false;
        $resultArray["msg"] = "l'email n'est pas valide";
    }


    // les donnees a passer en parametre de la methode create
    $data = array(
        "login" => $login,
        "email" => $email,
        "image" => "",
    );
    $id = $_POST["id"];

    // si le formulair est bien rempli, j'envoie les information dans la base de donnée
    if ($resultArray['isOk']) {
        try {
            if (!empty($_FILES['picture']['name'])) {
                $image_name = $_FILES['picture']['name'];
                $file_tmp_name = $_FILES['picture']['tmp_name'];
                move_uploaded_file($file_tmp_name, ASSETS_ROOT . "images/uploads/$image_name");
                $data["image"] = $image_name;
            }
            // ajout de la publication dans la base de donnee
            $users = new Users;
            $users->update($id, $data);
            $resultArray["insertIsOk"] = true;

            $resultArray["msg"] = "";
        } catch (Exception $e) {
            $resultArray["insertIsOk"] = false;
            $resultArray["msg"] = $e->getMessage();
        }
    }

    echo json_encode($resultArray);
}
