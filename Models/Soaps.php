<?php
require_once "Connexion.php";
class Soaps
{

    public function __construct()
    {
        $this->connect = new Connexion;
    }

    public function create(array $data)
    {
        $sql = "INSERT INTO `soaps` (`name`, `description`, `grammage`, `picture`, `unite`, `id_user`) 
        VALUES (:prod_name, :prod_desc, :grammage, :picture, :unite, :id_user)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("prod_name", $data['name']);
        $query->bindParam("prod_desc", $data['description']);
        $query->bindParam("grammage", $data['grammage']);
        $query->bindParam("unite", $data['unite']);
        $query->bindParam("picture", $data['image']);
        $query->bindParam("id_user", $data['id_user']);

        $query->execute();
    }

    public function read(int $idSoap)
    {
        $sql = "SELECT * FROM `soaps` S, `users` U
        WHERE S.id_user = u.id_user AND id_soap = :id_soap";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_soap", $idSoap);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAll()
    {
        $query = $this->connect->getConnect()->prepare("SELECT 
        S.id_soap, 
        U.id_user, 
        S.picture, 
        S.name, 
        S.description, 
        S.grammage, 
        S.unite, 
        S.add_date
        FROM `soaps` S, `users` U
        WHERE S.id_user = U.id_user
        ORDER BY S.name");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readSuggest($limit)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `soaps` S, `users` U
        WHERE S.id_user = u.id_user ORDER BY RAND() LIMIT $limit");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function update(int $idSoap, array $data)
    {
        if ($data["image"] == "") {
            $sql = "UPDATE `soaps` SET 
                `name`= :prod_name,
                `description`= :prod_desc,
                `unite`= :unite,
                `grammage`= :grammage
                WHERE id_soap = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_name", $data['name']);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("grammage", $data['grammage']);
            $query->bindParam("unite", $data['unite']);
            $query->bindParam("id", $idSoap);
        } else {
            $sql = "UPDATE `soaps` SET 
                `name`= :prod_name,
                `description`= :prod_desc,
                `grammage`= :grammage,
                `unite`= :unite,
                `picture`= :picture
                WHERE id_soap = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_name", $data['name']);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("grammage", $data['grammage']);
            $query->bindParam("picture", $data['image']);
            $query->bindParam("unite", $data['unite']);
            $query->bindParam("id", $idSoap);
        }


        $query->execute();
    }

    public function delete($idSoap)
    {
        $sql = "DELETE FROM `soaps` WHERE `soaps`.`id_soap` = :id";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id", $idSoap);
        $query->execute();
    }
}
