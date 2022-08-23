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
  `id_categorie` INT NOT NULL,
  FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie),
  PRIMARY KEY (`id_gamme`)
);

-- -----------------------------------------------------
-- Table `socapco`.`effect`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `socapco`.`effects` (
  `id_effect` INT NOT NULL AUTO_INCREMENT,
  `eff_libele` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_effect`)
);

-- -----------------------------------------------------
-- Table `socapco`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `decription` TEXT NULL,
  `id_categorie` INT NOT NULL,
  `id_gamme` INT NOT NULL,
  `id_effect` INT NOT NULL,
  `important` INT NOT NULL DEFAULT 0,
  `picture` VARCHAR(255) NOT NULL DEFAULT 'default.png',
  `add_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_product`),
  FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie),
  FOREIGN KEY (id_effect) REFERENCES effects(id_effect),
  FOREIGN KEY (id_gamme) REFERENCES gammes(id_gamme)
);


INSERT INTO `categories` (`id_categorie`, `cat_libele`) VALUES 
(NULL, 'adultes'), 
(NULL, 'enfants'), 
(NULL, 'bébés');


INSERT INTO `gammes` (`id_gamme`, `gam_libele`,`id_categorie`) VALUES 
(NULL, 'divine clarté', '1'), 
(NULL, 'carmel bébé', '1');

INSERT INTO `effects` (`id_effect`, `eff_libele`) VALUES 
(NULL, 'hydratant'), 
(NULL, 'eclaircissant'), 
(NULL, 'gommant');


INSERT INTO `products` (`id_product`, `name`, `decription`, `id_categorie`, `id_gamme`, `id_effect`) VALUES 
(NULL, 'test', 'kfzejou eizblufbiy', '1', '2', '1'), 
(NULL, 'zdiofbauo ', 'aobmfozuei ezlbovze', '3', '1', '3');

INSERT INTO `products` (`id_product`, `name`, `decription`, `id_categorie`, `id_gamme`, `id_effect`, `important`, `picture`, `add_date`) 
VALUES 
(NULL, 'test', 'dqdacaeqafccdczacddsdacdaasf', '1', '2', '3', '0', 'default.png', current_timestamp()), 
(NULL, 'qdsdd', 'qdsdqcsq qdfqfdqs fqsfd qfsfq', '2', '1', '1', '0', 'default.png', current_timestamp());
