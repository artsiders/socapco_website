<?php
require_once "../Models/Users.php";
$users = new Users;


if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];

    try {
        //code...
        $res = $users->read($id);
    } catch (EXCEPTION $e) {
        $res = "ERREUR" . $e->getMessage();
    }
    echo json_encode($res);
}
