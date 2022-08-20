<?php
require_once "Connexion.php";
class Users
{

    public function __construct()
    {
        $this->connect = new Connexion;
    }

    public function create(array $data, $passCrip, $picture)
    {
        $sql = "INSERT INTO `users` (`login`, `pass`, `email`, `picture`) VALUES (:user_login, :pass, :email, :picture)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("user_login", $data['login']);
        $query->bindParam("pass", $passCrip);
        $query->bindParam("email", $data['email']);
        $query->bindParam("picture", $picture);

        $query->execute();
    }

    public function read(int $idUser)
    {
        $sql = "SELECT * FROM `users` WHERE `users`.`id_user` = :id_user";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_user", $idUser);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    public function readCount()
    {
        $sql = "SELECT COUNT(`id_user`) FROM `users`";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_NUM);
        return $result;
    }

    // reserver a l'administrateur
    public function readAll(int $limit = null)
    {
        if ($limit == null) {
            $query = $this->connect->getConnect()->prepare("SELECT * FROM users");
        } else {
            $query = $this->connect->getConnect()->prepare("SELECT * FROM users LIMIT $limit");
        }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update(int $idUser, array $data)
    {
        if (!$data["image"]) {
            $sql = "UPDATE `users` SET 
                `login` = :user_login, 
                `pass` = :pass, 
                `email` = :email
                WHERE `users`.`id_user` = :id_user";


            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("user_login", $data['login']);
            $query->bindParam("pass", $data['pass']);
            $query->bindParam("email", $data['email']);
            $query->bindParam("id_user", $idUser);
            $query->execute();
        } else {
            $sql = "UPDATE `users` SET 
                `login` = :user_login, 
                `pass` = :pass, 
                `email` = :email,
                `picture` = :picture
                WHERE `users`.`id_user` = :id_user";


            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("user_login", $data['login']);
            $query->bindParam("pass", $data['pass']);
            $query->bindParam("email", $data['email']);
            $query->bindParam("picture", $data['image']);
            $query->bindParam("id_user", $idUser);
            $query->execute();
        }
    }

    public function updatePicture(int $idUser, string $pictureName)
    {
        $sql = "UPDATE `users` SET 
                `picture` = :picture
                WHERE `users`.`id_user` = :id_user";

        $query = $this->connect->getConnect()->prepare($sql);

        $query->bindParam("picture", $pictureName);

        $query->bindParam("id_user", $idUser);

        $query->execute();
    }

    public function delete($idUser)
    {
        $sql = "DELETE FROM `users` WHERE `users`.`id_user` = :id_user";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_user", $idUser);
        $query->execute();
    }

    public function checkUser($userLogin)
    {
        try {
            $sql = 'SELECT * FROM users WHERE `login` = :user_login';
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("user_login", $userLogin);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (EXCEPTION $e) {
            echo json_encode($e->getMessage());
        }
    }
}
