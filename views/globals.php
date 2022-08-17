<?php
require_once MODEL . "Produit.php";

$products = new products;
if (isset($_GET['cat']) and !empty($_GET["cat"])) {
    $cat = $_GET["cat"];
} else {
    $cat = "all";
}

try {
    $allProducts = $products->readAllByCat($cat);
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

$products = new products;
try {
    $gammes = $products->readGam_cat("gamme");
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

$products = new products;
try {
    $categories = $products->readGam_cat("categories");
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


$products = new products;
try {
    $suggProducts = $products->readSuggest(4);
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


$users = new users;
try {
    $allusers = $users->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}