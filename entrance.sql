-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 19 Juillet 2017 à 10:28
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `entrance`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table of administrator of website';

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `username`, `passwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_date` date DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='table  that show activity of the user' AUTO_INCREMENT=119 ;

--
-- Contenu de la table `admin_log`
--

INSERT INTO `admin_log` (`id_log`, `username`, `login_date`, `action`) VALUES
(66, 'admin', '2017-06-25', 'add student HTTTC94F9DE9C'),
(70, 'admin', '2017-06-25', 'loggin'),
(71, 'admin', '2017-06-25', 'adding new jury TOPO JURY'),
(72, 'jury', '2017-06-25', 'loggin'),
(73, 'teacher', '2017-06-25', 'loggin'),
(74, 'admin', '2017-06-25', 'loggin'),
(75, 'admin', '2017-06-26', 'loggin'),
(79, 'admin', '2017-06-26', 'loggin'),
(80, 'admin', '2017-06-26', 'add student HTTTC950B8D62'),
(81, 'admin', '2017-06-26', 'add student HTTTC950B9058'),
(83, 'admin', '2017-06-26', 'add new note of HTTTC950B9058'),
(84, 'jury', '2017-06-26', 'loggin'),
(85, 'admin', '2017-06-26', 'loggin'),
(86, 'admin', '2017-06-26', 'add student HTTTC950BA4F8'),
(87, 'teacher', '2017-06-26', 'loggin'),
(88, 'teacher', '2017-06-26', 'adding note of HTTTC950BA4F8'),
(89, 'jury', '2017-06-26', 'loggin'),
(90, 'jury', '2017-06-26', 'loggin'),
(91, 'admin', '2017-06-29', 'loggin'),
(92, 'admin', '2017-06-29', 'add student HTTTC9552524C'),
(93, 'admin', '2017-06-29', 'add student HTTTC9552C0F7'),
(94, 'admin', '2017-06-29', 'add student HTTTC9552D7E3'),
(95, 'admin', '2017-06-29', 'add student HTTTC9552D859'),
(96, 'admin', '2017-06-29', 'loggin'),
(97, 'admin', '2017-06-29', 'add student HTTTC9552E8B7'),
(98, 'admin', '2017-06-29', 'add student HTTTC9552EC80'),
(103, 'teacher', '2017-06-30', 'adding note of HTTTC9552D859'),
(104, 'teacher', '2017-06-30', 'adding note of HTTTC9552EC80'),
(105, 'JURY', '2017-06-30', 'loggin'),
(109, 'jury', '2017-07-01', 'loggin'),
(110, 'admin', '2017-07-02', 'loggin'),
(111, 'admin', '2017-07-02', 'add student HTTTC958C0C40'),
(112, 'teacher', '2017-07-02', 'loggin'),
(113, 'teacher', '2017-07-02', 'adding note of HTTTC958C0C40'),
(114, 'jury', '2017-07-02', 'loggin'),
(115, 'admin', '2017-07-08', 'loggin'),
(116, 'teacher', '2017-07-08', 'loggin'),
(117, 'jury', '2017-07-08', 'loggin'),
(118, 'admin', '2017-07-08', 'loggin');

-- --------------------------------------------------------

--
-- Structure de la table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `formCandidate` varchar(20) NOT NULL,
  `nomCandidat` varchar(100) DEFAULT NULL,
  `dateNaiss` varchar(15) DEFAULT NULL,
  `lieuNaiss` varchar(100) DEFAULT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `nationalite` varchar(45) DEFAULT NULL,
  `cycle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`formCandidate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `candidate`
--

