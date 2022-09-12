<?php
require_once "Connexion.php";
class Plastiques
{

    public function __construct()
    {
        $this->connect = new Connexion;
    }

    public function create(array $data)
    {
        $sql = "INSERT INTO `plastiques` (`description`, `grammage`, `picture`, `unite`, `id_user`) 
        VALUES (:prod_desc, :grammage, :picture, :unite, :id_user)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("prod_desc", $data['description']);
        $query->bindParam("grammage", $data['grammage']);
        $query->bindParam("unite", $data['unite']);
        $query->bindParam("picture", $data['image']);
        $query->bindParam("id_user", $data['id_user']);

        $query->execute();
    }

    public function read(int $idPlastique)
    {
        $sql = "SELECT * FROM `plastiques` P, `users` U
        WHERE P.id_user = U.id_user AND id_soap = :id_soap";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_soap", $idPlastique);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAll()
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `plastiques` P, `users` U
        WHERE P.id_user = u.id_user");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readSuggest($limit)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `plastiques` P, `users` U
        WHERE P.id_user = u.id_user ORDER BY RAND() LIMIT $limit");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function update(int $idPlastique, array $data)
    {
        if ($data["image"] == "") {
            $sql = "UPDATE `plastiques` SET 
                `description`= :prod_desc,
                `grammage`= :grammage
                WHERE id_soap = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("grammage", $data['grammage']);
            $query->bindParam("id", $idPlastique);
        } else {
            $sql = "UPDATE `plastiques` SET 
                `description`= :prod_desc,
                `grammage`= :grammage,
                `picture`= :picture
                WHERE id_soap = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("grammage", $data['grammage']);
            $query->bindParam("picture", $data['image']);
            $query->bindParam("id", $idPlastique);
        }


        $query->execute();
    }

    public function delete($idPlastique)
    {
        $sql = "DELETE FROM `plastiques` WHERE `plastiques`.`id_plastique` = :id";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id", $idPlastique);
        $query->execute();
    }
}
