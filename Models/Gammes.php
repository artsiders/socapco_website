<?php
require_once "Connexion.php";
class Gammes
{
    public function __construct()
    {
        $this->connect = new Connexion;
    }
    public function read(int $idGamme)
    {
        $sql = "SELECT * FROM gammes WHERE id_gamme = :id";
        $query = $this->connect->getConnect()->prepare($sql);

        $query->bindParam("id", $idGamme);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAll()
    {
        $sql = "SELECT * FROM gammes";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create(array $data)
    {
        $cat = 1;
        $sql = "INSERT INTO `gammes` (`gam_libele`, `gam_color`, `id_categorie`) 
        VALUES (:gam_libele, :gam_color, :id_categorie)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("gam_libele", $data["gam_libele"]);
        $query->bindParam("gam_color", $data["gam_color"]);
        $query->bindParam("id_categorie", $cat);

        $query->execute();
    }

    public function update($id, array $data)
    {
        $cat = 1;
        $sql = "UPDATE `gammes` SET 
        `gam_libele` = :gam_libele, 
        `gam_color` = :gam_color, 
        `id_categorie` = :id_categorie
        WHERE `id_gamme` = :id";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("gam_libele", $data["gam_libele"]);
        $query->bindParam("gam_color", $data["gam_color"]);
        $query->bindParam("id_categorie", $cat);
        $query->bindParam("id", $id);

        $query->execute();
    }

    public function delete($idGamme)
    {
        $sql = "DELETE FROM `gammes` WHERE `gammes`.`id_gamme` = :id_gamme";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_gamme", $idGamme);
        $query->execute();
    }
}
