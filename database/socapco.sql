DROP DATABASE IF EXISTS `socapco`;
CREATE DATABASE IF NOT EXISTS `socapco` DEFAULT CHARACTER SET utf8 ;
USE `socapco` ;

-- -----------------------------------------------------
-- Table `socapco`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `picture` VARCHAR(255) NOT NULL,
  `join_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `is_admin` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`)
);


-- -----------------------------------------------------
-- Table `socapco`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`categories` (
  `id_categorie` INT NOT NULL AUTO_INCREMENT,
  `cat_libele` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categorie`)
);

-- -----------------------------------------------------
-- Table `socapco`.`gammes`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `socapco`.`gammes` (
  `id_gamme` INT NOT NULL AUTO_INCREMENT,
  `gam_libele` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_gamme`)
);

-- -----------------------------------------------------
-- Table `socapco`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`product` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `decription` TEXT NULL,
  `id_categorie` INT NOT NULL,
  `id_gamme` INT NOT NULL,
  `picture` VARCHAR(255) NOT NULL DEFAULT 'default.png',
  `add_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_product`),
  FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie),
  FOREIGN KEY (id_gamme) REFERENCES gammes(id_gamme)
);


INSERT INTO `categories` (`id_categorie`, `cat_libele`) VALUES 
(NULL, 'adultes'), 
(NULL, 'enfants'), 
(NULL, 'bébés');


INSERT INTO `gammes` (`id_gamme`, `gam_libele`) VALUES 
(NULL, 'divine clarté'), 
(NULL, 'carmel bébé');


INSERT INTO `product` (`id_product`, `name`, `decription`, `id_categorie`, `id_gamme`) VALUES 
(NULL, 'test', 'kfzejou eizblufbiy', '1', '2'), 
(NULL, 'zdiofbauo ', 'aobmfozuei ezlbovze', '3', '1');
