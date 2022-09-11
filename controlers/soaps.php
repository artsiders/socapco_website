<?php
session_start();
require_once "../Models/Soaps.php";
$root = $_SERVER["DOCUMENT_ROOT"];


if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            $resultArray = array(
                "msg" => "",
                "gam_libele" => true,
                "isOk" => true,
                "insertIsOk" => null
            );
            $gam_libele = htmlspecialchars(strtolower(trim($_POST['gam_libele'])));
            $gam_color = htmlspecialchars(strtolower(trim($_POST['gam_color'])));


            if (empty($gam_libele)) {
                $resultArray["gam_libele"] = false;
                $resultArray["isOk"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            // si le formulair est bien rempli, j'envoie les information dans la base de donnée
            if ($resultArray['isOk']) {
                $data = array(
                    "gam_libele" => $gam_libele,
                    "gam_color" => $gam_color,
                );
                try {
                    $gammes = new Gammes;
                    $gammes->create($data);
                    $resultArray["insertIsOk"] = true;
                    $resultArray["msg"] = "";
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "la gamme a été ajouter avec succès",
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
                "gam_libele" => true,
            );
            $gam_libele = htmlspecialchars(strtolower(trim($_POST['gam_libele'])));
            $gam_color = htmlspecialchars(strtolower(trim($_POST['gam_color'])));
            $id = (int)$_POST['id'];


            if (empty($gam_libele)) {
                $resultArray["gam_libele"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            if ($resultArray["gam_libele"]) {
                $data = array(
                    "gam_libele" => $gam_libele,
                    "gam_color" => $gam_color,
                );
                try {
                    $gammes = new Gammes;
                    $gammes->update($id, $data);
                    $resultArray["msg"] = "";
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "modifié avec succès",
                    );
                } catch (Exception $e) {
                    $resultArray["msg"] = $e->getMessage();
                    $_SESSION["socapco_alert"] = array(
                        "type" => "error",
                        "message" => "erreur pendant la modification",
                    );
                }
            }
            echo json_encode($resultArray);
            break;

        case "read":
            $id = (int)$_GET['id'];
            try {
                $gammes = new Gammes;
                $result = $gammes->read($id);
            } catch (Exception $e) {
                $result = $e->getMessage();
            }

            echo json_encode($result);
            break;
        case "delete":
            if (isset($_GET['id']) and !empty($_GET['id'])) {
                $id = $_GET['id'];
                $gammes = new Gammes;
                try {
                    $gammes->delete($id);
                    $res = "";
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "la gamme a été supprimer avec succès",
                    );
                } catch (PDOException $e) {
                    $res =  "ERREUR : " . $e->getMessage();
                    $_SESSION["socapco_alert"] = array(
                        "type" => "warning",
                        "message" => "impossible de supprimer une gamme contenant des produits.
                        il faut d'abord supprimer les produits en question !",
                    );
                }
                echo json_encode($res);
            }
            break;
    }
}
