-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2019 às 22:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordem_servico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `NOME` varchar(100) DEFAULT NULL,
  `CELULAR` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `SENHA` varchar(200) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`NOME`, `CELULAR`, `EMAIL`, `LOGIN`, `SENHA`, `ID`) VALUES
('Camilinha', '88996221522', 'camila@hotmail.com', 'admina', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `FRASE1` varchar(150) DEFAULT NULL,
  `FRASE2` varchar(150) DEFAULT NULL,
  `FRASE3` varchar(150) DEFAULT NULL,
  `FRASE4` varchar(150) DEFAULT NULL,
  `FRASE5` varchar(150) DEFAULT NULL,
  `FRASE6` varchar(150) DEFAULT NULL,
  `FRASE7` varchar(150) DEFAULT NULL,
  `FRASE8` varchar(150) DEFAULT NULL,
  `FRASE9` varchar(150) DEFAULT NULL,
  `FRASE10` varchar(150) DEFAULT NULL,
  `FRASEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `NOME` varchar(100) DEFAULT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `SENHA` varchar(100) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `CEP` varchar(15) DEFAULT NULL,
  `RUA` varchar(100) DEFAULT NULL,
  `BAIRRO` varchar(40) DEFAULT NULL,
  `CELULAR` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `NUMERO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`NOME`, `LOGIN`, `SENHA`, `ID`, `CEP`, `RUA`, `BAIRRO`, `CELULAR`, `EMAIL`, `NUMERO`) VALUES
('Camila Hellen', 'camila', '202cb962ac59075b964b07152d234b70', 9, '62940-000', 'Benicio Chagas', '2 de Agosto', '88996221520', 'cami@gmail.com', '1025'),
('Mikael', 'mika', '202cb962ac59075b964b07152d234b70', 10, '6294000', 'Mâncio Rodrigues', '2 de Agosto', '88999223450', 'mikael@gmail.com', '1202'),
('Hellen', 'hellen', '202cb962ac59075b964b07152d234b70', 11, '932929922', '108', 'Populares', '88998222', 'hellen@gmail.com', '310');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corpo`
--

CREATE TABLE `corpo` (
  `FRASE11` varchar(150) DEFAULT NULL,
  `FRASE12` varchar(150) DEFAULT NULL,
  `FRASE13` varchar(150) DEFAULT NULL,
  `FRASE14` varchar(150) DEFAULT NULL,
  `FRASE15` varchar(150) DEFAULT NULL,
  `FRASE16` varchar(150) DEFAULT NULL,
  `FRASE17` varchar(150) DEFAULT NULL,
  `FRASE18` varchar(150) DEFAULT NULL,
  `FRASE19` varchar(150) DEFAULT NULL,
  `FRASE20` varchar(150) DEFAULT NULL,
  `FRASE21` varchar(150) DEFAULT NULL,
  `FRASE22` varchar(150) DEFAULT NULL,
  `FRASE23` varchar(150) DEFAULT NULL,
  `FRASE24` varchar(150) DEFAULT NULL,
  `FRASE25` varchar(150) DEFAULT NULL,
  `FRASE26` varchar(150) DEFAULT NULL,
  `FRASE27` varchar(150) DEFAULT NULL,
  `FRASE28` varchar(150) DEFAULT NULL,
  `FRASE29` varchar(150) DEFAULT NULL,
  `FRASE30` varchar(150) DEFAULT NULL,
  `FRASE31` varchar(150) DEFAULT NULL,
  `FRASE32` varchar(150) DEFAULT NULL,
  `FRASE33` varchar(150) DEFAULT NULL,
  `FRASE34` varchar(150) DEFAULT NULL,
  `FRASE35` varchar(150) DEFAULT NULL,
  `FRASE36` varchar(150) DEFAULT NULL,
  `FRASE37` varchar(150) DEFAULT NULL,
  `FRASEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `CNPJ` varchar(20) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `SLOGAN` varchar(100) DEFAULT NULL,
  `NOME` varchar(40) DEFAULT NULL,
  `CEP` varchar(15) DEFAULT NULL,
  `BAIRRO` varchar(40) DEFAULT NULL,
  `RUA` varchar(100) DEFAULT NULL,
  `NUMERO` varchar(20) DEFAULT NULL,
  `CELULAR` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `IMG1` varchar(100) DEFAULT NULL,
  `IMG2` varchar(100) DEFAULT NULL,
  `IMG3` varchar(100) DEFAULT NULL,
  `IMG4` varchar(100) DEFAULT NULL,
  `IMG5` varchar(100) DEFAULT NULL,
  `IMG6` varchar(100) DEFAULT NULL,
  `IMG7` varchar(100) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frases`
--

CREATE TABLE `frases` (
  `ADMINID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodape`
--

CREATE TABLE `rodape` (
  `FRASE1` varchar(150) DEFAULT NULL,
  `FRASE2` varchar(150) DEFAULT NULL,
  `FRASE3` varchar(150) DEFAULT NULL,
  `FRASE4` varchar(150) DEFAULT NULL,
  `FRASE5` varchar(150) DEFAULT NULL,
  `FRASE6` varchar(150) DEFAULT NULL,
  `FRASE7` varchar(150) DEFAULT NULL,
  `FRASE8` varchar(150) DEFAULT NULL,
  `FRASEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `DATA` date DEFAULT NULL,
  `HORA` varchar(15) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `PRODUTO` varchar(50) DEFAULT NULL,
  `DESCRICAO` varchar(300) DEFAULT NULL,
  `PROBLEMA` varchar(20) DEFAULT NULL,
  `TECID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `CLIENTEID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`DATA`, `HORA`, `STATUS`, `PRODUTO`, `DESCRICAO`, `PROBLEMA`, `TECID`, `ID`, `CLIENTEID`) VALUES
