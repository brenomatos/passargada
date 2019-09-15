-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2019 at 07:18 PM
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
  `language` varchar(40) NOT NULL DEFAULT 'portugues'
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
(30, 'noite na taverna', 'alvarez de azevedo', 1855, 'portugues'),
(31, 'a barriga do meu tio', 'martins pena', 1845, 'portugues'),
(32, 'o caixeiro da taverna', 'martins pena', 1833, 'portugues'),
(33, 'o cigano', 'martins pena', 1827, 'portugues'),
(34, 'o dlietante', 'martins pena', 1826, 'portugues'),
(35, 'um estrangeiro na corte', 'martins pena', 1845, 'portugues'),
(36, 'o jogo de prendas', 'martins pena', 1839, 'portugues'),
(37, 'o noviço', 'martins pena', 1827, 'portugues'),
(38, 'os meirinhos', 'martins pena', 1827, 'portugues'),
(39, 'itaminda ou o guerreiro tupa', 'martins pena', 1831, 'portugues'),
(40, 'd. leonor teles', 'os meirinhos', 1833, 'portugues'),
(41, 'bocage', 'olavo bilac', 1899, 'portugues'),
(42, 'alma inquieta', 'olavo bilac', 1890, 'portugues'),
(43, 'conferencias literarias', 'olavo bilac', 1900, 'portugues'),
(44, 'critica e fantasia', 'olavo bilac', 1901, 'portugues'),
(45, 'cronicas e novelas', 'olavo bilac', 1879, 'portugues'),
(46, 'a defesa nacional', 'olavo bilac', 1902, 'portugues'),
(47, 'dicionario de rimas', 'olavo bilac', 1904, 'portugues'),
(48, 'hino a bandeira', 'olavo bilac', 1897, 'portugues'),
(49, 'ironia e piedade', 'olavo bilac', 1911, 'portugues'),
(50, 'panoplias', 'olavo bilac', 1900, 'portugues'),
(51, 'poesias infantis', 'olavo bilac', 1905, 'portugues'),
(52, 'sarças de fogo', 'olavo bilac', 1907, 'portugues'),
(108, 'Balas de Estalo', 'machado de assis', 1860, 'portugues'),
(109, 'Bons Dias', 'machado de assis', 1889, 'portugues'),
(110, 'O Caminho da Porta', 'machado de assis', 1855, 'portugues'),
(111, 'A Carteira', 'machado de assis', 1901, 'portugues'),
(112, 'Casa Velha', 'machado de assis', 1878, 'portugues'),
(113, 'Contos sem data', 'machado de assis', 1870, 'portugues'),
(114, 'Crisálidas', 'machado de assis', 1881, 'portugues'),
(115, 'Crítica', 'machado de assis', 1869, 'portugues'),
(116, 'Críticas Literárias', 'machado de assis', 1890, 'portugues'),
(117, 'Críticas Teatrais', 'machado de assis', 1891, 'portugues'),
(118, 'Crônicas', 'machado de assis', 1855, 'portugues'),
(119, 'Desencantos', 'machado de assis', 1886, 'portugues'),
(120, 'Os Deuses de Casaca e Tu', 'machado de assis', 1856, 'portugues'),
(121, 'Dom Casmurro', 'machado de assis', 1903, 'portugues'),
(122, 'Esaú e Jacó', 'machado de assis', 1885, 'portugues'),
(123, 'Escritos Avulsos', 'machado de assis', 1874, 'portugues'),
(124, 'Falenas', 'machado de assis', 1898, 'portugues'),
(125, 'Helena', 'machado de assis', 1903, 'portugues'),
(126, 'História de Quinze Dias', 'machado de assis', 1902, 'portugues'),
(127, 'Iaiá Garcia', 'machado de assis', 1900, 'portugues'),
(128, 'Lições de botânica', 'machado de assis', 1897, 'portugues'),
(129, 'A Mão e a Luva', 'machado de assis', 1884, 'portugues'),
(130, 'Memorial de Aires', 'machado de assis', 1865, 'portugues'),
(131, 'Memórias Póstumas de Brás Cubas', 'machado de assis', 1862, 'portugues'),
(132, 'Não Consultes o Médico', 'machado de assis', 1903, 'portugues'),
(133, 'Notas Semanais', 'machado de assis', 1897, 'portugues'),
(134, 'Novas Relíquias', 'machado de assis', 1905, 'portugues'),
(135, 'Ocidentais', 'machado de assis', 1864, 'portugues'),
(136, 'Outras Relíquias', 'machado de assis', 1897, 'portugues'),
(137, 'Poesias', 'machado de assis', 1884, 'portugues'),
(138, 'Protocolo', 'machado de assis', 1870, 'portugues'),
(139, 'Quase Ministro', 'machado de assis', 1906, 'portugues'),
(140, 'A Queda que as Mulheres têm para os Tolos', 'machado de assis', 1876, 'portugues'),
(141, 'Quincas Borba', 'machado de assis', 1875, 'portugues'),
(142, 'Ressurreição', 'machado de assis', 1878, 'portugues'),
(143, 'A Semana', 'machado de assis', 1903, 'portugues'),
(144, 'Só Tu Puro Amor', 'machado de assis', 1907, 'portugues'),
(145, 'Terpsicore', 'machado de assis', 1860, 'portugues'),
(146, 'Contos Fluminenses', 'machado de assis', 1907, 'portugues'),
(147, ' Miss Dollar', 'machado de assis', 1874, 'portugues'),
(148, ' Luís Soares', 'machado de assis', 1893, 'portugues'),
(149, ' A Mulher de Preto', 'machado de assis', 1862, 'portugues'),
(150, ' O Segredo de Augusta', 'machado de assis', 1864, 'portugues'),
(151, ' Confissões de uma Viúva', 'machado de assis', 1894, 'portugues'),
(152, ' Linha Reta e Linha Curva', 'machado de assis', 1873, 'portugues'),
(153, ' Frei Simão', 'machado de assis', 1897, 'portugues'),
(154, 'Histórias da Meia-noite', 'machado de assis', 1860, 'portugues'),
(155, ' A Parasita Azul', 'machado de assis', 1903, 'portugues'),
(156, ' As Bodas de Luís Duarte', 'machado de assis', 1874, 'portugues'),
(157, ' Ernesto de Tal', 'machado de assis', 1894, 'portugues'),
(158, ' Aurora sem Dia', 'machado de assis', 1854, 'portugues'),
(159, ' Goivos e Camélias', 'machado de assis', 1896, 'portugues'),
(160, ' A Ela', 'machado de assis', 1867, 'portugues'),
(161, ' O Relógio de Ouro', 'machado de assis', 1866, 'portugues'),
(162, ' Ponto de Vista', 'machado de assis', 1890, 'portugues'),
(163, 'As Asas de Um Anjo', 'jose de alencar', 1866, 'portugues'),
(164, 'Carta sobre a Confederação de Tamoios', 'jose de alencar', 1876, 'portugues'),
(165, 'Cartas Políticas de Erasmo e ao Imperador', 'jose de alencar', 1849, 'portugues'),
(166, 'Cinco Minutos', 'jose de alencar', 1847, 'portugues'),
(167, 'Como e Porque sou Romancista', 'jose de alencar', 1870, 'portugues'),
(168, 'Ao Correr da Pena', 'jose de alencar', 1864, 'portugues'),
(169, 'O Crédito - teatro', 'jose de alencar', 1871, 'portugues'),
(170, 'Demônio Familiar - Teatro', 'jose de alencar', 1861, 'portugues'),
(171, 'Diva', 'jose de alencar', 1872, 'portugues'),
(172, 'Encarnação', 'jose de alencar', 1869, 'portugues'),
(173, 'O Garatuja', 'jose de alencar', 1854, 'portugues'),
(174, 'O Gaúcho', 'jose de alencar', 1874, 'portugues'),
(175, 'O Guarani', 'jose de alencar', 1875, 'portugues'),
(176, 'A Guerra dos Mascates', 'jose de alencar', 1857, 'portugues'),
(177, 'Ao Imperador', 'jose de alencar', 1861, 'portugues'),
(178, 'Iracema', 'jose de alencar', 1865, 'portugues'),
(179, 'O Jesuíta', 'jose de alencar', 1861, 'portugues'),
(180, 'O Juízo de Deus', 'jose de alencar', 1871, 'portugues'),
(181, 'Lucíola', 'jose de alencar', 1867, 'portugues'),
(182, 'Mãe', 'jose de alencar', 1872, 'portugues'),
(183, 'As Minas de Prata', 'jose de alencar', 1861, 'portugues'),
(184, 'A Noite de São João', 'jose de alencar', 1855, 'portugues'),
(185, 'Novas Cartas Políticas de Erasmo', 'jose de alencar', 1869, 'portugues'),
(186, 'A Pata da Gazela', 'jose de alencar', 1844, 'portugues'),
(187, 'Ao Povo', 'jose de alencar', 1852, 'portugues'),
(188, 'Senhora', 'jose de alencar', 1858, 'portugues'),
(189, 'O Sertanejo', 'jose de alencar', 1844, 'portugues'),
(190, 'O Sistema Representativo', 'jose de alencar', 1851, 'portugues'),
(191, 'Sonhos D\'oro', 'jose de alencar', 1862, 'portugues'),
(192, 'Til', 'jose de alencar', 1858, 'portugues'),
(193, 'O Tronco do Ipê', 'jose de alencar', 1858, 'portugues'),
(194, 'Ubirajara', 'jose de alencar', 1849, 'portugues'),
(195, 'Verso e Reverso - Teatro', 'jose de alencar', 1850, 'portugues'),
(196, 'A Visão de Jó', 'jose de alencar', 1875, 'portugues'),
(197, 'A Viuvinha', 'jose de alencar', 1846, 'portugues'),
(198, 'A Carteira do Meu tio', 'joaquim manuel de macedo', 1874, 'portugues'),
(199, 'O Cego', 'joaquim manuel de macedo', 1846, 'portugues'),
(200, 'Cincinato Quebra-Louça', 'joaquim manuel de macedo', 1866, 'portugues'),
(201, 'Cobé', 'joaquim manuel de macedo', 1862, 'portugues'),
(202, 'O Culto do Dever', 'joaquim manuel de macedo', 1881, 'portugues'),
(203, 'Os Dois Amores', 'joaquim manuel de macedo', 1841, 'portugues'),
(204, 'O Fantasma Branco', 'joaquim manuel de macedo', 1875, 'portugues'),
(205, 'O Forasteiro', 'joaquim manuel de macedo', 1868, 'portugues'),
(206, 'A Luneta Mágica', 'joaquim manuel de macedo', 1836, 'portugues'),
(207, 'Lusbela', 'joaquim manuel de macedo', 1869, 'portugues'),
(208, 'Luxo e Vaidade', 'joaquim manuel de macedo', 1844, 'portugues'),
(209, 'Memória do Ouvidor', 'joaquim manuel de macedo', 1857, 'portugues'),
(210, 'Memórias da Rua do Ouvidor', 'joaquim manuel de macedo', 1858, 'portugues'),
(211, 'Memórias de um Sobrinho de meu Tio', 'joaquim manuel de macedo', 1849, 'portugues'),
(212, 'O Moço Loiro', 'joaquim manuel de macedo', 1836, 'portugues'),
(213, 'A Moreninha', 'joaquim manuel de macedo', 1873, 'portugues'),
(214, 'As Mulheres de Mantilha', 'joaquim manuel de macedo', 1845, 'portugues'),
(215, 'A Namoradeira', 'joaquim manuel de macedo', 1850, 'portugues'),
(216, 'A Nebulosa', 'joaquim manuel de macedo', 1881, 'portugues'),
(217, 'Nina', 'joaquim manuel de macedo', 1835, 'portugues'),
(218, 'Um Noivo e Duas Noivas', 'joaquim manuel de macedo', 1854, 'portugues'),
(219, 'Um Passeio pela Cidade do Rio de Janeiro', 'joaquim manuel de macedo', 1872, 'portugues'),
(220, 'O Primo da Califórnia', 'joaquim manuel de macedo', 1874, 'portugues'),
(221, 'O Rio do Quarto', 'joaquim manuel de macedo', 1849, 'portugues'),
(222, 'Os Romances de Semana', 'joaquim manuel de macedo', 1860, 'portugues'),
(223, 'Rosa', 'joaquim manuel de macedo', 1870, 'portugues'),
(224, 'Vicentina', 'joaquim manuel de macedo', 1859, 'portugues'),
(225, 'Vingança por Vingança', 'joaquim manuel de macedo', 1834, 'portugues'),
(226, 'As Vítimas Algozes', 'joaquim manuel de macedo', 1878, 'portugues'),
(227, 'Auto da Barca da Glória', 'gil vicente', 1509, 'portugues'),
(228, 'Auto da Barca do Inferno', 'gil vicente', 1518, 'portugues'),
(229, 'Auto da barca do Purgatório', 'gil vicente', 1507, 'portugues'),
(230, 'Auto da Fé', 'gil vicente', 1473, 'portugues'),
(231, 'Auto da Feira', 'gil vicente', 1502, 'portugues'),
(232, 'Auto da India', 'gil vicente', 1529, 'portugues'),
(233, 'Auto da Lusitânia', 'gil vicente', 1520, 'portugues'),
(234, '[Tragicomédia Pastoril da Serra da Estrela]', 'gil vicente', 1523, 'portugues'),
(235, 'Auto de Mofina Mendes', 'gil vicente', 1533, 'portugues'),
(236, 'Auto Pastoril Castelhano', 'gil vicente', 1479, 'portugues'),
(237, 'Auto Pastoril Português', 'gil vicente', 1524, 'portugues'),
(238, 'Comédia do Viúvo', 'gil vicente', 1536, 'portugues'),
(239, 'D. Duardos', 'gil vicente', 1537, 'portugues'),
(240, 'Farsa ou Auto de Ines Pereira', 'gil vicente', 1522, 'portugues'),
(241, 'Floresta de Enganos', 'gil vicente', 1515, 'portugues'),
(242, 'Juiz da Beira', 'gil vicente', 1513, 'portugues'),
(243, 'O Monólogo do Vaqueiro (ou Auto da Visitação)', 'gil vicente', 1530, 'portugues'),
(244, 'Quem tem Farelos', 'gil vicente', 1522, 'portugues'),
(245, 'Trilogia das Barcas', 'gil vicente', 1529, 'portugues'),
(246, 'O Velho da Horta', 'gil vicente', 1526, 'portugues'),
(247, 'A Capital (romance)|A Capital', 'eça de queiroz', 1869, 'portugues'),
(248, 'Cartas D\'Amor - O Efêmero Feminino', 'eça de queiroz', 1880, 'portugues'),
(249, 'A Cidade e as Serras', 'eça de queiroz', 1859, 'portugues'),
(250, 'O Conde de Abranhos', 'eça de queiroz', 1900, 'portugues'),
(251, 'Correspondência de Fradique Mendes', 'eça de queiroz', 1863, 'portugues'),
(252, 'O Crime do Padre Amaro', 'eça de queiroz', 1859, 'portugues'),
(253, 'Episódios da Vida Romântica', 'eça de queiroz', 1887, 'portugues'),
(254, 'A Ilustre Casa de Ramires', 'eça de queiroz', 1896, 'portugues'),
(255, 'Os Maias', 'eça de queiroz', 1875, 'portugues'),
(256, 'O Mandarim', 'eça de queiroz', 1868, 'portugues'),
(257, 'O Mistério da Estrada de Sintra (em parceria com Ramalho Ortigão)', 'eça de queiroz', 1897, 'portugues'),
(258, 'O Primo Basílio', 'eça de queiroz', 1872, 'portugues'),
(259, 'Prosas Bárbaras', 'eça de queiroz', 1892, 'portugues'),
(260, 'A Relíquia', 'eça de queiroz', 1885, 'portugues'),
(261, 'São Cristóvão', 'eça de queiroz', 1867, 'portugues'),
(262, 'Singularidades de uma rapariga loura', 'eça de queiroz', 1874, 'portugues'),
(263, 'Um poeta lírico', 'eça de queiroz', 1875, 'portugues'),
(264, 'No moinho', 'eça de queiroz', 1860, 'portugues'),
(265, 'Civilização', 'eça de queiroz', 1885, 'portugues'),
(266, 'O tesouro', 'eça de queiroz', 1891, 'portugues'),
(267, 'Frei Genebro', 'eça de queiroz', 1898, 'portugues'),
(268, 'Adão e Eva no Paraíso', 'eça de queiroz', 1890, 'portugues'),
(269, 'A aia', 'eça de queiroz', 1863, 'portugues'),
(270, 'O defunto', 'eça de queiroz', 1872, 'portugues'),
(271, 'José Matias', 'eça de queiroz', 1890, 'portugues'),
(272, 'A perfeição', 'eça de queiroz', 1873, 'portugues'),
(273, 'O suave milagre', 'eça de queiroz', 1873, 'portugues');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
