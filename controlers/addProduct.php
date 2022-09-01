<?php
session_start();
require_once "../Models/Produit.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");


if (isset($_POST) && !empty($_POST)) {

    $resultArray = array(
        "msg" => "",
        "image" => true,
        "name" => true,
        "description" => true,
        "isOk" => true,
        "insertIsOk" => null
    );
    $name = htmlspecialchars(strtolower(trim($_POST['name'])));
    $descrition = htmlspecialchars(strtolower(trim($_POST['description'])));
    $ingredient = htmlspecialchars(strtolower(trim($_POST['ingredient'])));

    $idGamme = htmlspecialchars($_POST['id_gamme']);
    $idCategorie = htmlspecialchars($_POST['id_categorie']);
    $idEffect = htmlspecialchars($_POST['id_effect']);
    $idUser = $_SESSION['socapco_admin']['id_user'];


    if (!empty($_FILES['product_image']['name'])) {
        $image_name = $_FILES['product_image']['name'];
        $file_tmp_name = $_FILES['product_image']['tmp_name'];

        $resultArray["image"] = true;
    } else {
        $image_name = null;
        $resultArray["image"] = false;
        $resultArray["isOk"] = false;
        $resultArray["msg"] = "il faut une image";
    }
    if (empty($descrition)) {
        $resultArray["description"] = false;
        $resultArray["isOk"] = false;
        $resultArray["msg"] = "renseignez une petite description sur la produit";
    }
    if (empty($name)) {
        $resultArray["name"] = false;
        $resultArray["isOk"] = false;
        $resultArray["msg"] = "le nom du produit est obligatoire";
    }



    // si le formulair est bien rempli, j'envoie les information dans la base de donnée
    if ($resultArray['isOk']) {
        try {
            $file_ext = strtolower(substr(strrchr($image_name, '.'), 1));
            $uniq_name = md5(uniqid(rand(1, 15))) . "." . $file_ext;

            $dir = ASSETS_ROOT . "images/product/";

            $move_file = move_uploaded_file($file_tmp_name, $dir . $image_name);
            $rename_file = rename($dir . $image_name, $dir . $uniq_name);

            if ($rename_file && $move_file) {
                // les donnees a passer en parametre de la methode create
                $data = array(
                    "description" => $descrition,
                    "name" => $name,
                    "image" => $uniq_name,
                    "id_categorie" => $idCategorie,
                    "id_gamme" => $idGamme,
                    "id_effect" => $idEffect,
                    "id_user" => $idUser,
                    "ingredient" => $ingredient,
                );
                // ajout de la publication dans la base de donnee
                $products = new products;
                $products->create($data);
                $resultArray["insertIsOk"] = true;
            }
            $resultArray["msg"] = "";
        } catch (Exception $e) {
            $resultArray["insertIsOk"] = false;
            $resultArray["msg"] = $e->getMessage();
        }
    }

    echo json_encode($resultArray);
}
