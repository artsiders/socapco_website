<?php
require_once MODEL . "Produit.php";
require_once MODEL . "Users.php";
require_once MODEL . "Soaps.php";

// PRODUCTS____________________________________________
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

$products = new products;
try {
    $productsImportant = $products->readAllImportant();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}


// USER_____________________________________________
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
        $passCrip = password_hash('@Socapco237', PASSWORD_DEFAULT);

        $data = array(
            "login" => 'socapco',
            "email" => 'contact@socapco.com',
        );
        $users->create($data, $passCrip, "default.png", 1);


        $passCrip = password_hash('@Motdepass1', PASSWORD_DEFAULT);

        $data = array(
            "login" => 'admin',
            "email" => 'jimsky699@gmail.com',
        );
        $users->create($data, $passCrip, "default.png", 2);
    }
}

// SOAP____________________________
$soaps = new Soaps;
try {
    $allSoap = $soaps->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}

// PLASTIQUE____________________________
$plastiques = new Plastiques;
try {
    $allPlastique = $plastiques->readAll();
} catch (EXCEPTION $e) {
    echo $e->getMessage();
}
