-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 nov. 2021 à 21:35
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `errge`
--

--
-- Déchargement des données de la table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Ain'),
(2, 'Aisne'),
(3, 'Allier'),
(5, 'Hautes-Alpes'),
(4, 'Alpes-de-Haute-Provence'),
(6, 'Alpes-Maritimes'),
(7, 'Ardèche'),
(8, 'Ardennes'),
(9, 'Ariège'),
(10, 'Aube'),
(11, 'Aude'),
(12, 'Aveyron'),
(13, 'Bouches-du-Rhône'),
(14, 'Calvados'),
(15, 'Cantal'),
(16, 'Charente'),
(17, 'Charente-Maritime'),
(18, 'Cher'),
(19, 'Corrèze'),
(20, 'Corse-du-sud'),
(21, 'Haute-corse'),
(22, 'Côte-d\'or'),
(23, 'Côtes-d\'armor'),
(24, 'Creuse'),
(25, 'Dordogne'),
(26, 'Doubs'),
(27, 'Drôme'),
(28, 'Eure'),
(29, 'Eure-et-Loir'),
(30, 'Finistère'),
(31, 'Gard'),
(32, 'Haute-Garonne'),
(33, 'Gers'),
(34, 'Gironde'),
(35, 'Hérault'),
(36, 'Ile-et-Vilaine'),
(37, 'Indre'),
(38, 'Indre-et-Loire'),
(39, 'Isère'),
(40, 'Jura'),
(41, 'Landes'),
(42, 'Loir-et-Cher'),
(43, 'Loire'),
(44, 'Haute-Loire'),
(45, 'Loire-Atlantique'),
(46, 'Loiret'),
(47, 'Lot'),
(48, 'Lot-et-Garonne'),
(49, 'Lozère'),
(50, 'Maine-et-Loire'),
(51, 'Manche'),
(52, 'Marne'),
(53, 'Haute-Marne'),
(54, 'Mayenne'),
(55, 'Meurthe-et-Moselle'),
(56, 'Meuse'),
(57, 'Morbihan'),
(58, 'Moselle'),
(59, 'Nièvre'),
(60, 'Nord'),
(61, 'Oise'),
(62, 'Orne'),
(63, 'Pas-de-Calais'),
(64, 'Puy-de-Dôme'),
(65, 'Pyrénées-Atlantiques'),
(66, 'Hautes-Pyrénées'),
(67, 'Pyrénées-Orientales'),
(68, 'Bas-Rhin'),
(69, 'Haut-Rhin'),
(70, 'Rhône'),
(71, 'Haute-Saône'),
(72, 'Saône-et-Loire'),
(73, 'Sarthe'),
(74, 'Savoie'),
(75, 'Haute-Savoie'),
(76, 'Paris'),
(77, 'Seine-Maritime'),
(78, 'Seine-et-Marne'),
(79, 'Yvelines'),
(80, 'Deux-Sèvres'),
(81, 'Somme'),
(82, 'Tarn'),
(83, 'Tarn-et-Garonne'),
(84, 'Var'),
(85, 'Vaucluse'),
(86, 'Vendée'),
(87, 'Vienne'),
(88, 'Haute-Vienne'),
(89, 'Vosges'),
(90, 'Yonne'),
(91, 'Territoire de Belfort'),
(92, 'Essonne'),
(93, 'Hauts-de-Seine'),
(94, 'Seine-Saint-Denis'),
(95, 'Val-de-Marne'),
(96, 'Val-d\'oise'),
(97, 'Mayotte'),
(98, 'Guadeloupe'),
(99, 'Guyane'),
(100, 'Martinique'),
(101, 'Réunion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
