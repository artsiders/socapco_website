<?php
require_once "../Models/Gammes.php";
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


            if (empty($gam_libele)) {
                $resultArray["gam_libele"] = false;
                $resultArray["isOk"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            // si le formulair est bien rempli, j'envoie les information dans la base de donnée
            if ($resultArray['isOk']) {
                $data = array(
                    "gam_libele" => $gam_libele,
                );
                try {
                    $gammes = new Gammes;
                    $gammes->create($data);
                    $resultArray["insertIsOk"] = true;
                    $resultArray["msg"] = "";
                } catch (Exception $e) {
                    $resultArray["insertIsOk"] = false;
                    $resultArray["msg"] = $e->getMessage();
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
            $id = (int)$_POST['id'];


            if (empty($gam_libele)) {
                $resultArray["gam_libele"] = false;
                $resultArray["msg"] = "entrer un intitulé";
            }

            if ($resultArray["gam_libele"]) {
                $data = array(
                    "gam_libele" => $gam_libele,
                );
                try {
                    $gammes = new Gammes;
                    $gammes->update($id, $data);
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
                $gammes = new Gammes;
                $result = $gammes->read($id);
            } catch (Exception $e) {
                $result = $e->getMessage();
            }

            echo json_encode($result);
            break;
            break;
    }
}
