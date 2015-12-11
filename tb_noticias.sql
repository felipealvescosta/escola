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
-- Estrutura da tabela `tb_noticias`
--

CREATE TABLE IF NOT EXISTS `tb_noticias` (
`id` int(5) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `noticia` varchar(255) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_noticias`
--

INSERT INTO `tb_noticias` (`id`, `titulo`, `noticia`, `autor`, `data`) VALUES
(1, 'Titulo Teste', 'Esta Ã© uma mensagem de teste', 'Admin', '0000-00-00 00:00:00'),
(2, 'NotÃ­cia Teste 2', 'Nova noticia Teste', 'Admin', '0000-00-00 00:00:00'),
(3, 'Nova notÃ­cia', 'Teste', 'Admin', '0000-00-00 00:00:00'),
(4, 'Uma nova noticia', 'As vezes no silencia da noite!', 'Admin', '2014-10-07 13:46:39'),
(5, 'Uma Noticia', 'Estamos cadastrando uma noticia!', 'Professor Felipe Alv', '2014-10-08 17:55:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_noticias`
--
ALTER TABLE `tb_noticias`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_noticias`
--
ALTER TABLE `tb_noticias`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