INSERT INTO `candidate` (`formCandidate`, `nomCandidat`, `dateNaiss`, `lieuNaiss`, `telephone`, `gender`, `nationalite`, `cycle`) VALUES
('HTTTC94F9DE9C', 'YANDJEU NANA ARIEL DE GUILIQUE', '1996-05-02', 'BAFIA', '699501442', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC950B85C1', 'PEKOUOKANG POUKOPONG INGRID', '1994-01-01', 'YAOUNDE', '697001800', 'Female', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC950B8D62', 'ESSOMBA JEAN JACQUES', '1996-02-12', 'DOUALA', '654123587', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC950B9058', 'ZIEM AMBASSY EMMANUEL', '1996-06-20', 'BAFIA', '625487412', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC950BA4F8', 'NANJIP NJOJIP RODRIGUE', '1994-11-11', 'BATOUFAM', '654128574', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC9552524C', 'ATIBAK JULES GABIN', '1994-10-10', 'BERTOUA', '655412301', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC9552C0F7', 'ZAMBO FRANCOIS', '1993-03-20', 'MBALMAYO', '623201540', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC9552D859', 'KAMEN KAMENI CHARLES', '1993-10-02', 'BAFANG', '671023589', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC9552EC80', 'MATUI LINDA PRISCA', '1998-02-10', 'MBOUDA', '682410235', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE'),
('HTTTC958C0C40', 'MAGOUM GAEL', '1996-05-02', 'YAOUNDE', '699501442', 'Male', 'Cameroonian', 'FIRST YEAR FIRST CYCLE');

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `iddepartment` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(100) DEFAULT NULL,
  `candidate_formCandidate` varchar(20) NOT NULL,
  PRIMARY KEY (`iddepartment`),
  KEY `fk_department_candidate1` (`candidate_formCandidate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Contenu de la table `department`
--

INSERT INTO `department` (`iddepartment`, `nomDepartement`, `candidate_formCandidate`) VALUES
(50, 'CIVIL ENGINEERING AND FORESTRY TECHNICS', 'HTTTC94F9DE9C'),
(51, 'COMPUTER SCIENCE', 'HTTTC950B85C1'),
(52, 'CIVIL ENGINEERING AND FORESTRY TECHNICS', 'HTTTC950B8D62'),
(53, 'CIVIL ENGINEERING AND FORESTRY TECHNICS', 'HTTTC950B9058'),
(54, 'COMPUTER SCIENCE', 'HTTTC950BA4F8'),
(55, 'MECHANICAL ENGINEERING', 'HTTTC9552524C'),
(56, 'MECHANICAL ENGINEERING', 'HTTTC9552C0F7'),
(58, 'MECHANICAL ENGINEERING', 'HTTTC9552D859'),
(60, 'MECHANICAL ENGINEERING', 'HTTTC9552EC80'),
(61, 'CIVIL ENGINEERING AND FORESTRY TECHNICS', 'HTTTC958C0C40');

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `iddivision` int(11) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(45) DEFAULT NULL,
  `candidate_formCandidate` varchar(20) NOT NULL,
  PRIMARY KEY (`iddivision`),
  KEY `fk_division_candidate1` (`candidate_formCandidate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `division`
--

INSERT INTO `division` (`iddivision`, `divisionName`, `candidate_formCandidate`) VALUES
(51, 'NDE', 'HTTTC94F9DE9C'),
(52, 'BAMBOUTOS', 'HTTTC950B85C1'),
(53, 'DJA-ET-LOBO', 'HTTTC950B8D62'),
(54, 'MBAM-ET-INOUBOU', 'HTTTC950B9058'),
(55, 'KOUNG-KHI', 'HTTTC950BA4F8'),
(56, 'MEFOU-ET-AFAMBA', 'HTTTC9552524C'),
(57, 'NYONG-ET-SO O', 'HTTTC9552C0F7'),
(59, 'HAUTS-PLATEAUX', 'HTTTC9552D859'),
(61, 'BAMBOUTOS', 'HTTTC9552EC80'),
(62, 'MIFI', 'HTTTC958C0C40');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE IF NOT EXISTS `filiere` (
  `idfiliere` int(11) NOT NULL AUTO_INCREMENT,
  `nomFiliere` varchar(100) DEFAULT NULL,
  `candidate_formCandidate` varchar(20) NOT NULL,
  PRIMARY KEY (`idfiliere`),
  KEY `fk_filiere_candidate1` (`candidate_formCandidate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Contenu de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `nomFiliere`, `candidate_formCandidate`) VALUES
(50, 'BUILDING AND PUBLIC WORKS', 'HTTTC94F9DE9C'),
(51, 'FUNDAMENTAL COMPUTER SCIENCES', 'HTTTC950B85C1'),
(52, 'BUILDING AND PUBLIC WORKS', 'HTTTC950B8D62'),
(53, 'BUILDING AND PUBLIC WORKS', 'HTTTC950B9058'),
(54, 'FUNDAMENTAL COMPUTER SCIENCES', 'HTTTC950BA4F8'),
(55, 'MECHANICAL DESIGN', 'HTTTC9552524C'),
(56, 'MECHANICAL DESIGN', 'HTTTC9552C0F7'),
(58, 'MECHANICAL DESIGN', 'HTTTC9552D859'),
(60, 'MECHANICAL DESIGN', 'HTTTC9552EC80'),
(61, 'BUILDING AND PUBLIC WORKS', 'HTTTC958C0C40');

-- --------------------------------------------------------

--
-- Structure de la table `jury`
--

CREATE TABLE IF NOT EXISTS `jury` (
  `idjury` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `userpass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idjury`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `jury`
--

INSERT INTO `jury` (`idjury`, `username`, `userpass`) VALUES
(1, 'jury', 'jury');

-- --------------------------------------------------------

--
-- Structure de la table `jurymember`
--

CREATE TABLE IF NOT EXISTS `jurymember` (
  `juryNumber` varchar(10) NOT NULL,
  `juryName` varchar(15) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`juryNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jurymember`
--

INSERT INTO `jurymember` (`juryNumber`, `juryName`, `telephone`) VALUES
('J122', 'TOPO JURY', '676124735');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `codemat` varchar(6) NOT NULL,
  `libele` varchar(45) DEFAULT NULL,
  `coeff` int(1) DEFAULT NULL,
  PRIMARY KEY (`codemat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`codemat`, `libele`, `coeff`) VALUES
('CSC311', 'GENERAL KNOWLEDGE ON COMPUTER SCIENCE', 3),
('MM312', 'APPLIED MECHANICS FOR F1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `idnotes` int(11) NOT NULL AUTO_INCREMENT,
  `moyenne` float DEFAULT NULL,
  `matiere_codemat` varchar(6) NOT NULL,
  `candidate_formCandidate` varchar(20) NOT NULL,
  PRIMARY KEY (`idnotes`),
  KEY `fk_notes_matiere1` (`matiere_codemat`),
  KEY `fk_notes_candidate1` (`candidate_formCandidate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`idnotes`, `moyenne`, `matiere_codemat`, `candidate_formCandidate`) VALUES
(3, 16, 'CSC311', 'HTTTC94F9DE9C'),
(4, 12, 'CSC311', 'HTTTC950B85C1'),
(5, 13, 'CSC311', 'HTTTC950B8D62'),
(6, 11, 'CSC311', 'HTTTC950B9058'),
(7, 12, 'CSC311', 'HTTTC950BA4F8'),
(8, 14, 'MM312', 'HTTTC9552524C'),
(9, 13, 'MM312', 'HTTTC9552C0F7'),
(10, 15, 'MM312', 'HTTTC9552D859'),
(11, 16, 'MM312', 'HTTTC9552EC80'),
(12, 15, 'CSC311', 'HTTTC958C0C40');

-- --------------------------------------------------------

--
-- Structure de la table `oralresult`
--

CREATE TABLE IF NOT EXISTS `oralresult` (
  `idresult` int(11) NOT NULL AUTO_INCREMENT,
  `candidat` varchar(100) DEFAULT NULL,
  `filiereName` varchar(45) DEFAULT NULL,
  `Moyenne` float DEFAULT NULL,
  PRIMARY KEY (`idresult`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `oralresult`
--


-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `idregion` int(11) NOT NULL AUTO_INCREMENT,
  `regionName` varchar(45) DEFAULT NULL,
  `candidate_formCandidate` varchar(20) NOT NULL,
  PRIMARY KEY (`idregion`),
  KEY `fk_region_candidate1` (`candidate_formCandidate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`idregion`, `regionName`, `candidate_formCandidate`) VALUES
(51, 'WEST', 'HTTTC94F9DE9C'),
(52, 'WEST', 'HTTTC950B85C1'),
(53, 'SOUTH', 'HTTTC950B8D62'),
(54, 'CENTRE', 'HTTTC950B9058'),
(55, 'WEST', 'HTTTC950BA4F8'),
(56, 'CENTRE', 'HTTTC9552524C'),
(57, 'SOUTH', 'HTTTC9552C0F7'),
(59, 'WEST', 'HTTTC9552D859'),
(61, 'WEST', 'HTTTC9552EC80'),
(62, 'WEST', 'HTTTC958C0C40');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `idteacher` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `userpass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idteacher`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `teacher`
--

INSERT INTO `teacher` (`idteacher`, `username`, `userpass`) VALUES
(1, 'teacher', 'teacher');

-- --------------------------------------------------------

--
-- Structure de la table `writingresult`
--

CREATE TABLE IF NOT EXISTS `writingresult` (
  `idresult` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `libeleFiliere` varchar(100) DEFAULT NULL,
  `avg` float DEFAULT NULL,
  PRIMARY KEY (`idresult`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `writingresult`
--

INSERT INTO `writingresult` (`idresult`, `nom`, `libeleFiliere`, `avg`) VALUES
(3, 'HTTTC94F9DE9C', 'BUILDING AND PUBLIC WORKS', 16),
(5, 'HTTTC950B8D62', 'BUILDING AND PUBLIC WORKS', 13);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`candidate_formCandidate`) REFERENCES `candidate` (`formCandidate`);

--
-- Contraintes pour la table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_1` FOREIGN KEY (`candidate_formCandidate`) REFERENCES `candidate` (`formCandidate`);

--
-- Contraintes pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `filiere_ibfk_1` FOREIGN KEY (`candidate_formCandidate`) REFERENCES `candidate` (`formCandidate`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`candidate_formCandidate`) REFERENCES `candidate` (`formCandidate`);
