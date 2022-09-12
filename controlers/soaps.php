<?php
session_start();
require_once "../Models/Soaps.php";
$root = $_SERVER["DOCUMENT_ROOT"];
define("ASSETS_ROOT", "$root/socapco_website/assets/");
define("PRODUCTS_FOLDER", "$root/socapco_website/assets/images/product/");


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
            if (isset($_POST['id']) && !empty($_POST['id'])) {

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
                $unite = $_POST['unite'];
                $old_image = $_POST['old_image'];
                $grammage = (int)$_POST['grammage'];

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


                if ($resultArray['isOk']) {
                    // les donnees a passer en parametre de la methode create
                    $data = array(
                        "description" => $descrition,
                        "name" => $name,
                        "unite" => $unite,
                        "image" => "",
                        "grammage" => $grammage,
                    );
                    $id = (int)$_POST["id"];

                    // si le formulair est bien rempli, j'envoie les information dans la base de donnée
                    try {
                        if (!empty($_FILES['image']['name'])) {
                            $image_name = $_FILES['image']['name'];
                            $file_tmp_name = $_FILES['image']['tmp_name'];

                            $file_ext = strtolower(substr(strrchr($image_name, '.'), 1));
                            $uniq_name = md5(uniqid(rand(1, 15))) . "." . $file_ext;

                            $dir = ASSETS_ROOT . "images/product/";

                            $move_file = move_uploaded_file($file_tmp_name, $dir . $image_name);
                            $rename_file = rename($dir . $image_name, $dir . $uniq_name);
                            @unlink($dir . $old_image);

                            if ($move_file) {
                                if ($rename_file) $data["image"] = $uniq_name;
                                else $data["image"] = $image_name;
                            } else {
                                throw new Exception("l'image n'a pas pu être importer sur le serveur");
                            }
                        }
                        // ajout de la publication dans la base de donnee
                        $soaps = new Soaps;
                        $soaps->update($id, $data);

                        $resultArray["insertIsOk"] = true;
                        $resultArray["msg"] = "";
                        $_SESSION["socapco_alert"] = array(
                            "type" => "success",
                            "message" => "prodruit modifier avec succès",
                        );
                    } catch (Exception $e) {
                        $resultArray["insertIsOk"] = false;
                        $resultArray["msg"] = $e->getMessage();
                    }
                }

                echo json_encode($resultArray);
            }
            break;

        case "read":
            if (isset($_GET["id"]) and !empty($_GET["id"])) {
                $id = $_GET["id"];

                try {
                    $soaps = new Soaps;
                    $res = $soaps->read($id);
                } catch (EXCEPTION $e) {
                    $res = "ERREUR" . $e->getMessage();
                }
                echo json_encode($res);
            }
            break;
        case "delete":
            if (isset($_GET["id"]) and !empty($_GET["id"])) {
                $id = $_GET["id"];
                $image = $_GET["image"];

                try {
                    @unlink(PRODUCTS_FOLDER . $image);
                    $soaps = new Soaps;
                    $soaps->delete($id);
                    $_SESSION["socapco_alert"] = array(
                        "type" => "success",
                        "message" => "prodruit supprimer avec succès",
                    );
                    $res = "supprime";
                } catch (EXCEPTION $e) {
                    $_SESSION["socapco_alert"] = array(
                        "type" => "error",
                        "message" => "inpossible de supprimer le produit ! une erreur c'est produite!  reéssayez plus tard",
                    );
                    $res = "ERREUR : " . $e->getMessage();
                }
                echo json_encode($res);
            }
            break;
    }
}
