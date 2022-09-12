<?php
session_start();
require_once "../Models/Soaps.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");


if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            if (isset($_POST) && !empty($_POST)) {

                $resultArray = array(
                    "msg" => "",
                    "image" => true,
                    "name" => true,
                    "description" => true,
                    "isOk" => true,
                    "insertIsOk" => null
                );
                $name = htmlspecialchars(strtolower(trim($_POST['name'])));
                $descrition = htmlspecialchars(strtolower(trim($_POST['description'])));
                $grammage = (int)$_POST['grammage'];
                $unite = htmlspecialchars(strtolower(trim($_POST['unite'])));

                $idUser = $_SESSION['socapco_admin']['id_user'];


                if (!empty($_FILES['soap_image']['name'])) {
                    $image_name = $_FILES['soap_image']['name'];
                    $file_tmp_name = $_FILES['soap_image']['tmp_name'];

                    $resultArray["image"] = true;
                } else {
                    $image_name = null;
                    $resultArray["image"] = false;
                    $resultArray["isOk"] = false;
                    $resultArray["msg"] = "il faut une image";
                }
                if (empty($descrition)) {
                    $resultArray["description"] = false;
                    $resultArray["isOk"] = false;
                    $resultArray["msg"] = "renseignez une petite description sur la produit";
                }
                if (empty($name)) {
                    $resultArray["name"] = false;
                    $resultArray["isOk"] = false;
                    $resultArray["msg"] = "le nom du produit est obligatoire";
                }



                // si le formulair est bien rempli, j'envoie les information dans la base de donnée
                if ($resultArray['isOk']) {
                    try {
                        $file_ext = strtolower(substr(strrchr($image_name, '.'), 1));
                        $uniq_name = md5(uniqid(rand(1, 15))) . "." . $file_ext;

                        $dir = ASSETS_ROOT . "images/product/";

                        $move_file = move_uploaded_file($file_tmp_name, $dir . $image_name);
                        $rename_file = rename($dir . $image_name, $dir . $uniq_name);

                        if ($rename_file && $move_file) {
                            // les donnees a passer en parametre de la methode create
                            $data = array(
                                "description" => $descrition,
                                "name" => $name,
                                "image" => $uniq_name,
                                "id_user" => $idUser,
                                "grammage" => $grammage,
                                "unite" => $unite,
                            );
                            // ajout de la publication dans la base de donnee
                            $soaps = new Soaps;
                            $soaps->create($data);
                            $resultArray["insertIsOk"] = true;
                        }

                        $resultArray["msg"] = "";
                        $_SESSION["socapco_alert"] = array(
                            "type" => "success",
                            "message" => "prodruit ajouter avec succès",
                        );
                    } catch (Exception $e) {
                        $resultArray["insertIsOk"] = false;
                        $resultArray["msg"] = $e->getMessage();
                    }
                }

                echo json_encode($resultArray);
            }
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