('2019-06-29', '9 horas', 'Aprovado', 'Iphone 6', 'Do nada os aplicativos param e fica tudo escuro', 'Travamento constante', 4, 7, 9),
('2019-06-11', '10 e 30', 'Aceito', 'Iphone 8 plus', 'Caiu e quebrou muito', 'Tela rachada', 4, 8, 9),
(NULL, NULL, 'Pendente', 'Notebook Acer', 'Fui fechar e quebrou', 'Quebrou a dobradura ', NULL, 9, 10),
(NULL, NULL, 'Pendente', 'Moto G6 ', 'Deixei descarregar total e não liga mais', 'Não liga', NULL, 10, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `SENHA` varchar(100) DEFAULT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `NOME` varchar(100) DEFAULT NULL,
  `ESPECIALIDADE` varchar(100) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `CELULAR` varchar(15) DEFAULT NULL,
  `EMPID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`SENHA`, `LOGIN`, `NOME`, `ESPECIALIDADE`, `ID`, `EMAIL`, `CELULAR`, `EMPID`) VALUES
('202cb962ac59075b964b07152d234b70', 'camila', 'Camila', 'Hardware', 4, 'camilinha@gmail.com', '88996221520', NULL),
('81dc9bdb52d04dc20036dbd8313ed055', 'hellen', 'Hellen', 'Software', 5, 'hellen@gmail.com', '88998822929', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`FRASEID`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `corpo`
--
ALTER TABLE `corpo`
  ADD PRIMARY KEY (`FRASEID`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frases_ibfk_1` (`ADMINID`);

--
-- Indexes for table `rodape`
--
ALTER TABLE `rodape`
  ADD PRIMARY KEY (`FRASEID`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENTEID` (`CLIENTEID`),
  ADD KEY `TECID` (`TECID`);

--
-- Indexes for table `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `FRASEID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `corpo`
--
ALTER TABLE `corpo`
  MODIFY `FRASEID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frases`
--
ALTER TABLE `frases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rodape`
--
ALTER TABLE `rodape`
  MODIFY `FRASEID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`FRASEID`) REFERENCES `frases` (`ID`);

--
-- Limitadores para a tabela `corpo`
--
ALTER TABLE `corpo`
  ADD CONSTRAINT `corpo_ibfk_1` FOREIGN KEY (`FRASEID`) REFERENCES `frases` (`ID`);

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `empresa` (`ID`);

--
-- Limitadores para a tabela `frases`
--
ALTER TABLE `frases`
  ADD CONSTRAINT `frases_ibfk_1` FOREIGN KEY (`ADMINID`) REFERENCES `empresa` (`ID`);

--
-- Limitadores para a tabela `rodape`
--
ALTER TABLE `rodape`
  ADD CONSTRAINT `rodape_ibfk_1` FOREIGN KEY (`FRASEID`) REFERENCES `frases` (`ID`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `CLIENTEID` FOREIGN KEY (`CLIENTEID`) REFERENCES `cliente` (`ID`),
  ADD CONSTRAINT `TECID` FOREIGN KEY (`TECID`) REFERENCES `tecnico` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
