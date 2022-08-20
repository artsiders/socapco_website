<?php
require_once "../Models/Users.php";
$users = new Users;


if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];

    if ($id != 1 and $id != 0) {
        try {
            //code...
            $users->delete($id);
            $res = "supprime";
        } catch (EXCEPTION $e) {
            $res = "ERREUR" . $e->getMessage();
        }
    } else {
        $res = "impossible de supprimer l'admin";
    }
    echo json_encode($res);
}
