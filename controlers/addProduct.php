<?php
session_start();
require_once "../Models/Produit.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");
$products = new Products;
// $datas = $products->readAll();

if (isset($_POST) && !empty($_POST)) {

    $resultArray = array(
        "msg" => "",
        "image" => true,
        "name" => true,
        "description" => true,
        "isOk" => true,
        "insertIsOk" => null
    );
    $name = htmlspecialchars($_POST['name']);
    $descrition = htmlspecialchars($_POST['description']);
    $idGamme = htmlspecialchars($_POST['id_gamme']);
    $idCategorie = htmlspecialchars($_POST['id_categorie']);
    $ingredient = htmlspecialchars($_POST['ingredient']);


    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $file_tmp_name = $_FILES['image']['tmp_name'];

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


    // les donnees a passer en parametre de la methode create
    $data = array(
        "description" => $descrition,
        "name" => $name,
        "image" => $image_name,
        "id_categorie" => $idCategorie,
        "id_gamme" => $idGamme,
        "ingredient" => $ingredient,
    );

    // si le formulair est bien rempli, j'envoie les information dans la base de donnée
    if ($resultArray['isOk']) {
        try {
            // ajout de la publication dans la base de donnee
            $products = new products;
            $products->create($data);
            $resultArray["insertIsOk"] = true;

            move_uploaded_file($file_tmp_name, ASSETS_ROOT . "images/product/$image_name");

            $resultArray["msg"] = "";
        } catch (Exception $e) {
            $resultArray["insertIsOk"] = false;
            $resultArray["msg"] = $e->getMessage();
        }
    }

    echo json_encode($resultArray);
}