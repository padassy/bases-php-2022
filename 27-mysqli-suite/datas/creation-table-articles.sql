-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 25 nov. 2022 à 10:22
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `premiere`
--
DROP DATABASE IF EXISTS `premiere`;
CREATE DATABASE IF NOT EXISTS `premiere` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `premiere`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idarticles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'la clef primaire de ma table comme identifiant unique ',
  `titrearticles` varchar(180) NOT NULL COMMENT 'titre unique de 180 caractères maximum',
  `textearticles` text NOT NULL COMMENT 'du texte',
  `datearticles` datetime DEFAULT current_timestamp() COMMENT 'datetime ou timestamp choix par rapport au bug de 2038',
  PRIMARY KEY (`idarticles`),
  UNIQUE KEY `titrearticles` (`titrearticles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;