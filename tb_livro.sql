-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2014 às 02:42
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

CREATE TABLE IF NOT EXISTS `tb_livro` (
  `titulo` varchar(30) DEFAULT NULL,
`id_livro` int(10) NOT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `editora` varchar(30) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `quantidade` int(10) DEFAULT NULL,
  `reg_biblioteca` varchar(30) DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_livro`
--
ALTER TABLE `tb_livro`
 ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_livro`
--
ALTER TABLE `tb_livro`
MODIFY `id_livro` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
