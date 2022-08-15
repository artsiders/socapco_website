<?php
require_once "../Models/Produit.php";
$products = new Products;


if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];

    try {
        //code...
        $res = $products->read($id);
    } catch (EXCEPTION $e) {
        $res = "ERREUR" . $e->getMessage();
    }
    echo json_encode($res);
}