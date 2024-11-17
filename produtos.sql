-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 14, 2024 at 05:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(11) NOT NULL,
  `url` text NOT NULL,
  `nome` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `preco` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--
INSERT INTO `produtos` (`codigo`, `url`, `nome`, `description`, `preco`) VALUES
(1, 'https://m.media-amazon.com/images/I/617-HLllfZL._AC_SY300_SX300_.jpg', 'Echo Dot 5ª geração',
 'Curta uma experiência sonora ainda melhor em comparação às versões anteriores do Echo Dot', '410'),

(2, 'https://m.media-amazon.com/images/I/31+UUSyz9uL._SR480,440_.jpg', 'Smartwatch Samsung Galaxy Fit3',
 'O Novo Galaxy Fit3 possui um Design esportivo e ergonômico em alumínio, que o deixa bem confortável e estiloso no seu punho.', '130'),

(3, 'https://m.media-amazon.com/images/I/418+rAl+IxL._SR480,440_.jpg', 'Monitor Gamer LG UltraGear 24” IPS, Full HD, 180Hz',
 'Desfrute de gráficos perfeitos. Esse monitor é compatível com NVIDIA G-SYNC e AMD FreeSync, reduzindo as rupturas e rasgos na tela para uma experiência de jogo suave e rápida.', '600'),

(4, 'https://m.media-amazon.com/images/I/31p7QiARL+L._SR480,440_.jpg', 'PlayStation®VR2',
 'DESEMPENHO DE PONTA Experimente visuais em 4K HDR4, campo de visão de 110 graus e renderização gráfica avançada.', '2500'),
 
(5, 'https://m.media-amazon.com/images/I/51dfg52K-cL._AC_SX679_.jpg', 'Console PlayStation®5 Pro',
 'Jogue a 60 qps ou até 120 qps, com saída 4K e Ray Tracing para jogos compatíveis: Com o poder do PS5 Pro', '6500'),

(6, 'https://m.media-amazon.com/images/I/51WynZQZehL.__AC_SX300_SY300_QL70_ML2_.jpg', 'Placa de Vídeo Galax GeForce RTX 4060 TI',
 'Os núcleos tensores de IA especializados oferecem até 836 TOPS de IA para fornecer recursos transformadores para IA em jogos, criação e produtividade diária.', '2780'),

(7, 'https://m.media-amazon.com/images/I/615tXbvJ7OL.__AC_SX300_SY300_QL70_ML2_.jpg', 'PC Gamer Completo Mancer',
 'Descubra a potência e a versatilidade do nosso pc gamer de última geração, construído para oferecer a melhor experiência de jogo e multitarefas com componentes de ponta e possibilidade de upgrades futuros.', '3500'),

(8, 'https://m.media-amazon.com/images/I/61saZHQI52L.__AC_SX300_SY300_QL70_ML2_.jpg', 'Mouse Gamer Redragon Cobra',
 'Sensor PIXART PMW3325 para Alta Performance (10000 DPI/20G/100ips). Iluminação RGB Ajustável', '130'),

(9, 'https://m.media-amazon.com/images/I/41CEGtQGb7L.__AC_SY445_SX342_QL70_ML2_.jpg', 'Apple iPhone 16 (128 GB) – Preto',
 'O A18 está duas gerações à frente do chip A16 Bionic do iPhone 15 e O Controle da Câmera dá acesso mais fácil e rápido às ferramentas', '7000'),
 
(10, 'https://m.media-amazon.com/images/I/81QyMksmunL.__AC_SY300_SX300_QL70_ML2_.jpg', 'Placa Mãe Gigabyte B550M AORUS Elite',
 'As placas-mãe GIGABYTE B550 maximizam o potencial do seu PC com a tecnologia AMD StoreMI.', '890');
--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
