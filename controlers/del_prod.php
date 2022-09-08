<?php
session_start();
require_once "../Models/Produit.php";
$products = new Products;

$root = $_SERVER["DOCUMENT_ROOT"];
define("PRODUCTS_FOLDER", "$root/socapco_website/assets/images/product/");

if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];
    $image = $_GET["image"];

    try {
        @unlink(PRODUCTS_FOLDER . $image);
        $products->delete($id);
        $_SESSION["socapco_alert"] = array(
            "type" => "success",
            "message" => "prodruit supprimer avec succès",
        );
        $res = "supprime";
    } catch (EXCEPTION $e) {
        $_SESSION["socapco_alert"] = array(
            "type" => "error",
            "message" => "inpossible de supprimer le produit ! une erreur c'est produite!  reéssayez plus tard",
        );
        $res = "ERREUR : " . $e->getMessage();
    }
    echo json_encode($res);
}
