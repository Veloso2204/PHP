-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2022 às 21:00
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `f1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendario`
--

CREATE TABLE `calendario` (
  `Codcorrida` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `numvoltas` int(11) NOT NULL,
  `datacorrida` date NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `calendario`
--

INSERT INTO `calendario` (`Codcorrida`, `nome`, `pais`, `numvoltas`, `datacorrida`, `logo`) VALUES
(1, 'BAHRAIN GRAND PRIX', 'BAHRAIN', 57, '2022-03-20', 'barain.png'),
(2, 'SAUDI ARABIAN GRAND PRIX', 'SAUDI ARABIAN', 50, '2022-03-27', 'saudiarab.png'),
(3, 'AUSTRALIAN GRAND PRIX', 'AUSTRALIA', 58, '2022-04-10', 'australia.png'),
(4, 'ROLEX GRAN PREMIO DEL MADE IN ITALY E DELL EMILIA-ROMAGNA', 'Italy', 63, '2022-04-24', 'imola.png'),
(5, 'MIAMI GRAND PRIX', 'UNITED STATES', 57, '2022-05-08', 'miami.png'),
(6, 'GRAN PREMIO DE ESPAÑA', 'SPAIN', 66, '2022-05-22', 'barcelona.png'),
(7, 'GRAND PRIX DE MONACO', 'MONACO', 78, '2022-05-29', 'monaco.png'),
(8, 'AZERBAIJAN GRAND PRIX', 'AZERBAIJAN', 51, '2022-06-12', 'baku.png'),
(9, 'GRAND PRIX DU CANADA', 'CANADA', 70, '2022-06-19', 'canada.png'),
(10, 'BRITISH GRAND PRIX', 'ENGLAND', 52, '2022-07-03', 'silver.png'),
(11, 'ROLEX GROSSER PREIS VON ÖSTERREICH', 'AUSTRIA', 71, '2022-07-10', 'austria.png'),
(12, 'GRAND PRIX DE FRANCE', 'FRANCE', 53, '2022-07-24', 'france.png'),
(13, 'ARAMCO MAGYAR NAGYDÍJ', 'HUNGRAY', 70, '2022-07-31', 'hungria.png'),
(14, 'BELGIAN GRAND PRIX', 'BELGIUM', 44, '2022-08-28', 'spa.png'),
(15, 'DUTCH GRAND PRIX', 'NETHERLANDS', 72, '2022-09-04', 'holanda.png'),
(16, 'GRAN PREMIO D’ITALIA', 'ITALY', 53, '2022-09-11', 'monza.png'),
(17, 'SINGAPORE GRAND PRIX', 'SINGAPORE', 61, '2022-10-02', 'singapure.png'),
(18, 'JAPANESE GRAND PRIX', 'JAPAN', 53, '2022-10-09', 'japao.png'),
(19, 'UNITED STATES GRAND PRIX', 'UNITED STATES', 56, '2022-10-23', 'usa.png'),
(20, 'GRAN PREMIO DE LA CIUDAD DE MÉXICO', 'MEXICO', 71, '2022-10-30', 'mexico.png'),
(21, 'GRANDE PRÊMIO DE SÃO PAULO', 'BRAZIL', 71, '2022-11-13', 'brazil.png'),
(22, 'ABU DHABI GRAND PRIX', 'ABU DHABI', 58, '2022-11-20', 'abudhabi.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa`
--

CREATE TABLE `equipa` (
  `Codequipa` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nomecompleto` varchar(200) NOT NULL,
  `base` varchar(200) NOT NULL,
  `chef` varchar(200) NOT NULL,
  `anofunda` int(11) NOT NULL,
  `campeonatos` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipa`
--

INSERT INTO `equipa` (`Codequipa`, `nome`, `nomecompleto`, `base`, `chef`, `anofunda`, `campeonatos`, `logo`) VALUES
(1, 'Mercedes', 'Mercedes-AMG Petronas F1 Team', 'Brackley, United Kingdom', 'Toto Wolff', 1970, 8, 'mercedeslogo.png'),
(2, 'Red Bull', 'Oracle Red Bull Racing', 'Milton Keynes, United Kingdom', 'Christian Horner', 1997, 4, 'redbull.png'),
(3, 'Ferrari', 'Scuderia Ferrari', 'Maranello, Italy', 'Mattia Binotto', 1950, 16, 'ferrarilogo.png'),
(4, 'McLaren', 'McLaren F1 Team', 'Woking, United Kingdom', 'Andreas Seidl', 1966, 8, 'mclarenlogo.png'),
(5, 'Alfa Romeo', 'Alfa Romeo F1 Team ORLEN', 'Hinwil, Switzerland', 'Frédéric Vasseur', 1993, 0, 'alfaromeulogo.png'),
(6, 'Alpine', 'BWT Alpine F1 Team', 'Enstone, United Kingdom', 'Otmar Szafnauer', 1986, 2, 'alpinelogo.png'),
(7, 'AlphaTauri', 'Scuderia AlphaTauri', 'Faenza, Italy', 'Franz Tost', 1985, 0, 'alphataurilogo.png'),
(8, 'Haas', 'Haas F1 Team', 'Kannapolis, United States', 'Guenther Steiner', 2016, 0, 'haaslogo.png'),
(9, 'Aston Martin', 'Aston Martin Aramco Cognizant F1 Team', 'Silverstone, United Kingdom', 'Mike Krack', 2018, 0, 'astonmartinlogo.png'),
(10, 'Williams', 'Williams Racing', 'Grove, United Kingdom', 'Jost Capito', 1978, 9, 'williamslogo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa_ponto`
--

CREATE TABLE `equipa_ponto` (
  `CodEquipa` int(11) NOT NULL,
  `Ponto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipa_ponto`
--

INSERT INTO `equipa_ponto` (`CodEquipa`, `Ponto`) VALUES
(1, 161),
(2, 279),
(3, 199),
(4, 65),
(5, 41),
(6, 47),
(7, 27),
(8, 15),
(9, 15),
(10, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pilotos`
--

CREATE TABLE `pilotos` (
  `CodPiloto` int(11) NOT NULL,
  `nomepiloto` varchar(200) NOT NULL,
  `dataNasc` date NOT NULL,
  `pais` varchar(200) NOT NULL,
  `podios` int(11) NOT NULL,
  `locanasc` varchar(200) NOT NULL,
  `campmundi` int(11) NOT NULL,
  `logopiloto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pilotos`
--

INSERT INTO `pilotos` (`CodPiloto`, `nomepiloto`, `dataNasc`, `pais`, `podios`, `locanasc`, `campmundi`, `logopiloto`) VALUES
(0, 'Isaac', '2022-05-29', 'Portugal', 123, 'Rua da Cachada, Braga', 23, 'asd.png'),
(1, 'Lewis Hamilton', '1985-01-07', 'England', 183, 'Stevenage, England', 7, 'hamiltonface.png'),
(2, 'George Russell', '1988-02-15', 'England', 3, 'King\'s Lynn, England', 0, 'russelface.jpg'),
(3, 'Max Verstappen', '1997-09-30', 'Netherlands', 64, 'Hasselt, Belgium', 1, 'maxverface.png'),
(4, 'Sergio Perez', '1990-01-26', 'Mexico', 18, 'Guadalajara, Mexico', 0, 'sergioperface.png'),
(5, 'Charles Leclerc', '1997-10-16', 'Monaco', 17, 'Monte Carlo, Monaco', 0, 'charlesface.png'),
(6, 'Carlos Sainz', '1994-09-01', 'Spain', 9, 'Madrid, Spain', 0, 'carlosface.png'),
(7, 'Lando Norris', '1999-11-13', 'England', 6, 'Bristol, England', 0, 'landonorris.png'),
(8, 'Daniel Ricciardo', '1989-07-01', 'Australia', 32, 'Perth, Australia', 0, 'daniric.png'),
(9, 'Zhou Guanyu', '1999-05-30', 'China', 0, 'Shanghai, China', 0, 'zouface.jpg'),
(10, 'Esteban Ocon', '1996-09-17', 'France', 2, 'Évreux, Normandy', 0, 'oconface.png'),
(11, 'Fernando Alonso', '1981-07-29', 'Spain', 98, 'Oviedo, Spain', 2, 'alonsoface.png'),
(12, 'Sebastian Vettel', '1987-07-03', 'Germany', 122, 'Heppenheim, Germany', 4, 'vettelface.png'),
(13, 'Lance Stroll', '1998-10-29', 'Canada', 3, 'Montreal, Canada', 0, 'strolface.png'),
(14, 'Valtteri Bottas', '1989-08-28', 'Finland', 67, 'Nastola, Finland', 0, 'bottasface.jpg'),
(15, 'Kevin Magnussen', '1992-10-05', 'Denmark', 1, 'Roskilde, Denmark', 0, 'kmagface.jpg'),
(16, 'Mick Schumacher', '1999-03-22', 'Germany', 0, 'Vufflens-le-Château, Switzerland', 0, 'mikiface.png'),
(17, 'Pierre Gasly', '1996-02-07', 'France', 3, 'Rouen, France', 0, 'pierreface.png'),
(18, 'Yuki Tsunoda', '2000-05-11', 'Japan', 0, 'Sagamihara, Japan', 0, 'yukiface.png'),
(19, 'Alexander Albon', '1996-03-23', 'Thailand', 2, 'London, England', 0, 'albonoface.jpg'),
(20, 'Nicholas Latifi', '1995-06-29', 'Canada', 0, 'Montreal, Canada', 0, 'latififace.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `piloto_equipa`
--

CREATE TABLE `piloto_equipa` (
  `CodPiloto` int(11) NOT NULL,
  `CodEquipa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `piloto_equipa`
--

INSERT INTO `piloto_equipa` (`CodPiloto`, `CodEquipa`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 6),
(11, 6),
(12, 9),
(13, 9),
(14, 5),
(15, 8),
(16, 8),
(17, 7),
(18, 7),
(19, 10),
(20, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `piloto_ponto`
--

CREATE TABLE `piloto_ponto` (
  `CodPiloto` int(11) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `piloto_ponto`
--

INSERT INTO `piloto_ponto` (`CodPiloto`, `pontos`) VALUES
(1, 46),
(2, 74),
(3, 110),
(4, 85),
(5, 104),
(6, 65),
(7, 39),
(8, 11),
(9, 1),
(10, 30),
(11, 4),
(12, 4),
(13, 2),
(14, 38),
(15, 15),
(16, 0),
(17, 6),
(18, 11),
(19, 3),
(20, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `piloto_vencedor`
--

CREATE TABLE `piloto_vencedor` (
  `Codcorrida` int(11) NOT NULL,
  `CodPiloto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `piloto_vencedor`
--

INSERT INTO `piloto_vencedor` (`Codcorrida`, `CodPiloto`) VALUES
(1, 5),
(2, 3),
(3, 5),
(4, 3),
(5, 3),
(6, 3),
(7, 4),
(8, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`Codcorrida`);

--
-- Índices para tabela `equipa`
--
ALTER TABLE `equipa`
  ADD PRIMARY KEY (`Codequipa`);

--
-- Índices para tabela `equipa_ponto`
--
ALTER TABLE `equipa_ponto`
  ADD PRIMARY KEY (`CodEquipa`);

--
-- Índices para tabela `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`CodPiloto`);

--
-- Índices para tabela `piloto_equipa`
--
ALTER TABLE `piloto_equipa`
  ADD PRIMARY KEY (`CodPiloto`,`CodEquipa`),
  ADD KEY `CodEquipa` (`CodEquipa`);

--
-- Índices para tabela `piloto_ponto`
--
ALTER TABLE `piloto_ponto`
  ADD PRIMARY KEY (`CodPiloto`);

--
-- Índices para tabela `piloto_vencedor`
--
ALTER TABLE `piloto_vencedor`
  ADD PRIMARY KEY (`Codcorrida`,`CodPiloto`),
  ADD KEY `CodPiloto` (`CodPiloto`);

--
-- Restrições para despejos de tabelas
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
