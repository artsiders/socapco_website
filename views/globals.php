<?php
require_once MODEL . "Produit.php";

$products = new Products;
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

$products = new Products;
try {
    $effects = $products->read_gam_cat_eff("effect");
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

$products = new Products;
try {
    $gammes = $products->read_gam_cat_eff("gamme");
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

$products = new Products;
try {
    $categories = $products->read_gam_cat_eff("categories");
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


$products = new Products;
try {
    $suggProducts = $products->readSuggest(4);
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


$users = new Users;
try {
    $allusers = $users->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


function makeDefaultUser()
{
    $users = new Users;
    $test = $users->checkUser("admin");

    if (!$test) {
        $passCrip = password_hash('@Motdepass1', PASSWORD_DEFAULT);

        $data = array(
            "id_user" => 0,
            "login" => 'admin',
            "pass" => $passCrip,
            "email" => 'jimsky699@gmail.com',
            "is_admin" => 1
        );
        $users->create($data, $passCrip, "default.png", 1);
    }
}

function deleteGamma()
{
    if (isset($_GET['id_gamme']) and !empty($_GET['id_gamme'])) {
        $id = $_GET['id_gamme'];
        $gammes = new Gammes;
        try {
            $gammes->delete($id);
        } catch (PDOException $e) {
            echo "<span class='alert alert-danger'>impossible de supprimer une gamme contenant des produits.
            il faut d'abord supprimer les produits en question !</span>";
        }
    }
}
deleteGamma();
