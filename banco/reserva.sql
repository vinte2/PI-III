-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29-Nov-2019 às 22:37
-- Versão do servidor: 5.7.27
-- PHP Version: 7.2.22-1+0~20190902.26+debian8~1.gbpd64eb7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reserva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
`id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpfaluno` varchar(30) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `responsavel_idresponsavel` int(11) DEFAULT NULL,
  `escola_idescola` int(11) DEFAULT NULL,
  `turma` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `cpfaluno`, `datanascimento`, `responsavel_idresponsavel`, `escola_idescola`, `turma`) VALUES
(1, 'maria', '123.456.777-77', '2012-02-01', 1, 1, 'vagas2ano'),
(2, 'dsaf', '432.543.252-3_', '2222-02-21', 2, 1, 'vagas2ano'),
(3, 'pedro', '232.432.432-43', '2017-12-12', 3, 1, 'vagas2ano'),
(4, 'filho 01', '999.999.999-99', '2001-08-01', 4, 1, 'vagas1ano'),
(5, 'Cadastro Aluno', '231.231.231-23', '2222-12-12', 5, 92, 'vagas9ano'),
(6, 'Aluno outro', '123.123.123-12', '0000-00-00', 6, 92, 'vagas9ano'),
(7, 'filho', '666.666.666-66', '2013-02-01', 7, 1, 'vagas4ano'),
(8, 'ALUNO3', '999.999.999-99', '2010-01-01', 8, 2, 'vagas1ano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
`idendereco` int(10) NOT NULL,
  `cep` int(10) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `numero` int(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idendereco`, `cep`, `rua`, `bairro`, `numero`) VALUES
(30, 88330000, '1282', 'Centro', 12),
(31, 88330000, '1282', 'Centro', 222),
(32, 88330000, '1282', 'Centro', 1111),
(33, 88330000, '1282', 'Centro', 1111),
(34, 88330000, '1282', 'Centro', 1111),
(35, 88330000, '1282', 'Centro', 123),
(36, 88332480, 'rua12', 'centro', 234),
(37, 88330000, '1282', 'Centro', 123),
(38, 88332480, 'rua a', 'centeo', 310),
(39, 88332480, 'fsd', 'sdsf', 0),
(40, 88332480, 'rua 25', 'centro', 0),
(41, 88332480, 'rua a', 'centro', 3),
(42, 88330000, '1282', 'Centro', 123),
(43, 88330000, '1282', 'Centro', 123),
(44, 88332480, 'rua a', 'centro', 555),
(45, 88332, 'Rua Sargento Mário Manoel Rodrigues', 'São Judas Tadeu', 222);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE IF NOT EXISTS `escola` (
`idescola` int(10) NOT NULL,
  `nomeescola` varchar(45) DEFAULT NULL,
  `vagas1ano` int(11) DEFAULT '40',
  `vagas2ano` int(11) DEFAULT '40',
  `vagas3ano` int(11) DEFAULT '40',
  `vagas4ano` int(11) DEFAULT '40',
  `vagas5ano` int(11) DEFAULT '40',
  `vagas6ano` int(11) DEFAULT '40',
  `vagas7ano` int(11) DEFAULT '40',
  `vagas8ano` int(11) DEFAULT '40',
  `vagas9ano` int(11) DEFAULT '40',
  `className` varchar(10) DEFAULT NULL,
  `quat_vagas` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`idescola`, `nomeescola`, `vagas1ano`, `vagas2ano`, `vagas3ano`, `vagas4ano`, `vagas5ano`, `vagas6ano`, `vagas7ano`, `vagas8ano`, `vagas9ano`, `className`, `quat_vagas`) VALUES
(1, 'CAIC AYRTON SENNA DA SILVA', 11, 37, 40, 39, 5, 40, 12, 40, 40, NULL, NULL),
(2, 'C.E.M. ALFREDO DOMINGOS DA SILVA', 39, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(3, 'C.E.M. DONA LILI', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(27, 'C.E.M. ESTALEIRO DONA LILA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(78, 'C.E.M. ARIRIBA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(79, 'C.E.M. GIOVANIA DE ALMEIDA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(82, 'C.E.M. GOVERNADOR IVO SILVEIRA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(84, 'C.E.M. PRESIDENTE MEDICI', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(86, 'C.E.M. NOVA ESPERANCA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(89, 'C.E.M. TOMAS GRARCIA', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(91, 'C.E.M. PROFESSOR ANTONIO LUCIO', 40, 40, 40, 40, 40, 40, 40, 40, 40, NULL, NULL),
(92, 'C.E.M. SANTA', 40, 40, 40, 40, 40, 40, 40, 40, 38, NULL, NULL),
(95, 'Teste de Escola', 10, 10, 10, 10, 10, 10, 10, 10, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `id_dado` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `descrcao_acao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `id_usuario`, `action`, `id_dado`, `created_at`, `descrcao_acao`) VALUES
(1, 1, 'cadastrarEscola', 95, '2019-11-14 23:45:30', 'cadastro de uma nova escola'),
(2, 1, 'deletaEscola', 93, '2019-11-14 23:46:09', 'deletando escola'),
(3, 1, 'deletaEscola', 94, '2019-11-14 23:46:41', 'deletando escola'),
(4, 1, 'alteraVagas', 95, '2019-11-14 23:46:53', 'alteradondo numero de vagas'),
(5, 1, 'indeferir', 3, '2019-11-14 23:47:43', 'indeferindo cadastro'),
(6, 1, 'alteraVagas', 1, '2019-11-15 17:26:56', 'alteradondo numero de vagas'),
(7, 1, 'alteraVagas', 1, '2019-11-15 17:29:36', 'alteradondo numero de vagas'),
(8, 1, 'indeferir', 7, '2019-11-15 17:30:40', 'indeferindo cadastro'),
(9, 1, 'indeferir', 8, '2019-11-30 00:54:12', 'indeferindo cadastro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
`id_matricula` int(11) NOT NULL,
  `nomeescola` varchar(50) NOT NULL,
  `nomealuno` varchar(50) NOT NULL,
  `cpfaluno` varchar(30) NOT NULL,
  `turno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolos`
--

CREATE TABLE IF NOT EXISTS `protocolos` (
`id` int(11) NOT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `ano` varchar(100) DEFAULT NULL,
  `turno` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'aguardando',
  `motivo_indefere` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `protocolos`
--

INSERT INTO `protocolos` (`id`, `numero`, `id_aluno`, `data`, `ano`, `turno`, `status`, `motivo_indefere`) VALUES
(1, '138751', 1, '2019-10-28 18:53:03', '2° ano', 'Matutino', 'indeferido', 'teste ''1'),
(2, '384612', 2, '2019-10-29 11:58:38', '2° ano', 'Matutino', 'indeferido', 'teste  2'),
(3, '642473', 3, '2019-10-29 12:00:10', '2° ano', 'Matutino', 'indeferido', 'TESTE'),
(4, '971974', 4, '2019-10-30 01:25:29', '1° ano', 'Matutino', 'indeferido', NULL),
(5, '967965', 5, '2019-10-29 22:33:14', '9° ano', 'Matutino', 'aguardando', NULL),
(6, '743876', 6, '2019-10-29 22:41:53', '9° ano', 'Vespertino', 'indeferido', NULL),
(7, '830557', 7, '2019-11-09 16:59:48', '4° ano', 'Matutino', 'indeferido', 'tesre'),
(8, '622908', 8, '2019-11-30 00:50:15', '1° ano', 'Matutino', 'indeferido', 'TESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE IF NOT EXISTS `responsavel` (
`idresponsavel` int(10) NOT NULL,
  `nome` varchar(16) DEFAULT NULL,
  `cpfresponsavel` int(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco_idendereco` int(10) NOT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `parentesco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`idresponsavel`, `nome`, `cpfresponsavel`, `email`, `endereco_idendereco`, `telefone`, `parentesco`) VALUES
(1, 'edson', 942153, 'vinte2@gmail.com', 38, '(47) 9 8411-2975', 'Pai'),
(2, 'dfsafdsa', 432432, 'fdsfsd@asas.com', 39, '(43) 4 3434-3434', 'Pai'),
(3, 'dfsafdsa', 432432, 'fdsfsd@asas.com', 40, '(43) 4 3434-3434', 'Pai'),
(4, 'edson', 333333, 'dsds@aaas.com', 41, '(33) 3 3333-3333', 'Pai'),
(5, 'Cadastro Respons', 192219, '', 42, '(32) 3 2323-2323', 'Pai'),
(6, 'Outro Responsáve', 192391, '', 43, '(12) 3 1231-2312', 'Pai'),
(7, 'teste', 666666, 'teste@dff.com', 44, '(25) 5 4555-5555', 'Pai'),
(8, 'teste', 99999, 'TESTE@TESTE', 45, '(99) 9 9999-9999', 'Pai');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serieescola`
--

CREATE TABLE IF NOT EXISTS `serieescola` (
`idserieescola` int(11) NOT NULL,
  `nomeserieescola` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `serieescola`
--

INSERT INTO `serieescola` (`idserieescola`, `nomeserieescola`) VALUES
(1, '1° Ano'),
(2, '2° Ano'),
(3, '3° Ano'),
(4, '4° Ano'),
(5, '5° Ano'),
(6, '6° Ano'),
(7, '7° Ano'),
(8, '8° Ano'),
(9, '9° Ano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioAdmin`
--

CREATE TABLE IF NOT EXISTS `usuarioAdmin` (
`id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `nivel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarioAdmin`
--

INSERT INTO `usuarioAdmin` (`id`, `email`, `password`, `nome`, `nivel`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
 ADD PRIMARY KEY (`idendereco`);

--
-- Indexes for table `escola`
--
ALTER TABLE `escola`
 ADD PRIMARY KEY (`idescola`), ADD KEY `idescola` (`idescola`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
 ADD PRIMARY KEY (`id_matricula`);

--
-- Indexes for table `protocolos`
--
ALTER TABLE `protocolos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
 ADD PRIMARY KEY (`idresponsavel`), ADD KEY `fk_responsavel_endereco_idx` (`endereco_idendereco`);

--
-- Indexes for table `serieescola`
--
ALTER TABLE `serieescola`
 ADD PRIMARY KEY (`idserieescola`);

--
-- Indexes for table `usuarioAdmin`
--
ALTER TABLE `usuarioAdmin`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
MODIFY `idendereco` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `escola`
--
ALTER TABLE `escola`
MODIFY `idescola` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `protocolos`
--
ALTER TABLE `protocolos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `responsavel`
--
ALTER TABLE `responsavel`
MODIFY `idresponsavel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `serieescola`
--
ALTER TABLE `serieescola`
MODIFY `idserieescola` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarioAdmin`
--
ALTER TABLE `usuarioAdmin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
ADD CONSTRAINT `fk_responsavel_endereco` FOREIGN KEY (`endereco_idendereco`) REFERENCES `endereco` (`idendereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
