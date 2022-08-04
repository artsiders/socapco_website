DROP DATABASE IF EXISTS `socapco`;
CREATE DATABASE IF NOT EXISTS `socapco` DEFAULT CHARACTER SET utf8 ;
USE `socapco` ;

-- -----------------------------------------------------
-- Table `socapco`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`user` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(255) NOT NULL,
  `join_date` DATETIME NOT NULL DEFAULT CURRENT_TIME,
  `is_admin` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`idusers`)
);


-- -----------------------------------------------------
-- Table `socapco`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`categories` (
  `idcategories` INT NOT NULL AUTO_INCREMENT,
  `libele` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcategories`)
);


-- -----------------------------------------------------
-- Table `socapco`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`product` (
  `idproduct` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `decription` TEXT NULL,
  `idcategories` INT NOT NULL,
  PRIMARY KEY (`idproduct`),
  FOREIGN KEY (idcategories) REFERENCES categories(idcategories)
);
