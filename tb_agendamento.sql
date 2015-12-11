-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2014 às 02:41
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
-- Estrutura da tabela `tb_agendamento`
--

CREATE TABLE IF NOT EXISTS `tb_agendamento` (
`id_ag` int(5) NOT NULL,
  `ambiente` varchar(30) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `professor` varchar(30) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_agendamento`
--

INSERT INTO `tb_agendamento` (`id_ag`, `ambiente`, `horario`, `professor`, `dia`, `mes`, `data`) VALUES
(6, 'Biologia', '9Âº aula9', '', '05', 'Novembro', '2014-10-08 00:35:14'),
(8, 'Quimica', '4Âº aula', '', '05', 'Agosto', '2014-10-09 13:12:41'),
(9, 'Informatica', '2Âº aula', '', '01', 'Agosto', '2014-10-09 13:32:02'),
(10, 'Informatica', '1Âº aula', '', '02', 'Fevereiro', '2014-10-09 13:56:24'),
(11, 'Auditorio', '2Âº aula', '', '04', 'MarÃ§o', '2014-10-09 14:51:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agendamento`
--
ALTER TABLE `tb_agendamento`
 ADD PRIMARY KEY (`id_ag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agendamento`
--
ALTER TABLE `tb_agendamento`
MODIFY `id_ag` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
