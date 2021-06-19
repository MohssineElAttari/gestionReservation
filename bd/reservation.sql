-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 19 Juin 2021 à 18:18
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

CREATE TABLE `bien` (
  `id_bien` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `vue` varchar(254) DEFAULT NULL,
  `id_tarification` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bien`
--

INSERT INTO `bien` (`id_bien`, `nom`, `vue`, `id_tarification`, `image`, `id_type`) VALUES
(1, 'Appartement', NULL, 1, 'apartment1.jpeg', 1),
(2, 'Bungalow', NULL, 2, 'bungalow.jpeg', 2),
(3, 'Chambre Simple', 'vue intérieure', 3, 'chambre_simple_interieur.jpg', 3),
(4, 'Chambre Simple', 'vue extérieure', 4, 'chambre_simple_exterieur.jpg', 3),
(5, ' Chambre lit double', 'vue intérieure', 5, 'chambre_double_interieure.jpeg', 3),
(6, 'Chambre lit double ', 'vue extérieure', 6, 'chambre_double_exterieur.jpeg', 3),
(7, 'Chambre deux lit simple', 'vue intérieure', 7, 'chambre_simple_deux_lit.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `id_enfant` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `age` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enfant`
--

INSERT INTO `enfant` (`id_enfant`, `id_utilisateur`, `age`) VALUES
(1, 10, '14');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_reservation` int(11) NOT NULL,
  `id_bien` int(11) NOT NULL,
  `date_entrer` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `id_pension` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_reservation`, `id_bien`, `date_entrer`, `date_sortie`, `id_pension`) VALUES
(1, 1, '2021-05-11', '2021-05-21', NULL),
(1, 3, '2021-05-05', '2021-05-13', NULL),
(2, 3, '2021-05-10', '2021-05-22', NULL),
(43, 2, NULL, NULL, 1),
(44, 1, NULL, NULL, 1),
(44, 2, NULL, NULL, 1),
(44, 3, '2021-05-14', '2021-05-30', 1),
(45, 1, NULL, NULL, 1),
(45, 2, NULL, NULL, 1),
(46, 1, NULL, NULL, 1),
(47, 1, '2021-05-13', '2021-05-29', 1),
(63, 1, '2021-05-19', '2021-05-22', 1),
(64, 1, '2021-05-13', '2021-05-15', 1),
(65, 1, NULL, NULL, 1),
(65, 3, '2021-05-13', '2021-05-21', 3),
(66, 2, NULL, NULL, 1),
(67, 2, NULL, NULL, 1),
(67, 3, NULL, NULL, 1),
(68, 3, '2021-06-16', '2021-06-27', 3),
(69, 3, NULL, NULL, 1),
(70, 2, NULL, NULL, 1),
(70, 3, NULL, NULL, 1),
(71, 3, '2021-06-17', '2021-06-25', 2),
(74, 3, NULL, NULL, 1),
(75, 1, NULL, NULL, 1),
(76, 3, '2021-06-16', '2021-06-24', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pension`
--

CREATE TABLE `pension` (
  `id_pension` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `id_tarification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pension`
--

INSERT INTO `pension` (`id_pension`, `nom`, `id_tarification`) VALUES
(1, 'demi complete', 9),
(2, 'demi dej/dej', 8),
(3, 'demi petit dej/diner', 10);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_utilisateur`, `date_creation`) VALUES
(1, 2, '0000-00-00 00:00:00'),
(2, 3, '0000-00-00 00:00:00'),
(3, 1, '2021-05-28 13:55:06'),
(4, 1, '2021-05-28 14:01:20'),
(5, 1, '2021-05-28 14:03:51'),
(6, 1, '2021-05-28 14:06:12'),
(7, 1, '2021-05-28 14:13:55'),
(8, 1, '2021-05-28 14:14:19'),
(9, 1, '2021-05-28 14:16:07'),
(10, 1, '2021-05-28 14:16:39'),
(11, 1, '2021-05-28 14:17:19'),
(12, 1, '2021-05-28 14:54:06'),
(13, 1, '2021-05-28 15:10:52'),
(14, 1, '2021-05-28 15:14:25'),
(15, 1, '2021-05-28 15:15:14'),
(16, 1, '2021-05-28 15:16:03'),
(17, 1, '2021-05-28 15:19:12'),
(18, 1, '2021-05-28 15:23:28'),
(19, 1, '2021-05-28 15:24:29'),
(20, 1, '2021-05-28 15:24:59'),
(21, 1, '2021-05-28 15:25:41'),
(22, 1, '2021-05-28 15:28:20'),
(23, 1, '2021-05-28 15:37:42'),
(24, 1, '2021-05-28 15:40:45'),
(25, 1, '2021-05-28 15:41:41'),
(26, 1, '2021-05-28 15:44:31'),
(27, 1, '2021-05-28 15:46:06'),
(28, 1, '2021-05-28 15:46:55'),
(29, 1, '2021-05-28 15:49:59'),
(30, 1, '2021-05-28 15:50:58'),
(31, 1, '2021-05-28 15:51:30'),
(32, 1, '2021-05-28 15:51:50'),
(33, 1, '2021-05-28 15:52:26'),
(34, 1, '2021-05-28 15:53:08'),
(35, 1, '2021-05-28 15:54:07'),
(36, 1, '2021-05-28 16:01:36'),
(37, 1, '2021-05-28 16:03:02'),
(38, 1, '2021-05-28 16:04:51'),
(39, 1, '2021-05-28 16:08:10'),
(40, 1, '2021-05-28 16:09:07'),
(41, 1, '2021-05-28 16:10:26'),
(42, 1, '2021-05-28 16:10:50'),
(43, 1, '2021-05-28 16:13:37'),
(44, 1, '2021-05-28 16:25:24'),
(45, 1, '2021-05-28 17:48:39'),
(46, 1, '2021-05-28 17:52:47'),
(47, 1, '2021-05-28 18:02:46'),
(48, 1, '2021-05-29 15:16:17'),
(49, 1, '2021-05-29 15:16:19'),
(50, 1, '2021-05-29 15:16:58'),
(51, 1, '2021-05-29 16:57:29'),
(52, 1, '2021-05-30 21:11:00'),
(53, 1, '2021-05-30 21:11:02'),
(54, 1, '2021-05-30 21:11:02'),
(55, 1, '2021-05-30 21:11:02'),
(56, 1, '2021-05-30 21:11:03'),
(57, 1, '2021-05-30 21:11:14'),
(58, 1, '2021-05-30 22:36:41'),
(59, 1, '2021-05-30 22:43:37'),
(60, 1, '2021-05-30 22:43:51'),
(61, 1, '2021-05-30 22:45:18'),
(62, 1, '2021-05-30 23:31:57'),
(63, 1, '2021-05-31 14:43:58'),
(64, 1, '2021-05-31 14:53:01'),
(65, 1, '2021-05-31 15:12:57'),
(66, 1, '2021-05-31 20:31:23'),
(67, 1, '2021-05-31 20:35:02'),
(68, 3, '2021-06-02 10:23:42'),
(69, 3, '2021-06-04 16:03:16'),
(70, 3, '2021-06-04 16:05:06'),
(71, 3, '2021-06-07 13:51:44'),
(72, 3, '2021-06-09 14:18:07'),
(73, 3, '2021-06-10 19:26:58'),
(74, 3, '2021-06-10 19:28:20'),
(75, 3, '2021-06-19 16:15:49'),
(76, 3, '2021-06-19 16:17:15');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `libelle`) VALUES
(1, 'ADMIN'),
(2, 'CLIENT');

