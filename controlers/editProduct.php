<?php
session_start();
require_once "../Models/Produit.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");

if (isset($_POST['id']) && !empty($_POST['id'])) {

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
    $old_image = $_POST['old_image'];
    $grammage = (int)$_POST['grammage'];
    $unite = htmlspecialchars(strtolower(trim($_POST['unite'])));
    isset($_POST['important']) && $_POST['important'] == 1 ? $important = 1 : $important = 0;

    $idGamme = htmlspecialchars($_POST['id_gamme']);
    $idCategorie = htmlspecialchars($_POST['id_categorie']);
    $idEffect = htmlspecialchars($_POST['id_effect']);
    $idUser = $_SESSION['socapco_admin']['id_user'];



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


    if ($resultArray['isOk']) {
        // les donnees a passer en parametre de la methode create
        $data = array(
            "description" => $descrition,
            "name" => $name,
            "image" => "",
            "id_categorie" => $idCategorie,
            "id_gamme" => $idGamme,
            "id_effect" => $idEffect,
            "id_user" => $idUser,
            "ingredient" => $ingredient,
            "important" => $important,
            "grammage" => $grammage,
            "unite" => $unite,
        );
        $id = (int)$_POST["id"];

        // si le formulair est bien rempli, j'envoie les information dans la base de donn??e
        try {

            if (!empty($_FILES['image']['name'])) {
                $image_name = $_FILES['image']['name'];
                $file_tmp_name = $_FILES['image']['tmp_name'];

                $file_ext = strtolower(substr(strrchr($image_name, '.'), 1));
                $uniq_name = md5(uniqid(rand(1, 15))) . "." . $file_ext;

                $dir = ASSETS_ROOT . "images/product/";

                $move_file = move_uploaded_file($file_tmp_name, $dir . $image_name);
                $rename_file = rename($dir . $image_name, $dir . $uniq_name);
                @unlink($dir . $old_image);

                if ($move_file) {
                    if ($rename_file) $data["image"] = $uniq_name;
                    else $data["image"] = $image_name;
                } else {
                    throw new Exception("l'image n'a pas pu ??tre importer sur le serveur");
                }
            }
            // ajout de la publication dans la base de donnee
            $products = new Products;
            $products->update($id, $data);

            $resultArray["insertIsOk"] = true;
            $resultArray["msg"] = "";
            $_SESSION["socapco_alert"] = array(
                "type" => "success",
                "message" => "prodruit modifier avec succ??s",
            );
        } catch (Exception $e) {
            $resultArray["insertIsOk"] = false;
            $resultArray["msg"] = $e->getMessage();
        }
    }

    echo json_encode($resultArray);
}
