-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mars 2021 à 16:59
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

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

DROP TABLE IF EXISTS `faq`;
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
(2, 'Quelle est la durée d un match de handball ?', 'Deux mi-temps de 30 minutes', '2021-01-15 10:35:00', NULL, 6),
(3, 'Quel est le nombre de joueurs dans une équipe de handball', NULL, '2021-01-15 12:15:00', NULL, 7);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

DROP TABLE IF EXISTS `ligue`;
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

DROP TABLE IF EXISTS `user`;
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
(41, 'Adrien', '$2y$05$IB4egMq7gcA8QRFiVwh1J.TR/2KLrKfNtA4LVXS738Q5jD4Dgmz.6', 'adrien@gmail.com', 1, 5),
(42, 'Yohann', '$2y$05$5OsGkW8hnzGGAbzPjOv4yut4xAaGLb4yrCy0toRgLIr4ExBYg4v8q', 'yo@g', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
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
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
