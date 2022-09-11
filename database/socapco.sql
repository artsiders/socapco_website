DROP DATABASE IF EXISTS `socapco`;
CREATE DATABASE IF NOT EXISTS `socapco` DEFAULT CHARACTER SET utf8 ;
USE `socapco` ;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 sep. 2022 à 12:38
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `socapco`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `cat_libele` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `cat_libele`) VALUES
(1, 'adultes'),
(2, 'enfants'),
(3, 'bébés');

-- --------------------------------------------------------

--
-- Structure de la table `effects`
--

CREATE TABLE `effects` (
  `id_effect` int(11) NOT NULL,
  `eff_libele` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `effects`
--

INSERT INTO `effects` (`id_effect`, `eff_libele`) VALUES
(1, 'hydratant'),
(2, 'eclaircissant'),
(3, 'gommant');

-- --------------------------------------------------------

--
-- Structure de la table `gammes`
--

CREATE TABLE `gammes` (
  `id_gamme` int(11) NOT NULL,
  `gam_libele` varchar(45) NOT NULL,
  `gam_color` varchar(45) NOT NULL DEFAULT '#ffb347'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gammes`
--

INSERT INTO `gammes` (`id_gamme`, `gam_libele`, `gam_color`) VALUES
(1, 'divine clarté', '#ecb622'),
(2, 'carmel bébé', '#476cff'),
(3, 'belle face', '#cf24ff');

-- --------------------------------------------------------

--
-- Structure de la table `plastique`
--

CREATE TABLE `plastique` (
  `id_plastique` int(11) NOT NULL,
  `description` text NOT NULL,
  `grammage` int(11) NOT NULL,
  `unite` varchar(45) NOT NULL DEFAULT 'ml',
  `picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `add_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plastique`
--

INSERT INTO `plastique` (`id_plastique`, `description`, `grammage`, `unite`, `picture`, `add_date`, `id_user`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:29', 3),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:30', 3),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:31', 3),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:32', 3),
(5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:33', 3),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'ml', 'default.png', '2022-09-10 06:27:34', 3);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `grammage` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `ingredient` text DEFAULT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_gamme` int(11) NOT NULL,
  `id_effect` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `important` int(11) NOT NULL DEFAULT 0,
  `picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `add_date` datetime NOT NULL DEFAULT current_timestamp(),
  `unite` varchar(45) NOT NULL DEFAULT 'g'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_product`, `name`, `grammage`, `description`, `ingredient`, `id_categorie`, `id_gamme`, `id_effect`, `id_user`, `important`, `picture`, `add_date`, `unite`) VALUES
(1, 'mandarine', 300, 'dqdacaeqafccdczacddsdacdaasf', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 1, 1, 3, 3, 1, '1.png', '2022-09-10 06:27:29', 'g'),
(2, 'prune', 600, 'dqdacaeqafccdczacddsdacdaasf', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 1, 1, 3, 3, 1, '2.png', '2022-09-10 06:27:29', 'ml'),
(3, 'carote', 300, 'dqdacaeqafccdczacddsdacdaasf', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 3, 2, 1, 3, 0, 'e5e24097148c5dc0b0b340f57a97511c.jpg', '2022-09-10 06:27:29', 'g'),
(4, 'orange', 700, 'dqdacaeqafccdczacddsdacdaasf', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 1, 1, 3, 3, 1, '4.png', '2022-09-10 06:27:29', 'ml'),
(5, 'yellow', 300, 'dqdacaeqafccdczacddsdacdaasf', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 1, 1, 2, 3, 1, '5.png', '2022-09-10 06:27:29', 'g'),
(6, 'pomme', 300, 'qdsdqcsq qdfqfdqs fqsfd qfsfq', 'dqdac,aeqaf,ccdcza,cddsdacd,aasf', 1, 1, 1, 3, 1, '8152bf61811cd48954b925328d3ff85b.png', '2022-09-10 06:27:29', 'g'),
(7, 'banane', 100, 'test', '', 3, 2, 1, 3, 0, 'f420eac4c2cad1ecfafd131f40026839.jpg', '2022-09-10 14:14:36', 'g'),
(8, 'avocat', 100, 'lorem ipsum dolor sit amet consectetur adipisicing elit. consequatur rem atque iure recusandae distinctio labore velit, eveniet similique ut beatae veritatis, fuga ea eligendi sunt eius doloremque possimus cupiditate incidunt.', '', 1, 1, 2, 3, 0, '5f0309887af4a538ca9b30a913ef81b4.png', '2022-09-10 14:22:41', 'g'),
(9, 'goyave', 100, 'lorem ipsum dolor sit amet consectetur adipisicing elit. consequatur rem atque iure recusandae distinctio labore velit, eveniet similique ut beatae veritatis, fuga ea eligendi sunt eius doloremque possimus cupiditate incidunt.', '', 3, 2, 1, 3, 0, '558d650ff569172b2451a91036973528.jpg', '2022-09-10 14:26:02', 'g'),
(10, 'bonbon', 100, 'lorem ipsum dolor sit amet consectetur adipisicing elit. consequatur rem atque iure recusandae distinctio labore velit, eveniet similique ut beatae veritatis, fuga ea eligendi sunt eius doloremque possimus cupiditate incidunt.', '', 3, 2, 1, 3, 0, '57d6ab61f25646dad720b2344923b1b7.jpg', '2022-09-10 14:26:52', 'g'),
(11, 'biscuit', 100, 'lorem ipsum dolor sit amet consectetur adipisicing elit. consequatur rem atque iure recusandae distinctio labore velit, eveniet similique ut beatae veritatis, fuga ea eligendi sunt eius doloremque possimus cupiditate incidunt.', '', 2, 2, 1, 3, 0, 'c0e713b4ce5e1b7227011b54acf0149d.jpg', '2022-09-10 14:27:32', 'g'),
(12, 'eau de cologne', 180, 'hzii jeizfboufuzeof', 'ter, dfe, test, tet', 3, 2, 1, 2, 0, '08547f561b8a6fe1f54feaff43615c33.jpg', '2022-09-10 15:38:47', 'g'),
(13, 'test', 130, 'tesr', '', 1, 1, 1, 2, 0, '5f07c1f59f7facd87d0bb5d4605338c1.jpg', '2022-09-10 16:33:14', 'ml'),
(14, 'test', 180, 'kfbjo  jeoincl\r\n\r\nefz', 'qsqkdhjkbhvbkjd', 3, 2, 1, 2, 0, 'd25f9fe6f1f48aa71c88bce72f4fcd49.png', '2022-09-10 16:42:59', 'ml');

-- --------------------------------------------------------

--
-- Structure de la table `soap`
--

CREATE TABLE `soaps` (
  `id_soap` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `grammage` int(11) NOT NULL,
  `unite` varchar(45) NOT NULL DEFAULT 'g',
  `picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `add_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `soaps`
--

INSERT INTO `soaps` (`id_soap`, `name`, `description`, `grammage`, `unite`, `picture`, `add_date`, `id_user`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:29', 3),
(2, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:30', 3),
(3, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:31', 3),
(4, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:32', 3),
(5, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:33', 3),
(6, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:34', 3),
(7, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:35', 3),
(8, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:36', 3),
(9, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n', '200', 'g', 'default.png', '2022-09-10 06:27:37', 3),
(10, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dignissimos quod aut, praesentium dolorum, placeat animi quo atque expedita quidem sapiente. Earum omnis consectetur magni est similique repudiandae sit dolor?\r\n','200', 'g', 'default.png', '2022-09-10 06:27:38', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `join_date` datetime NOT NULL DEFAULT current_timestamp(),
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `login`, `pass`, `email`, `picture`, `join_date`, `is_admin`) VALUES
(1, 'default_user', 'password', 'default@gmail.com', 'default.png', '2022-09-10 06:27:29', 0),
(2, 'socapco', '$2y$10$qYikIJkPtopKLXnDDwT6Y.VNUWC0hm.5Wx426zy4xvDONyX/Kmle6', 'contact@socapco.com', 'logo.jpg', '2022-09-10 14:13:31', 1),
(3, 'admin', '$2y$10$t.AKnv82Br7vt.wxkHXtWOLn01VGio79JdLJIIibOvqKoQZAU5Aie', 'jimsky699@gmail.com', 'default.png', '2022-09-10 14:13:32', 2),
(4, 'dimitri', '$2y$10$zQC0whFnW2ivr9nRc/YQJua/aGaC3gKBxQXaGqYULdcIlK4bnRXy.', 'dimitri@gmail.com', 'default.png', '2022-09-10 14:33:37', 0),
(5, 'love', '$2y$10$WoYE/yT/O/bZy7QXCXuVYOPaNK.y9FemLkCqH/EW6AQJ/tGDiXWgm', 'love@gmail.com', 'default.png', '2022-09-10 14:48:29', 0),
(6, 'technicien', '$2y$10$zRE6dNHO/7C2PEjGqw9sOuIVTm24KhJFAWB6IFHtZ8PLpw109PtSi', 'test@gmail.com', '4c9e2bc9ce44ce5160f748dd2a0af55a.jpg', '2022-09-10 15:43:49', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `effects`
--
ALTER TABLE `effects`
  ADD PRIMARY KEY (`id_effect`);

--
-- Index pour la table `gammes`
--
ALTER TABLE `gammes`
  ADD PRIMARY KEY (`id_gamme`);

--
-- Index pour la table `plastique`
--
ALTER TABLE `plastique`
  ADD PRIMARY KEY (`id_plastique`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_effect` (`id_effect`),
  ADD KEY `id_gamme` (`id_gamme`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `soaps`
--
ALTER TABLE `soaps`
  ADD PRIMARY KEY (`id_soap`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `effects`
--
ALTER TABLE `effects`
  MODIFY `id_effect` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `gammes`
--
ALTER TABLE `gammes`
  MODIFY `id_gamme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `plastique`
--
ALTER TABLE `plastique`
  MODIFY `id_plastique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `soap`
--
ALTER TABLE `soaps`
  MODIFY `id_soap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plastique`
--
ALTER TABLE `plastique`
  ADD CONSTRAINT `plastique_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_effect`) REFERENCES `effects` (`id_effect`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`id_gamme`) REFERENCES `gammes` (`id_gamme`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `soap`
--
ALTER TABLE `soaps`
  ADD CONSTRAINT `soap_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
