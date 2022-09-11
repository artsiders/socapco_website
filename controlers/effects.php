<?php
session_start();
require_once "../Models/Effects.php";
$root = $_SERVER["DOCUMENT_ROOT"];


if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            $resultArray = array(
                "msg" => "",
                "eff_libele" => true,
                "isOk" => true,
                "insertIsOk" => null
            );
            $eff_libele = htmlspecialchars(strtolower(trim($_POST['eff_libele'])));


            if (empty($eff_libele)) {
                $resultArray["eff_libele"] = false;
                $resultArray["isOk"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            // si le formulair est bien rempli, j'envoie les information dans la base de donnée
            if ($resultArray['isOk']) {
                $data = array(
                    "eff_libele" => $eff_libele,
                );
                try {
                    $effect = new Effect;
                    $effect->create($data);
                    $resultArray["insertIsOk"] = true;
                    $resultArray["msg"] = "";
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "ajouter avec succès",
                    );
                } catch (Exception $e) {
                    $resultArray["insertIsOk"] = false;
                    $resultArray["msg"] = $e->getMessage();
                    $_SESSION["socapco_alert"] = array(
                        "type" => "error",
                        "message" => "une erreur est survenu lors de l'ajout !",
                    );
                }
            }
            echo json_encode($resultArray);
            break;

        case "update":
            $resultArray = array(
                "msg" => "",
                "eff_libele" => true,
            );
            $eff_libele = htmlspecialchars(strtolower(trim($_POST['eff_libele'])));
            $id = (int)$_POST['id'];


            if (empty($eff_libele)) {
                $resultArray["eff_libele"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            if ($resultArray["eff_libele"]) {
                $data = array(
                    "eff_libele" => $eff_libele,
                );
                try {
                    $effect = new Effect;
                    $effect->update($id, $data);
                    $resultArray["msg"] = "";
                } catch (Exception $e) {
                    $resultArray["msg"] = $e->getMessage();
                }
            }
            echo json_encode($resultArray);
            break;

        case "read":
            $id = (int)$_GET['id'];
            try {
                $effect = new Effect;
                $result = $effect->read($id);
            } catch (Exception $e) {
                $result = $e->getMessage();
            }

            echo json_encode($result);
            break;
        case "delete":
            if (isset($_GET['id']) and !empty($_GET['id'])) {
                $id = $_GET['id'];
                $effect = new Effect;
                try {
                    $effect->delete($id);
                    $res = "";
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "supprimer avec succès",
                    );
                } catch (PDOException $e) {
                    $res =  "ERREUR : " . $e->getMessage();
                    $_SESSION["socapco_alert"] = array(
                        "type" => "warning",
                        "message" => "impossible de supprimer un effet contenant des produits.
                        il faut d'abord supprimer les produits en question !",
                    );
                }
                echo json_encode($res);
            }
            break;
    }
}
