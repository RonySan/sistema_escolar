-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2021 às 19:44
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sexo` varchar(200) NOT NULL,
  `cod_matricula` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `turma` varchar(200) NOT NULL,
  `nome_pai` varchar(200) NOT NULL,
  `nome_mae` varchar(200) NOT NULL,
  `data_nascimento` varchar(200) NOT NULL,
  `valor_mensalidade` float NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `foto` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `email`, `sexo`, `cod_matricula`, `matricula`, `turma`, `nome_pai`, `nome_mae`, `data_nascimento`, `valor_mensalidade`, `endereco`, `nome_aluno`, `foto`) VALUES
(1, 'ronysan940@gmail.com', 'Masculino', '', 'sim', 'A', 'jose pereira', 'maria dos santos', '2009-12-28', 250, 'jari n11 sp', 'Rony Dos Santos Lima', 0),
(2, 'ronysan940@gmail.com', 'Feminino', '', 'sim', 'B', 'jiliar yoseef', 'luiza', '2007-07-11', 300, 'xapuri do acre n13 sp', 'maria', 0),
(3, 'ronysan940@gmail.com', 'Outros', '', 'sim', 'C', 'biel silva', 'marina da silva', '1997-04-15', 500, 'jaguaribara n133 casa 2', 'marcos henrique', 0),
(4, 'ronysan940@gmail.com', 'Masculino', '', 'on', 'A', 'jiliar yoseef', 'Rony Dos Santos Lima', '1995-04-15', 300, '5655598+7', 'Rony Dos Santos Lima', 0),
(5, 'ronysan940@gmail.com', 'Feminino', '', 'on', 'B', 'nicolas', 'Rony Dos Santos Lima', '2021-06-01', 100, 'lucas jio n124', 'Rony Dos Santos Lima', 0),
(6, '', '', '', '', 'Manha', '', '', '', 249, '', '', 0),
(7, 'ronysan940@gmail.com', 'Masculino', '', 'on', 'C', 'jiliar yoseef', 'Rony Dos Santos Lima', '2021-12-08', 0, 'SFSDF', 'DSD', 0),
(8, 'ronysan940@gmail.com', 'Masculino', '', 'on', '', 'jiliar yoseef', 'luciana', '2014-12-28', 300, 'xapuri do acre n13', 'RONY DOS SANTOS LIMA', 0),
(9, 'ronysan940@gmail.com', 'Masculino', '', '', '', 'jose pereira', 'RONY DOS SANTOS LIMA', '15565-04-25', 249, 'lucas jio n124', 'sss', 0),
(10, 'lucas@gmail.com', 'Masculino', '', '', '', 'luciano', 'linda', '1998-02-06', 249.99, 'lucas jio n124', 'lucas', 0),
(11, 'lucas@gmail.com', 'Masculino', '', '', '', 'luciano', 'linda', '1998-02-06', 249.99, 'lucas jio n124', 'lucas', 0),
(12, 'lucas@gmail.com', 'Masculino', '', '', '', 'luciano', 'linda', '1998-02-06', 249.99, 'lucas jio n124', 'lucasggd', 0),
(13, 'jose@yahoo.com', 'Masculino', '', '', '', 'biel', 'marina', '2004-02-03', 300, 'lucas jio n124', 'jose', 0),
(14, 'ronysan940@gmail.com', 'Feminino', '', '', 'defina', 'jose pereira', '8uui66', '2021-07-04', 300, 'lucas jio n124', 'RONY DOS SANTOS LIMA', 0),
(15, 'ronysan940@gmail.com', 'Feminino', '', 'on', 'defina', 'jiliar yoseef', 'uurft', '2021-07-07', 249, '5655598+7', 'RONY DOS SANTOS LIMA', 0),
(16, 'ronysan940@gmail.com', 'Masculino', '', '', 'Array', 'nicolas', 'RONY DOS SANTOS LIMA', '2021-07-06', 250, 'jaguaribara n133 casa 2', 'RONY DOS SANTOS LIMA', 0),
(17, 'ronysan940@gmail.com', 'Feminino', '', 'on', 'Array', 'jose pereira', 'stshsr', '2021-06-30', 249, '5655598+7', 'ttsst', 0),
(18, 'ronysan940@gmail.com', 'Masculino', '', 'on', 'Array', 'jiliar yoseef', 'SSS', '20005-02-03', 249, '5655598+7', 'RONY DOS SANTOS LIMA', 0),
(19, 'ronysan940@gmail.com', 'Masculino', '', '', 'Ingles', 'jose pereira', 'ssas', '2021-07-06', 300, 'sdsdss', 'RONY DOS SANTOS LIMA', 0),
(20, 'viuva@gmail.com', 'Feminino', '', 'on', 'Ingles', 'jiliar yoseef', 'ssas', '2021-06-27', 300, 'jaguaribara n133 casa 2', 'viuva', 0),
(21, 'sdda@ggg', 'Outros', '', 'on', '[Ingles', 'jose pereira', 'ssa a', '2021-07-05', 249, 'lucas jio n124', 'dasdsadas', 0),
(22, 'ronysan940@gmail.com', 'Feminino', '', 'on', 'Ingles_basico', 'jose pereira', 'RONY DOS SANTOS LIMA', '2021-06-29', 100, '5655598+7', 'RONY DOS SANTOS LIMA', 0),
(23, 'ronysan940@gmail.com', 'Feminino', '', 'não', 'Ingles_medio', 'jiliar yoseef', '22', '2021-07-13', 300, 'lucas jio n124', 'RONY DOS SANTOS LIMA', 0),
(24, 'ronysan940@gmail.com', 'Feminino', '', 'Sim', 'Ingles_medio', 'jiliar yoseef', '22', '2021-07-13', 300, 'lucas jio n124', 'RONY DOS SANTOS LIMA', 0),
(25, 'mary@gmail.com', 'Feminino', '', 'Sim', 'Ingles_medio', 'irinel', 'marina', '1999-07-24', 250, 'jaguaribara n123', 'mariana', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(200) NOT NULL,
  `nomedaturma` varchar(200) NOT NULL,
  `statusdaturma` varchar(200) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `datainicio` varchar(200) NOT NULL,
  `datatermino` varchar(200) NOT NULL,
  `mensalidade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nomedaturma`, `statusdaturma`, `turno`, `datainicio`, `datatermino`, `mensalidade`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(2, '[Ingles medio]', '[on]', '[Manha]', '[2021-07-05]', '[2021-09-22]', '[249,99]'),
(3, 'Ingles_basico', 'on', 'Manha', '2021-07-05', '2021-10-20', '300,00'),
(4, 'Portugues', 'on', 'Noite', '2021-07-12', '2024-06-04', '350'),
(5, 'Ingles_medio', 'on', 'Manha', '2021-07-12', '2022-07-14', '300,00'),
(6, 'japones', 'Turma Ativa', 'Manha', '2021-07-12', '2021-08-13', '300,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nome`, `usuario`, `email`, `senha`, `data_cadastro`) VALUES
(1, 'rony', 'rony1', 'rony1@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-06-28'),
(2, 'RONY', 'RONY2', 'ronysan940@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