-- --------------------------------------------------------

--
-- Structure de la table `tarification`
--

CREATE TABLE `tarification` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tarification`
--

INSERT INTO `tarification` (`id`, `nom`, `prix`) VALUES
(1, 'Appartement', 250),
(2, 'Bungalow', 350),
(3, 'Chambre Simple vue interieure', 80),
(4, 'Chambre Simple vue exterieure', 120),
(5, 'Chambre lit double vue interieure', 160),
(6, 'Chambre lit double vue exterieure', 180),
(7, 'Chambre deux lit simple vue interieure', 200),
(8, 'demi complete', 40),
(9, 'demi petit dej/dej', 20),
(10, 'demi petit dej/diner', 30);

-- --------------------------------------------------------

--
-- Structure de la table `type_bien`
--

CREATE TABLE `type_bien` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_bien`
--

INSERT INTO `type_bien` (`id`, `type`) VALUES
(1, 'appartement'),
(2, 'bungalow'),
(3, 'chambre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `id_role`, `nom`, `prenom`, `email`, `password`) VALUES
(3, 2, 'elattari', 'mohssine', 'aa@aa.com', '202cb962ac59075b964b07152d234b70'),
(4, 2, 'mohssine', 'walid', 'testing@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 2, 'MOHAMMED111', 'KHALID', 'elattari.mohssine@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 2, 'aa', 'yas', 'bb@aa.com', '9336ebf25087d91c818ee6e9ec29f8c1'),
(7, 2, 'z', 'yas', 'bb@aa.com', '4124bc0a9335c27f086f24ba207a4912'),
(8, 2, 'z', 'yas', 'bb@aa.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 2, 'z', 'yas', 'bb@aa.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 2, 'z', 'yas', 'bb@aa.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 2, '  ', 'yas', 'elattari.mohssine@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 2, '   ', 'yas', 'elattari.mohssine@gmail.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(13, 2, ' ', ' ', 'elattari.mohssine@gmail.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(14, 2, ' ', ' ', 'aa@aa.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(15, 2, ' ', 'okok', 'elattari.mohssine@gmail.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(16, 2, ' ', ' ', 'elattari.mohssine@gmail.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(17, 2, ' ', ' ', 'aa@aa.com', '7215ee9c7d9dc229d2921a40e899ec5f'),
(18, 2, 'gggg', 'g', 'f@g.co', '633de4b0c14ca52ea2432a3c8a5c4c31');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id_bien`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_tarification` (`id_tarification`);

--
-- Index pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD PRIMARY KEY (`id_enfant`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_reservation`,`id_bien`),
  ADD KEY `id_reservation` (`id_reservation`,`id_bien`),
  ADD KEY `id_bien` (`id_bien`),
  ADD KEY `id_pension` (`id_pension`);

--
-- Index pour la table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id_pension`),
  ADD KEY `id_tarification` (`id_tarification`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `tarification`
--
ALTER TABLE `tarification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_bien`
--
ALTER TABLE `type_bien`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `id_bien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `enfant`
--
ALTER TABLE `enfant`
  MODIFY `id_enfant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pension`
--
ALTER TABLE `pension`
  MODIFY `id_pension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tarification`
--
ALTER TABLE `tarification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `type_bien`
--
ALTER TABLE `type_bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `bien_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_bien` (`id`),
  ADD CONSTRAINT `bien_ibfk_2` FOREIGN KEY (`id_tarification`) REFERENCES `tarification` (`id`);

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `enfant_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_bien`) REFERENCES `bien` (`id_bien`),
  ADD CONSTRAINT `panier_ibfk_3` FOREIGN KEY (`id_pension`) REFERENCES `pension` (`id_pension`);

--
-- Contraintes pour la table `pension`
--
ALTER TABLE `pension`
  ADD CONSTRAINT `pension_ibfk_1` FOREIGN KEY (`id_tarification`) REFERENCES `tarification` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
