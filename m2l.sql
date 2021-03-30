-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 14:16
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m2l`
--
CREATE DATABASE IF NOT EXISTS `m2l` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `m2l`;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reponse` varchar(100) DEFAULT NULL,
  `dat_question` datetime NOT NULL,
  `dat_reponse` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 'Quelle est la taille d une cage de foot ?', NULL, '2021-01-15 10:30:00', NULL, 3),
(2, 'Quelle est la durée d un match de handball ?', NULL, '2021-01-15 10:35:00', NULL, 6),
(3, 'Quel est le nombre de joueurs dans une équipe de handball', NULL, '2021-01-15 12:15:00', NULL, 7),
(16, 'que veux dire la règle \" marcher\" ?', NULL, '2021-03-30 01:58:06', NULL, 47),
(17, 'Comment les points se comptent ?', NULL, '2021-03-30 01:58:39', NULL, 46);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `id_ligue` int(11) NOT NULL,
  `lib_ligue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligue`
--

INSERT INTO `ligue` (`id_ligue`, `lib_ligue`) VALUES
(1, 'Toutes les ligues'),
(2, 'Ligue de basket'),
(3, 'Ligue de volley'),
(4, 'Ligue de handball'),
(5, 'Ligue de football');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id_usertype` int(11) NOT NULL,
  `id_ligue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `mail`, `id_usertype`, `id_ligue`) VALUES
(1, 'superadmin', '$2y$10$MQeERlDxZPUEOQb3eZzQB.I1eNr305Qclfb9Y858wKVPtSWrDroRO', 'superadmin@m2l.fr', 3, 1),
(2, 'adminfoot', '$2y$10$doz5uwCsiAkD8UKGd2slDeOB8bLvpqXssnYhLMJlWPtC.nXJBpttK', 'adminfoot@m2l.fr', 2, 5),
(3, 'userfoot1', '$2y$10$Y14Q3nNDWKj1Xk/2H9Emr.SF0wOYuIv2oivLKDiFZohsawCb.AhSK', 'userfoot1@m2l.fr', 1, 5),
(4, 'userfoot2', '$2y$10$/BDC6rHTo/ufEe0hu1tweuQIs3mfPW/I6cfADw4u6lJI9P6/x2hLm', 'userfoot2@m2l.fr', 1, 5),
(5, 'adminhand', '$2y$10$IrU3LSCTWG/lCTIc5Cv2EOUiGz9VAaXejML4KiRC4kJUxl0HHMgFG', 'adminhand@m2l.fr', 2, 4),
(6, 'userhand1', '$2y$10$8ZJw.M9bD/Zqv4z3VfW23uwZQlt3adE7DZD/rkH.PCvB5B2.QVfGy', 'userhand1@m2l.fr', 1, 4),
(7, 'userhand2', '$2y$10$2ygKyuMJNCwAUwNrRSE.1emIUyXLfbLO6dgiGp5VFJovWHPUZKfcG', 'userhand2@m2l.fr', 1, 4),
(8, 'adminvolley', '$2y$10$CEshAiL8Cex1eqYhy6Und.NTEcBKgUYaMqtYQNRtySuUrxce7sUga', 'adminvolley@m2l.fr', 2, 3),
(43, 'yohan', '$2y$10$7UtUFQpdzsJ7vse8zIswhel0j.yQBpRpwN/EP8WviQQ2ajKxMecMq', 'yohan@mail.fr', 1, 5),
(45, 'damien', '$2y$10$0W8k8BHn2bJPRezsNhEtB.0xjmM1eWsdnVdgwUk/ly9ydHQqWGqMu', 'damien@mail.fr', 1, 4),
(46, 'gus', '$2y$10$BRWbUrKaVWIeKXjxXZbM3.AYd7jy3Lec2mjXD7rejGckHbnz3VrJC', 'gus@mail.fr', 1, 3),
(47, 'adrien', '$2y$10$b3SDcRaLG0eu4BffzyGrPuo2OiX9eZL2zhMi8reUkcnjbyHirynP2', 'adrien@mail.fr', 1, 2),
(48, 'adminbasket', '$2y$10$0W8k8BHn2bJPRezsNhEtB.0xjmM1eWsdnVdgwUk/ly9ydHQqWGqMu', 'adminbasket@m2l.fr', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` int(11) NOT NULL,
  `lib_usertype` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`, `description`) VALUES
(1, 'utilisateur', 'Utilisateur'),
(2, 'admin', 'Administrateur'),
(3, 'superadmin', 'Administrateur de toutes les ligues');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `faq_user_FK` (`id_user`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id_ligue`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_usertype_FK` (`id_usertype`),
  ADD KEY `user_ligue0_FK` (`id_ligue`);

--
-- Index pour la table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id_usertype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ligue0_FK` FOREIGN KEY (`id_ligue`) REFERENCES `ligue` (`id_ligue`),
  ADD CONSTRAINT `user_usertype_FK` FOREIGN KEY (`id_usertype`) REFERENCES `usertype` (`id_usertype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
