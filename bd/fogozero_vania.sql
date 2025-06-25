-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2025 às 18:00
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

CREATE DATABASE IF NOT EXISTS fogozero;
USE fogozero;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fogozero`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alertas`
--

CREATE TABLE `alertas` (
  `id_alerta` bigint(20) NOT NULL,
  `data_hora` datetime NOT NULL DEFAULT current_timestamp(),
  `denuncia_id` bigint(20) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alertas`
--

INSERT INTO `alertas` (`id_alerta`, `data_hora`, `denuncia_id`, `quantidade`) VALUES
(2, '2025-06-23 01:17:55', 8, 1),
(3, '2025-06-23 11:55:03', 13, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncias`
--

CREATE TABLE `denuncias` (
  `id_denuncia` bigint(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `data_denuncia` datetime NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `status_denuncia` enum('Ativo','Inativo') NOT NULL DEFAULT 'Ativo',
  `latitude` varchar(15) NOT NULL,
  `longitude` varchar(15) NOT NULL,
  `usuario_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `denuncias`
--

INSERT INTO `denuncias` (`id_denuncia`, `descricao`, `localizacao`, `data_denuncia`, `comentario`, `imagem`, `status_denuncia`, `latitude`, `longitude`, `usuario_id`) VALUES
(8, 'Fogo em Bauru', 'Avenida Nossa Senhora de Fatima, 1882,Jardim Europa,Bauru,SP', '2025-06-23 01:00:00', 'Muita fumaça', 'foto_1.jpg', 'Ativo', '-22.3490214', '-49.0578299', 2),
(9, 'Fogo no centro de Bauru', 'Avenida Rodrigues Alves, 154,centro,Bauru,SP', '2025-06-23 01:34:00', 'Incêndio intenso.', 'imagem1.png', 'Ativo', '-22.3233755', '-49.0730773', 2),
(10, 'Fogo em Bauru', 'Rua XV de Novembro, 123,Bauru,SP', '2025-06-23 11:30:00', 'Muita fumaça', 'imagem16.png', 'Ativo', '-22.5073160', '-48.5552499', 2),
(11, 'Fogo em Bauru', 'bauru,sp', '2025-06-23 11:38:00', 'ssdasdas', 'imagem12.png', 'Ativo', '-22.3218102', '-49.0705863', 2),
(12, 'Fogo em Bauru', 'Avenida Nossa Senhora de Fatima, 1882,Jardim Europa,Bauru,SP', '2025-06-23 11:51:00', 'sadas', 'imagem15.png', 'Ativo', '-22.3490214', '-49.0578299', 2),
(13, 'Fogo em Bauru', 'Avenida Nossa Senhora de Fatima, 1882,Jardim Europa,Bauru,SP', '2025-06-23 11:52:00', 'sadas', 'imagem15.png', 'Ativo', '-22.3490214', '-49.0578299', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id_feedback` bigint(20) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `data_feedback` datetime NOT NULL DEFAULT current_timestamp(),
  `imagem` varchar(255) DEFAULT NULL,
  `usuario_id` bigint(20) NOT NULL,
  `denuncia_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `latitude` varchar(15) NOT NULL,
  `longitude` varchar(15) NOT NULL,
  `tipo_usuario` enum('Administrador','Comum') NOT NULL DEFAULT 'Comum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `telefone`, `senha`, `cep`, `cidade`, `estado`, `bairro`, `rua`, `numero`, `imagem`, `latitude`, `longitude`, `tipo_usuario`) VALUES
(1, 'kaique', 'kaiqsouza2004@hotmail.com', NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Administrador'),
(2, 'Vânia Somaio Teixeira', 'vania12t@gmail.com', '(14)997778889', '$2y$10$GzK.8SlmFhaWygM3eZQwYewLygOuOglSui1qapif7Z2AAoWadEodi', '17017410', 'Bauru', 'SP', 'Jardim Europa', 'Horton Hoover', '415', NULL, '', '', 'Comum'),
(4, 'Paulo da Silva', 'vania@fgp.com.br', '(14)997778887', '$2y$10$sNrErPOtWiCJRXqEvrvGkO3hCVdsM5xpFQgFArOL967qsVT/AVhDW', '17017410', 'Bauru', 'SP', 'Jardim Europa', 'Horton Hoover', '415', NULL, '-22.3543302', '-49.0545336', 'Comum');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id_alerta`),
  ADD KEY `denuncia_id` (`denuncia_id`);

--
-- Índices de tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id_denuncia`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id_feedback`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`,`denuncia_id`),
  ADD KEY `denuncia_id` (`denuncia_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id_alerta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id_denuncia` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id_feedback` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alertas`
--
ALTER TABLE `alertas`
  ADD CONSTRAINT `alertas_ibfk_1` FOREIGN KEY (`denuncia_id`) REFERENCES `denuncias` (`id_denuncia`) ON DELETE CASCADE;

--
-- Restrições para tabelas `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Restrições para tabelas `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`denuncia_id`) REFERENCES `denuncias` (`id_denuncia`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
