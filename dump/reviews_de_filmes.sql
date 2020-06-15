-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2020 às 14:03
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reviews_de_filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `diretor` varchar(100) NOT NULL,
  `sinopse` text DEFAULT 'Sinopse em falta',
  `nota` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT 'sem_foto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `genero`, `diretor`, `sinopse`, `nota`, `foto`) VALUES
(16, 'Piratas do Caribe: A maldição do Pérola Negra', 'aventura', 'Gore Verbinski', 'O pirata Jack Sparrow tem seu navio saqueado e roubado pelo capitão Barbossa e sua tripulação. Com o navio de Sparrow, Barbossa invade a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar sua embarcação, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direção à misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldição que os assola.', 8, 'piratas do caribe ON.jpg'),
(17, 'As Branquelas', 'comedia', 'Keenen Ivory Wayans', 'Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos em uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites para o Hampton. Porém quando as meninas descobrem o plano do FBI, elas se recusam a ir. Sem opções, Marcus e Kevin decidem posar como irmãs, transformando-se de homens afro-americanos em um par de loiras.', 10, 'as branquelas.jpg'),
(18, 'Homens de Preto', 'ação, comédia', 'Barry Sonnenfeld', 'Kay e Jay, os \"Homens de Preto\", são o maior segredo já mantido no universo. Eles são agentes de uma agência não-oficial do governo e responsáveis por monitorar todos os encontros com alienígenas na Terra. Ao investigar uma série de atividades extraterrestres, descobrem um terrorista intergaláctico cuja missão é assassinar dois embaixadores de galáxias opostas.', 8, 'MIB.jpg'),
(19, 'Velozes & Furiosos', 'ação', 'Rob Cohen', 'Brian O\'Conner é um policial que se infiltra no submundo dos rachas de rua para investigar uma série de furtos. Enquanto tenta ganhar o respeito e a confiança do líder Dom Toretto, ele corre o risco de ser desmascarado.', 7, 'VF.jpg'),
(20, 'Divertidamente', 'Infantil', 'Pete Docter', 'Com a mudança para uma nova cidade, as emoções de Riley, que tem apenas 11 anos de idade, ficam extremamente agitadas. Uma confusão na sala de controle do seu cérebro deixa a Alegria e a Tristeza de fora, afetando a vida de Riley radicalmente.', 8, 'Divertid.jpg'),
(21, 'Minions', 'Horror, terror psicotécnico, muitas loucuras', 'não queira saber', 'morte e destruição', 10, 'Minio.jpg'),
(22, 'Nem Que A Vaca Tussa', 'safadeza', 'boa pergunta', 'A vaca tosse no fim...eu acho. Não lembro pra ser honesto.', 5, 'eita.jpg'),
(23, 'Exemplo Sem Img', 'Exemplo', 'Exemplo', 'mano...', 1, 'sem_foto.jpg'),
(24, 'Rarri Poti', 'bruxaria', 'mago magus', 'Magias, plim plim. Diverção', 8, 'HP.jpg'),
(25, 'Cidade de Deus', 'infantil', 'Michael Jackson', 'Vai assistir po.', 10, 'cdd.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `nota` int(11) NOT NULL DEFAULT 6
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id`, `id_filme`, `id_usuario`, `review`, `nota`) VALUES
(15, 16, 34, 'foda', 10),
(16, 16, 1, 'explosão xacabum', 10),
(17, 20, 39, 'Gostei Bastante', 9),
(18, 25, 39, 'foda', 10),
(19, 17, 39, 'incrível', 10),
(20, 21, 39, 'filme muito triste, chorei muito :(', 5),
(21, 24, 39, 'Complicado', 6),
(22, 20, 35, 'Legal', 7),
(23, 16, 35, 'Melhor Filme do Mundo, quem sabe até do Brasil', 2),
(24, 18, 35, 'Maneiro e Descolado.\r\n\r\nGosto mt, will smith lindo.', 10),
(25, 17, 35, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk\r\nkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk\r\nkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 8),
(26, 19, 35, ':(', 6),
(27, 19, 37, 'Gotta go fast', 9),
(28, 21, 37, 'Im scared', 3),
(29, 24, 37, 'Naice', 8),
(30, 25, 41, 'O filme Critica pontos crucias para nossa sociedade refletir.\r\numa obra de arte!', 8),
(31, 16, 41, 'supimpa', 9),
(32, 21, 1, 'descontraido', 9),
(33, 19, 1, 'VRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM!', 8),
(34, 20, 1, 'meh', 4),
(35, 17, 34, 'Melhor Filme', 9),
(36, 18, 36, 'RAWR XD uwu :3   >/////<', 10),
(37, 22, 36, '|    ||\r\n\r\n||    |_', 3),
(38, 19, 36, 'Transito ta perigoso, leva o casaco', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT 'sem_foto_profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nascimento`, `nacionalidade`, `foto`) VALUES
(1, 'Admin', 'admin@admin.com', '123', '0000-00-00', NULL, '20200615090959seth.jpg'),
(34, 'Raul Guedes Oliveira', 'rg.oliveira08@gmail.com', '123', '2000-05-02', NULL, '20200615092339(m=eidYGCjadqg)(mh=GrWbuwHVaf7zVAwF)200x200.jpg'),
(35, 'Jhony Kasparov', 'Jhonny@gmail.com', '123', '1995-10-20', NULL, '2020061509282320200615092339(m=eidYGCjadqg)(mh=GrWbuwHVaf7zVAwF)200x200.jpg'),
(36, 'Maria Antonieta', 'Mari69@420', '123', '1800-12-20', NULL, '2020061509384590b.jpg'),
(37, 'Corona Vairus', 'Coronga@gmail.com', '123', '1998-08-04', NULL, '20200615094345coronga.jpg'),
(38, 'Enzo Silva', 'EnzaoBolado@gmail', '123', '2000-01-15', NULL, 'sem_foto_profile.jpg'),
(39, 'Felps Anão', 'Felpopinho@yahoo', '123', '1997-03-07', NULL, '20200615094622EBl7ML8XoAAy1Re.jpg'),
(40, 'Corolina', 'kakajota@gmail', '123', '1912-12-12', NULL, 'sem_foto_profile.jpg'),
(41, 'Cassia', 'Cassinha132@onlyfans', '123', '2002-09-11', NULL, '20200615100054prk9yqswfza21.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_filme` (`id_filme`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
