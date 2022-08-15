<?php
require_once "../Models/Produit.php";
$products = new Products;


if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];

    try {
        //code...
        $products->delete($id);
        $res = "supprime";
    } catch (EXCEPTION $e) {
        $res = "ERREUR" . $e->getMessage();
    }
    echo json_encode($res);
}