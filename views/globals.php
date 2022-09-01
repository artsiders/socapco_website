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
        echo json_encode($data);
        $users->create($data, $passCrip, 1);
    }
}
