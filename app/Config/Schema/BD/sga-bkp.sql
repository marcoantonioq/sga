-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Mar-2014 às 19:13
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `habilidade` varchar(255) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `diasalario` date NOT NULL COMMENT 'dia do mês',
  `pontos` int(11) DEFAULT NULL,
  `descricao` text NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fazendas`
--

CREATE TABLE IF NOT EXISTS `fazendas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  `cnpj` varchar(45) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `inscricaoestatual` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `atividades` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `sexo_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT 'status de acesso ao sistema',
  `contabanco` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `carteiratrabalho` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) NOT NULL,
  `datecontratado` date NOT NULL,
  `premiacoes` text,
  `parent_id` int(10) DEFAULT NULL COMMENT 'user subordinados',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `foto_dir` varchar(45) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_sexo1_idx` (`sexo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `name`, `username`, `sexo_id`, `email`, `password`, `status`, `contabanco`, `nascimento`, `carteiratrabalho`, `cpf`, `rg`, `estado`, `cidade`, `rua`, `bairro`, `cep`, `telefone`, `datecontratado`, `premiacoes`, `parent_id`, `lft`, `rght`, `foto`, `foto_dir`, `updated`, `created`) VALUES
(1, 'Teste', 'teste', 1, 'marco.aq@live.com', '123456', 1, '123', '2014-03-17', '123', '123456', '123456', '12', '123', '', '', '', '123', '2014-03-17', '', NULL, 1, 2, '', '', '2014-03-17 20:35:41', '2014-03-17 20:35:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `pessoa_count` int(11) DEFAULT NULL,
  `user_count` int(11) DEFAULT NULL,
  `user_disable` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sexos`
--

INSERT INTO `sexos` (`id`, `nome`, `pessoa_count`, `user_count`, `user_disable`) VALUES
(1, 'Masculino', 1, 2, 0),
(2, 'Feminino', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `sexo_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_dir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_sexos1_idx` (`sexo_id`),
  KEY `fk_users_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Usuários' AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `sexo_id`, `group_id`, `foto`, `foto_dir`) VALUES
(1, 'marco', 'marco.aq@live.com', '5d3fc3ab94ad372a337ddab32d2412c78e55bcef', 1, 1, 1, NULL, ''),
(2, 'teste', 'test.aq@live.com', '5d3fc3ab94ad372a337ddab32d2412c78e55bcef', 1, 1, 1, NULL, '');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `fk_users_sexo1` FOREIGN KEY (`sexo_id`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_sexos1` FOREIGN KEY (`sexo_id`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
