-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2020 às 17:21
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_igreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_membros`
--

CREATE TABLE `tbl_membros` (
  `idMembro` int(11) NOT NULL,
  `aceitoPor` varchar(100) NOT NULL,
  `igrejaProcedente` varchar(100) NOT NULL,
  `numeroRegistroMembro` varchar(255) NOT NULL,
  `nomeMembro` varchar(255) NOT NULL,
  `nomePaiMembro` varchar(255) NOT NULL,
  `nomeMaeMembro` varchar(255) NOT NULL,
  `naturalidadeMembro` varchar(100) NOT NULL,
  `estadoMembro` varchar(100) NOT NULL,
  `nacionalidadeMembro` varchar(100) NOT NULL,
  `instrucaoMembro` varchar(255) NOT NULL,
  `profissaoMembro` varchar(255) NOT NULL,
  `sexoMembro` varchar(50) NOT NULL,
  `estadoCivilMembro` varchar(50) NOT NULL,
  `cpfMembro` varchar(100) NOT NULL,
  `rgMembro` varchar(100) NOT NULL,
  `cepMembro` varchar(100) NOT NULL,
  `enderecoMembro` varchar(255) NOT NULL,
  `bairroMembro` varchar(255) NOT NULL,
  `cidadeMembro` varchar(255) NOT NULL,
  `estado2Membro` varchar(100) NOT NULL,
  `telefoneMembro` varchar(100) NOT NULL,
  `celularMembro` varchar(100) NOT NULL,
  `emailMembro` varchar(100) NOT NULL,
  `cargoMinisterialMembro` varchar(150) NOT NULL,
  `imgMembro` varchar(500) NOT NULL,
  `dataBatismoMembro` varchar(15) NOT NULL,
  `mesDataBatismoMembro` varchar(10) NOT NULL,
  `dataNascimentoMembro` varchar(15) NOT NULL,
  `diaDataNascimentoMembro` varchar(15) NOT NULL,
  `mesDataNascimentoMembro` varchar(10) NOT NULL,
  `dataCasamentoMembro` varchar(15) NOT NULL,
  `diaDataCasamentoMembro` varchar(15) NOT NULL,
  `mesDataCasamentoMembro` varchar(10) NOT NULL,
  `observacoesMembro` varchar(1000) NOT NULL,
  `nvlMembro` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(120) NOT NULL,
  `loginUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(255) NOT NULL,
  `imgUsuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`idUsuario`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`, `imgUsuario`) VALUES
(1, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'default.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_membros`
--
ALTER TABLE `tbl_membros`
  ADD PRIMARY KEY (`idMembro`);

--
-- Índices para tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_membros`
--
ALTER TABLE `tbl_membros`
  MODIFY `idMembro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
