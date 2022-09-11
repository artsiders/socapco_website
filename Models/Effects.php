<?php
require_once "Connexion.php";
class Effect
{
    public function __construct()
    {
        $this->connect = new Connexion;
    }
    public function read(int $idEffect)
    {
        $sql = "SELECT * FROM effects WHERE id_effect = :id";
        $query = $this->connect->getConnect()->prepare($sql);

        $query->bindParam("id", $idEffect);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAll()
    {
        $sql = "SELECT * FROM effects";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create(array $data)
    {
        $sql = "INSERT INTO `effects` (`eff_libele`) 
        VALUES (:eff_libele)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("eff_libele", $data["eff_libele"]);

        $query->execute();
    }

    public function update($id, array $data)
    {
        $sql = "UPDATE `effects` SET 
        `eff_libele` = :eff_libele
        WHERE `id_effect` = :id";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("eff_libele", $data["eff_libele"]);
        $query->bindParam("id", $id);

        $query->execute();
    }

    public function delete($idEffect)
    {
        $sql = "DELETE FROM `effects` WHERE `effects`.`id_effect` = :id_effect";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_effect", $idEffect);
        $query->execute();
    }
}
