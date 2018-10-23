-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 oct. 2018 à 07:43
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sym4_nicolas`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idauteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lelogin` varchar(100) NOT NULL,
  `lemdp` varchar(100) NOT NULL,
  `lenom` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idauteur`),
  UNIQUE KEY `lenom_UNIQUE` (`lelogin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idauteur`, `lelogin`, `lemdp`, `lenom`) VALUES
(1, 'Kuentz', 'Kuentz', 'Kuentz Marc'),
(2, 'Delpierre', 'Delpierre', 'Delpardieu Pierre');

-- --------------------------------------------------------

--
-- Structure de la table `lespages`
--

DROP TABLE IF EXISTS `lespages`;
CREATE TABLE IF NOT EXISTS `lespages` (
  `idlespages` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `letitre` varchar(250) NOT NULL,
  `letexte` text NOT NULL,
  `ladate` datetime DEFAULT CURRENT_TIMESTAMP,
  `auteur_idauteur` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idlespages`),
  KEY `fk_lespages_auteur1_idx` (`auteur_idauteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lespages`
--

INSERT INTO `lespages` (`idlespages`, `letitre`, `letexte`, `ladate`, `auteur_idauteur`) VALUES
(1, 'Pteroocactus', 'Pterocactus (du grec ancien « aile » en référence à la forme des pétales en soucoupe et aux graines qui se trouvent à l\'intérieur) est un genre de la famille des cactus comprenant neuf espèces.\r\n\r\nToutes les Pterocactus ont des racines tubéreuses et sont endémiques du sud et de l\'ouest de l\'Argentine.\r\n\r\nLe mot cactus vient du grec ancien ???t?? / káktos, désignant le chardon. Il a été utilisé comme le nom du premier genre de ces plantes par Carl von Linné, avant que de nombreux autres noms de genres en soient séparés. Il y a désaccord sur la forme du pluriel. Le pluriel grec est ???t?? / káktoi. Quand le nom est latinisé, le pluriel est cacti. Cette forme est adoptée notamment en anglais. Le français, qui préfère ne pas utiliser les pluriels latins, dit « cactus » au pluriel comme au singulier.', '2018-10-21 19:19:00', 2),
(2, 'Quiabentia verticillata', 'Description\r\n\r\nArbre ou arbuste de 2 à 15m de haut à tiges et feuilles succulentes. Feuilles ovales ou lancéolées de 4 à 5cm de long sur 2 cm de large. Aréoles blanches, portant des glochides et plusieurs aiguillons longs, jusqu\'à 7cm.\r\nFloraison diurne en été. Petites fleurs rouge pâle.\r\nFruits oblongs, grandes graines rondes et plates à arille blanche et lisse.\r\n\r\nCulture\r\n\r\nPeu cultivé du fait de ses glochides et de ses aiguillons cassants.\r\nCulture délicate. Très sensible à l\'humidité hivernale : hiverner au chaud (min 15°C) et au sec. Du fait de cette sensibilité, très mauvais porte greffe.\r\n\r\nReproduction principalement par bouturage de tiges.\r\n\r\nÉtymologie\r\n\r\nQuiabentia : du nom vernaculaire de l\'espèce brésilienne, quiabento.\r\nverticillata : de la disposition des rameaux en verticilles.\r\n\r\nHabitat\r\n\r\nArgentine (Nord-Est), Bolivie (notamment Santa Cruz) et Paraguay (notamment Boqueron, Chaco, Nueva Asunción).\r\n\r\nAnecdotes\r\n\r\nPublié en 1923 par Vaupel sous le nom Pereskia verticillata, l\'année où Britton & Rose décident de créer le genre Quiabentia pour leur Pereskia zehntneri, reclassement suivi par Vaupel en 1925.\r\n\r\nFruit comestible, nom vernaculaire : \r\n\r\npaxúk (pluriel : paxúki).\r\n\r\nExposition\r\n\r\nVive (luminosité maxi, plein soleil accepté)\r\n\r\nTempérature mini\r\n\r\n15°C\r\n\r\nArrosages\r\n\r\nHiver : faible. Été : moyen.', '2018-10-21 19:23:36', 1),
(3, 'Pereskia', 'Ce genre est composé d\'une dizaine d\'espèces arbustives ou buissonnantes, croissant dans les zones tropicales d\'Amérique. La floraison se produit durant la saison humide. Ce genre a la particularité rare chez les cactacées de porter des feuilles apparentes.\r\n\r\nCe genre a été nommé par le Père Charles Plumier, religieux de l\'ordre des Minimes, en hommage à l’astronome français Nicolas-Claude Fabri de Peiresc, lors de la première description de Pereskia aculeata en 1703 dans son ouvrage \"Nova Plantarum Americanarum Genera\", page 35.\r\n\r\nLes règles internationales de la taxonomie fixant comme point de départ de la reconnaissance des descriptions botaniques l’invention de la taxonomie binomiale par Linné le nom de Plumier ne figure pas comme auteur initial.\r\n\r\nDe ce fait, l\'auteur officiel du genre en est Philip Miller qui en fera une description de reprise dans la 4e édition de \"The Gardeners Dictionary\" en 1754.', '2018-10-21 19:28:15', 1),
(4, 'Colorado Cookie', 'Autoflower grow. Auto Colorado Cookies® by Dutch Passion. Coming from Colorado with some of the strongest indica-dominant auto genetics we have found so far. This is a USA autoflowering variety combining a delicious fruity flavour with typical Dutch Passion extreme potency and yields', '2018-10-22 13:57:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `lespages_has_rubriques`
--

DROP TABLE IF EXISTS `lespages_has_rubriques`;
CREATE TABLE IF NOT EXISTS `lespages_has_rubriques` (
  `lespages_idlespages` int(10) UNSIGNED NOT NULL,
  `rubriques_idrubriques` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`lespages_idlespages`,`rubriques_idrubriques`),
  KEY `fk_lespages_has_rubriques_rubriques1_idx` (`rubriques_idrubriques`),
  KEY `fk_lespages_has_rubriques_lespages_idx` (`lespages_idlespages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lespages_has_rubriques`
--

INSERT INTO `lespages_has_rubriques` (`lespages_idlespages`, `rubriques_idrubriques`) VALUES
(2, 1),
(4, 1),
(1, 2),
(3, 2),
(4, 2),
(1, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
CREATE TABLE IF NOT EXISTS `rubriques` (
  `idrubriques` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(120) NOT NULL,
  `ladesc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idrubriques`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubriques`
--

INSERT INTO `rubriques` (`idrubriques`, `titre`, `ladesc`) VALUES
(1, 'Les Opuntioïdées', 'Cette famille comprend les variétés Opuntia, Pterocactus, Pereskiopsis, Quiabentia et Tacinga.'),
(2, 'Les Péreskioïdées', 'Une famille qui compte notamment les cactus Pereskia, qui eux-mêmes regroupent près de 20 sous-espèces !'),
(3, 'Les Cactoïdées', 'C\'est de loin la famille qui comprend le plus de sous-espèces. De quoi ravir les latinistes !');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lespages`
--
ALTER TABLE `lespages`
  ADD CONSTRAINT `fk_lespages_auteur1` FOREIGN KEY (`auteur_idauteur`) REFERENCES `auteur` (`idauteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `lespages_has_rubriques`
--
ALTER TABLE `lespages_has_rubriques`
  ADD CONSTRAINT `fk_lespages_has_rubriques_lespages` FOREIGN KEY (`lespages_idlespages`) REFERENCES `lespages` (`idlespages`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lespages_has_rubriques_rubriques1` FOREIGN KEY (`rubriques_idrubriques`) REFERENCES `rubriques` (`idrubriques`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
