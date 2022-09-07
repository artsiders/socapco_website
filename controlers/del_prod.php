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
        if (!unlink(PRODUCTS_FOLDER . $image)) {
            throw new Exception("impossible de supprimer l'image");
        } else {
            $products->delete($id);
            $res = "supprime";
            $_SESSION["socapco_alert"] = array(
                "type" => "success",
                "message" => "prodruit supprimer avec succès",
            );
        }
    } catch (EXCEPTION $e) {
        $res = "ERREUR" . $e->getMessage();
    }
    echo json_encode($res);
}
