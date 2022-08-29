<?php
require_once "Connexion.php";
class Products
{

    public function __construct()
    {
        $this->connect = new Connexion;
    }

    public function create(array $data)
    {
        $sql = "INSERT INTO `products` (`name`, `description`, `id_categorie`, `id_gamme`, `picture`,`ingredient`) 
        VALUES (:prod_name, :prod_desc, :categorie, :gamme, :picture, :ingredient)";

        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("prod_name", $data['name']);
        $query->bindParam("prod_desc", $data['description']);
        $query->bindParam("categorie", $data['id_categorie']);
        $query->bindParam("gamme", $data['id_gamme']);
        $query->bindParam("picture", $data['image']);
        $query->bindParam("ingredient", $data['ingredient']);

        $query->execute();
    }

    public function read(int $idProduit)
    {
        $sql = "SELECT * FROM `products` WHERE id_product = :id_product";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id_product", $idProduit);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    public function readAllImportant()
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` P, `gammes` G, categories C
        WHERE P.id_gamme = G.id_gamme AND P.id_categorie = C.id_categorie AND P.important = '1'");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    // reserver a l'administrateur
    public function readAll()
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` P, `gammes` G, categories C
        WHERE P.id_gamme = G.id_gamme AND P.id_categorie = C.id_categorie");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public function readSuggest($limit)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` P, `gammes` G, categories C
        WHERE P.id_gamme = G.id_gamme AND P.id_categorie = C.id_categorie LIMIT $limit");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function readAllByCat($cat)
    {
        if ($cat != "all") {
            $sql = "SELECT * FROM `products` P, `gammes` G, categories C
            WHERE P.id_gamme = G.id_gamme AND P.id_categorie = C.id_categorie AND C.cat_libele = '$cat'";
        } else {
            $sql = "SELECT * FROM `products` P, `gammes` G, categories C
            WHERE P.id_gamme = G.id_gamme AND P.id_categorie = C.id_categorie";
        }
        $query = $this->connect->getConnect()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function read_gam_cat_eff($table)
    {
        if ($table == "gamme") {
            $sql = "SELECT * FROM `gammes`";
        } else if ($table == "effect") {
            $sql = "SELECT * FROM `effects`";
        } else {
            $sql = "SELECT * FROM `categories`";
        }
        $query = $this->connect->getConnect()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public function readCount()
    {
        $query = $this->connect->getConnect()->prepare("SELECT COUNT(`id_product`) FROM `products`");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_NUM);
        return $result;
    }
    public function readAllSearch(string $search)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` P, `categories` C
            WHERE  C.libele = :libele
            LIKE '%$search%' AND P.id_user = Cid_user 
            OR username LIKE '%$search%' 
            OR user_description LIKE '%$search%'
            LIMIT 6");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readAllPostUser($idUser)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` WHERE `products`.`id_user` = :id_user ORDER BY add_date DESC");
        $query->bindParam("id_user", $idUser);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update(int $idProduit, array $data)
    {
        if ($data["image"] == "") {
            $sql = "UPDATE `products` SET 
                `name`= :prod_name,
                `description`= :prod_desc,
                `id_categorie`= :categorie,
                `id_gamme`= :gamme,
                `ingredient`= :ingredient
                WHERE id_product = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_name", $data['name']);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("categorie", $data['id_categorie']);
            $query->bindParam("gamme", $data['id_gamme']);
            $query->bindParam("ingredient", $data['ingredient']);
            $query->bindParam("id", $idProduit);
        } else {
            $sql = "UPDATE `products` SET 
                `name`= :prod_name,
                `description`= :prod_desc,
                `id_categorie`= :categorie,
                `id_gamme`= :gamme,
                `picture`= :picture,
                `ingredient`= :ingredient
                WHERE id_product = :id";
            $query = $this->connect->getConnect()->prepare($sql);
            $query->bindParam("prod_name", $data['name']);
            $query->bindParam("prod_desc", $data['description']);
            $query->bindParam("categorie", $data['id_categorie']);
            $query->bindParam("gamme", $data['id_gamme']);
            $query->bindParam("picture", $data['image']);
            $query->bindParam("ingredient", $data['ingredient']);
            $query->bindParam("id", $idProduit);
        }


        $query->execute();
    }

    public function delete($idProduit)
    {
        $sql = "DELETE FROM `products` WHERE `products`.`id_product` = :id";
        $query = $this->connect->getConnect()->prepare($sql);
        $query->bindParam("id", $idProduit);
        $query->execute();
    }
    // dev
    public function readLike($idProduit)
    {
        $query = $this->connect->getConnect()->prepare("SELECT * FROM `products` ORDER BY id_product DESC");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
