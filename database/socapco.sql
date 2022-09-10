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
  `gam_color` VARCHAR(45) NOT NULL DEFAULT '#ffb347',
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
  `eff_color` VARCHAR(45) NOT NULL DEFAULT '#ffb347',
  PRIMARY KEY (`id_effect`)
);

-- -----------------------------------------------------
-- Table `socapco`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `socapco`.`products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `grammage` INT NOT NULL,
  `description` TEXT NULL,
  `ingredient` TEXT NULL,
  `id_categorie` INT NOT NULL,
  `id_gamme` INT NOT NULL,
  `id_effect` INT NOT NULL,
  `id_user` INT NOT NULL,
  `important` INT NOT NULL DEFAULT 0,
  `picture` VARCHAR(255) NOT NULL DEFAULT 'default.png',
  `add_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_product`),
  FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie),
  FOREIGN KEY (id_effect) REFERENCES effects(id_effect),
  FOREIGN KEY (id_gamme) REFERENCES gammes(id_gamme),
  FOREIGN KEY (id_user) REFERENCES users(id_user)
);


INSERT INTO `categories` (`cat_libele`) VALUES 
('adultes'), 
('enfants'), 
('bébés');


INSERT INTO `gammes` (`gam_libele`, `gam_color`, `id_categorie`) VALUES 
('divine clarté', '#ffb347', '1'), 
('carmel bébé', '#ffb347', '1');

INSERT INTO `effects` (`eff_libele`, `eff_color`) VALUES 
('hydratant', '#ffb347'), 
('eclaircissant', '#ffb347'), 
('gommant', '#ffb347');

INSERT INTO `users` (`login`, `pass`, `email`, `picture`) VALUES ('default_user', 'password', 'default@gmail.com', 'default.png');

INSERT INTO `products` (`name`, `grammage`, `description`, `ingredient`, `id_categorie`, `id_gamme`, `id_effect`, `id_user`, `important`, `picture`, `add_date`) 
VALUES 
('test', '300', 'dqdacaeqafccdczacddsdacdaasf','dqdac,aeqaf,ccdcza,cddsdacd,aasf', '1', '2', '3', '1', '1', '1.png', current_timestamp()), 
('test', '600', 'dqdacaeqafccdczacddsdacdaasf','dqdac,aeqaf,ccdcza,cddsdacd,aasf', '1', '2', '3', '1', '1', '2.png', current_timestamp()), 
('test', '300', 'dqdacaeqafccdczacddsdacdaasf','dqdac,aeqaf,ccdcza,cddsdacd,aasf', '1', '2', '3', '1', '1', '3.png', current_timestamp()), 
('test', '700', 'dqdacaeqafccdczacddsdacdaasf','dqdac,aeqaf,ccdcza,cddsdacd,aasf', '1', '2', '3', '1', '1', '4.png', current_timestamp()), 
('test', '300', 'dqdacaeqafccdczacddsdacdaasf','dqdac,aeqaf,ccdcza,cddsdacd,aasf', '1', '2', '3', '1', '1', '5.png', current_timestamp()), 
('qdsdd', '300', 'qdsdqcsq qdfqfdqs fqsfd qfsfq', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', '2', '1', '1', '1', '1', 'default.png', current_timestamp());
