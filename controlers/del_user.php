<?php
session_start();
require_once "../Models/Users.php";
$users = new Users;


if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];
    $is_admin = $_GET["is_admin"];

    if ($is_admin < 1) {
        try {
            //code...
            $users->delete($id);
            $res = "supprime";
            $_SESSION["socapco_alert"] = array(
                "type" => "success",
                "message" => "l'utilisateur a été supprimer avec succès !",
            );
        } catch (EXCEPTION $e) {
            $res = "ERREUR : " . $e->getMessage();
            $_SESSION["socapco_alert"] = array(
                "type" => "error",
                "message" => "l'utilisateur n'a pas pu être supprimer !",
            );
        }
    } else {
        $res = "impossible de supprimer l'admin";
        $_SESSION["socapco_alert"] = array(
            "type" => "warning",
            "message" => "le compte administrateur ne peut être supprimer !",
        );
    }
    echo json_encode($res);
}
