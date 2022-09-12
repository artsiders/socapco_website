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
        $sql = "INSERT INTO `plastique` (`description`, `grammage`, `picture`, `unite`, `id_user`) 
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
        $sql = "SELECT * FROM `plastique` P, `users` U
        WHERE P.id_user = U.id_user AND id_plastique = :id_plastique";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_plastique", $idPlastique);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAll()
    {
        $query = $this->connect->getConnect()->prepare("SELECT 
        P.id_plastique, 
        U.id_user, 
        P.picture, 
        P.description, 
        P.grammage, 
        P.unite, 
        P.add_date
        FROM `plastique` P, `users` U
        WHERE P.id_user = u.id_user");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readSuggest($limit)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `plastique` P, `users` U
        WHERE P.id_user = u.id_user ORDER BY RAND() LIMIT $limit");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function update(int $idPlastique, array $data)
    {
        if ($data["image"] == "") {
            $sql = "UPDATE `plastique` SET 
                `description`= :prod_desc,
                `grammage`= :grammage
                WHERE id_plastique = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("grammage", $data['grammage']);
            $query->bindParam("id", $idPlastique);
        } else {
            $sql = "UPDATE `plastique` SET 
                `description`= :prod_desc,
                `grammage`= :grammage,
                `picture`= :picture
                WHERE id_plastique = :id";
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
        $sql = "DELETE FROM `plastique` WHERE `plastique`.`id_plastique` = :id";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id", $idPlastique);
        $query->execute();
    }
}
