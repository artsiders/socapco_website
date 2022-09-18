<?php
require_once MODEL . "Produit.php";
require_once MODEL . "Users.php";
require_once MODEL . "Soaps.php";

// PRODUCTS____________________________________________
if (isset($_GET['cat']) and !empty($_GET["cat"])) $cat = $_GET["cat"];
else  $cat = "all";

if (isset($_GET['eff']) and !empty($_GET['eff'])) $eff = $_GET["eff"];
else $eff = "all";

if (isset($_GET['action']) and !empty($_GET['action']) and $_GET['action'] == 'produits') {
    $products = new Products;
    $limit = 4;

    $totalProduct = (int)$products->readCount($cat, $eff);
    $totalPage = ceil($totalProduct / $limit);

    if (isset($_GET['pc']) and !empty($_GET['pc']) and $_GET['pc'] >= 1 and $_GET['pc'] <= $totalPage) {
        $curentPage = (int)$_GET['pc'];
    } else {
        $curentPage = 1;
    }
    $start = ($curentPage - 1) * $limit;

    try {
        $allProductsClientSide = $products->readAllPaginate($cat, $start, $limit, $eff);
    } catch (EXCEPTION $e) {
        echo $e->getMessage();
    }
}
try {
    $products = new Products;
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
if (isset($_GET['action']) and !empty($_GET['action']) and $_GET['action'] == 'savons') {
    $soaps = new Soaps;
    $limit = 4;
    $totalSoap = (int)$soaps->readCount();
    $totalPageSoap = ceil($totalSoap / $limit);

    if (isset($_GET['ps']) and !empty($_GET['ps']) and $_GET['ps'] >= 1 and $_GET['ps'] <= $totalPageSoap) {
        $curentPage = (int)$_GET['ps'];
    } else {
        $curentPage = 1;
    }
    $start = ($curentPage - 1) * $limit;

    try {
        $allSoapPaginate = $soaps->readAllPaginate($start, $limit);
    } catch (EXCEPTION $e) {
        echo $e->getMessage();
    }
}
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
