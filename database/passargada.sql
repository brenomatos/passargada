-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2019 at 04:54 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passargada`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` text NOT NULL,
  `author` text NOT NULL,
  `release_year` int(11) NOT NULL,
  `language` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `author`, `release_year`, `language`) VALUES
('o barao de lavos', 'abel botelho', 1891, 'portugues'),
('o barao de lavos', 'abel botelho', 1891, 'portugues'),
('bom-crioulo', 'adolfo caminha', 1895, 'portugues'),
('cantigas de santa maria', 'rei afonso x', 1869, 'galego-portugues'),
('bom-crioulo', 'adolfo caminha', 1895, 'portugues'),
('cantigas de santa maria', 'rei afonso x', 1869, 'galego-portugues'),
('eurico, o presbitero', 'alexandre herculano', 1844, 'portugues'),
('o alfageme de santarem', 'almeida garrett', 1842, 'portugues'),
('eurico, o presbitero', 'alexandre herculano', 1844, 'portugues'),
('o alfageme de santarem', 'almeida garrett', 1842, 'portugues'),
('um auto de gil vicente', 'almeida garrett', 1838, 'portugues'),
('folhas caidas', 'almeida garrett', 1853, 'portugues'),
('viagens da minha terra', 'almeida garrett', 1846, 'portugues'),
('dialogos das grandezas do brasil', 'ambrosio fernandes brandao', 1930, 'portugues'),
('casa de pensao', 'aluisio azevedo', 1884, 'portugues'),
('o cortiço', 'aluisio de azevedo', 1890, 'portugues'),
('odes modernas', 'antero de quental', 1865, 'portugues'),
('o mulato', 'aluisio de azevedo', 1881, 'portugues'),
('lira dos vinte anos', 'alvares de azevedo', 1853, 'portugues'),
('noite na taverna', 'alvarez de azevedo', 1855, 'portugues'),
('um auto de gil vicente', 'almeida garrett', 1838, 'portugues'),
('folhas caidas', 'almeida garrett', 1853, 'portugues'),
('viagens da minha terra', 'almeida garrett', 1846, 'portugues'),
('dialogos das grandezas do brasil', 'ambrosio fernandes brandao', 1930, 'portugues'),
('casa de pensao', 'aluisio azevedo', 1884, 'portugues'),
('o cortiço', 'aluisio de azevedo', 1890, 'portugues'),
('odes modernas', 'antero de quental', 1865, 'portugues'),
('o mulato', 'aluisio de azevedo', 1881, 'portugues'),
('lira dos vinte anos', 'alvares de azevedo', 1853, 'portugues'),
('noite na taverna', 'alvarez de azevedo', 1855, 'portugues');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
