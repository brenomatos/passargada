-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2019 at 05:15 PM
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
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `release_year` int(11) NOT NULL,
  `language` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `release_year`, `language`) VALUES
(1, 'o barao de lavos', 'abel botelho', 1891, 'portugues'),
(2, 'o barao de lavos', 'abel botelho', 1891, 'portugues'),
(3, 'bom-crioulo', 'adolfo caminha', 1895, 'portugues'),
(4, 'cantigas de santa maria', 'rei afonso x', 1869, 'galego-portugues'),
(5, 'bom-crioulo', 'adolfo caminha', 1895, 'portugues'),
(6, 'cantigas de santa maria', 'rei afonso x', 1869, 'galego-portugues'),
(7, 'eurico, o presbitero', 'alexandre herculano', 1844, 'portugues'),
(8, 'o alfageme de santarem', 'almeida garrett', 1842, 'portugues'),
(9, 'eurico, o presbitero', 'alexandre herculano', 1844, 'portugues'),
(10, 'o alfageme de santarem', 'almeida garrett', 1842, 'portugues'),
(11, 'um auto de gil vicente', 'almeida garrett', 1838, 'portugues'),
(12, 'folhas caidas', 'almeida garrett', 1853, 'portugues'),
(13, 'viagens da minha terra', 'almeida garrett', 1846, 'portugues'),
(14, 'dialogos das grandezas do brasil', 'ambrosio fernandes brandao', 1930, 'portugues'),
(15, 'casa de pensao', 'aluisio azevedo', 1884, 'portugues'),
(16, 'o cortiço', 'aluisio de azevedo', 1890, 'portugues'),
(17, 'odes modernas', 'antero de quental', 1865, 'portugues'),
(18, 'o mulato', 'aluisio de azevedo', 1881, 'portugues'),
(19, 'lira dos vinte anos', 'alvares de azevedo', 1853, 'portugues'),
(20, 'noite na taverna', 'alvarez de azevedo', 1855, 'portugues'),
(21, 'um auto de gil vicente', 'almeida garrett', 1838, 'portugues'),
(22, 'folhas caidas', 'almeida garrett', 1853, 'portugues'),
(23, 'viagens da minha terra', 'almeida garrett', 1846, 'portugues'),
(24, 'dialogos das grandezas do brasil', 'ambrosio fernandes brandao', 1930, 'portugues'),
(25, 'casa de pensao', 'aluisio azevedo', 1884, 'portugues'),
(26, 'o cortiço', 'aluisio de azevedo', 1890, 'portugues'),
(27, 'odes modernas', 'antero de quental', 1865, 'portugues'),
(28, 'o mulato', 'aluisio de azevedo', 1881, 'portugues'),
(29, 'lira dos vinte anos', 'alvares de azevedo', 1853, 'portugues'),
(30, 'noite na taverna', 'alvarez de azevedo', 1855, 'portugues');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
