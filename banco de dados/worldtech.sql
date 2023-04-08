-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2023 às 22:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `worldtech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `destaque` varchar(3) NOT NULL,
  `promocao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `categoria`, `descricao`, `preco`, `foto`, `destaque`, `promocao`) VALUES
(8, 'Tablet Amazon Fire HD10', 'Tablet', 'Compacto, rápido e perfeito para tudo o que você precisa, o Tablet Amazon é a opção que faltava para te manter conectado com o mundo!', '954.48', '../produto/fotos/Amazon Fire  .jpg', '', ''),
(11, 'Tablet Samsung Galaxy Tab S6 Lite', 'Tablet', 'O Galaxy Tab S6 Lite é o tablet da Samsung desenvolvido com muita tecnologia para proporcionar aos usuários todo desempenho e praticidade que necessitam, e vem cheio de recursos focados para que você ponha em prática toda sua criatividade e produtividade.', '2078.28', '../produto/fotos/Galaxy Tab S6 Lite.jpg', '', ''),
(12, 'Apple iPad (9ª geração)', 'Tablet', 'Apple iPad (9 geração) A13 Bionic (10,2\", Wi-Fi, 64GB) - Cinza-espacial.', '3799.99', '../produto/fotos/ipad 9.jpg', '', ''),
(13, 'iPad Pro 12.9 Apple', 'Tablet', 'iPad Pro com Chip M1 da Apple, tela Liquid Retina impressionante de 12,9\" polegadas e conexão celular 5G ultrarrápida. Prepare-se. O iPad Pro vem com o desempenho fora de série do chip M1 da Apple e bateria para o dia todo. A tela Liquid Retina do modelo ', '12599.99', '../produto/fotos/ipad 12.jpg', '', ''),
(14, 'Tablet Multilaser M9 NB357', 'Tablet', 'Tablet Multilaser M9 NB357 com Tela 9\", 32GB, Wi-fi, Câmera 2MP, Android 11 Go Edition, Processador Quad Core - Preto. Com esse incrível Tablet M9 NB357 da Multilaser você terá em mãos um super eletrônico que te acompanhará nos afazeres diários, com quali', '399.99', '../produto/fotos/Multilaser M9.jpg', '', ''),
(15, 'Tablet Philco 7\"', 'Tablet', 'Tablet Philco 7 3G Cinza PTB7SSG - Bivolt O Tablet Philco 7\' 3G Cinza PTB7SSG - Bivolt com o Android 9 Go aproveita o poder da inteligência artificial para oferecer mais do seu tablet. Agora é mais inteligente, mais rápido e se adapta à sua utilização. Po', '689.99', '../produto/fotos/Philco 7 .jpg', '', ''),
(16, 'Galaxy Tab S8 5G', 'Tablet', 'A melhor e mais potente performance já vista em um tablet Android. Seus aplicativos mais pesados para uso Não trabalho e para sua criatividade rodarão sem os incômodos \"engasgos\" com o processador Snapdragon Geração 8 de 4 nm e 8GB de memória RAM. A memór', '6342.99', '../produto/fotos/Tab s8 5G.jpg', 'sim', ''),
(17, 'Tablet Philco Multitoque', 'Tablet', 'O Tablet Philco Multitoque Android 10 32GB PTB8RRG 4G 8’’ tem processador QuadCore, Android 10 e 32 GB de armazenamento. Um aparelho completo para você. Possui as principais tecnologias de interatividade do mercado. Bluetooth, sistema 4G, câmera frontal e', '699.99', '../produto/fotos/Philco Multitoque.jpg', '', ''),
(18, 'Tablet Philco 10', 'Tablet', 'Com o Tablet Philco 10 PTB10RSG 3G você aproveita o poder da inteligência artificial. Ele tem Sistema Android 9.0 para oferecer mais. É mais inteligente, mais rápido e se adapta à sua utilização. Possui as principais tecnologias de interatividade do merca', '799.99', '../produto/fotos/Philco 10.jpg', '', ''),
(19, 'Samsung Galaxy A03', 'Smartphone', 'A linha A da Samsung continua crescendo, conheça o Galaxy A03 Core que combina a potência de processamento Octa-core e 2 GB de RAM, para um desempenho rápido e eficiente. Ele vem com 32 GB de armazenamento interno, podendo ser ampliado e garantir ainda ma', '599.99', '../produto/fotos/A03.jpg', '', ''),
(20, 'Smartphone Motorola E32', 'Smartphone', 'Smartphone Motorola E32 64GB 4GB RAM 4G Câmera Tripla + Selfie 8MP Tela 6.5`` Rose - O Moto E32 é fino, elegante e completo. Tá com tudo. O novo moto e32 dá mais estilo ao seu dia a dia. O design fino com acabamento superior é feito com materiais duráveis', '889.99', '../produto/fotos/E32.jpg', '', ''),
(21, 'iPhone 11 Apple', 'Smartphone', 'iPhone 11 Apple 64GB branco, Tela de 6,1”, Câmera Dupla de 12MP, iOS - Grave vídeos 4K, faça belos retratos e capture paisagens inteiras com o novo sistema de câmera dupla. Tire fotos incríveis com pouca luz usando o modo Noite. Veja cores fiéis em fotos,', '2969.99', '../produto/fotos/iphone11.jpg', '', ''),
(22, 'Apple iPhone 14 Pro', 'Smartphone', 'Apple iPhone 14 Pro 128GB Dourado - iPhone 14 Pro. Câmera grande-angular de 48 MP para capturar detalhes impressionantes. Dynamic Island, uma nova forma de interação no iPhone. Tela Sempre Ativa. E Detecção de Acidente*, um novo recurso de segurança que l', '7199.99', '../produto/fotos/iphone14pro.jpg', '', ''),
(23, 'Smartphone LG K52', 'Smartphone', 'Smartphone LG K52 Vermelho 64GB, 3GB de RAM, Tela de 6.6”, Câmera Traseira Quádrupla, Android 10, Inteligência Artificial e Processador Octa-Core - O Smartphone LG K52 chega para inovar o seu jeito de fotografar. Ele possui câmera traseira quádrupla, cada', '1119.99', '../produto/fotos/LGK52.jpg', '', ''),
(25, 'Xiaomi POCO X4 Pro', 'Smartphone', 'Smartphone Xiaomi POCO X4 Pro 256GB 5G Tela 6,67`` 8GB RAM Câmera Tripla + Selfie 16MP Azul - A poderosa tela é muito mais do que apenas um capricho. A série POCO X agora tem uma tela AMOLED e é compatível com DCI-P3. A gama de cores ampliada produz detal', '3569.99', '../produto/fotos/POCO.jpg', '', ''),
(26, 'Redmi Note 11', 'Smartphone', 'Smartphone Redmi Note 11 Quad Câmera 6,4 128GB 4GB Ram Xiaomi CX332 - Com o Redmi Note 11, você tem em mãos um smartphone único, equipado com um excelente conjunto de câmeras. A câmera principal de 50MP captura a clareza dos detalhes e, a lente ultra angu', '1449.99', '../produto/fotos/Redmi11.jpg', 'sim', ''),
(27, 'Samsung Galaxy S20 FE', 'Smartphone', 'Smartphone Samsung Galaxy S20 FE 5G Azul 128GB, 6GB RAM, Tela Infinita de 6.5”, Câmera Traseira Tripla, Android 12 e Processador Snapdragon 865 - Prepare-se para conhecer o smartphone da Samsung, o Galaxy S20 FE agora versão 5G, que promete mudar a maneir', '2349.99', '../produto/fotos/S20FE.jpg', '', ''),
(28, 'Samsung Galaxy S22', 'Smartphone', 'Smartphone Samsung Galaxy S22 5G, 128GB, 8GB RAM, Tela Infinita de 6.1\", Câmera Tripla Traseira de 50MP OIS (Wide) + 10MP OIS (Telephoto) + 12MP (Ultra-Wide), Câmera Frontal 10MP com Autofoco, IP68, Leitor de Digital na Tela, Wireless PowerShare, Android ', '3449.99', '../produto/fotos/s22.jpg', '', ''),
(29, 'Motorola Moto G22', 'Smartphone', 'Smartphone Motorola Moto R$ 2.349,00 G22 128GB 4GB RAM Câmera Quádrupla 50MP+8MP+2MP+2MP Frontal 16MP Azul - O Smartphone Moto G22 da Motorola. A linha Moto G uni poder e qualidade em um aparelho que traz memória interna de alta capacidade para você guard', '2349.99', '../produto/fotos/Moto G.jpg', 'sim', ''),
(30, 'AMAZFIT GTS 2 mini', 'Relógio', 'O GTS 2 mini da Amazfit é um relógio completo, tem além de lindo design especificações incríveis que vão encantar o usuário! Uma pequena tela de 1.55 polegadas e alta saturação de cor vai mostrar as horas, dados e notificações com muita clareza em seu pul', '579.99', '../produto/fotos/AMAZFIT GTS 2 mini.jpg', '', ''),
(31, 'Smartwatch Preto B57', 'Relógio', 'Smartwatch B57 também conhecido por alguns por Hero Band, relógio inteligente com bluetooth, seu dia a dia se torna muito mais fácil! Com design bonito e moderno, diferente dos relógios comuns', '181.99', '../produto/fotos/B57.jpg', '', ''),
(32, 'SmartWatch C3Tech RD-10BK', 'Relógio', 'SmartWatch RD-10BK Tela 0,96\" Bluetooth 80 x 160 C3Tech O SmartWatch RD-10BK foi desenvolvido com design fino para proporcionar ainda mais conforto durante seu uso. Possui controle de temperatura através de um sensor, além de diversas funções como notific', '72.99', '../produto/fotos/C3Tech RD.jpg', '', ''),
(33, 'Smartwatch Zeblaze Gtr', 'Relógio', 'Zeblaze Relógio Smartwatch Gtr Conectividade Bluetooth 5.1 Tela Hd de 1.3 polegadas Monitoramento Frequência Cardíaca Classificação Resistência à Água Até 3Atm Notificações Mensagens Chamada Capacidade de Bateria Até 9 dias Compatível com Android e IOS / ', '245.99', '../produto/fotos/GTR.jpg', 'sim', ''),
(34, 'Relógio Inteligente Smart Watch HW19', 'Relógio', 'Um dos itens de consumo mais desejados dos últimos tempos é o Smartwatch. Além de mostrar as horas, esse relógio inteligente também conta com os mais variados recursos, sendo o mais conhecido o contador de passos e a medição de frequência cardíaca. São es', '228.99', '../produto/fotos/hw19.jpg', '', ''),
(35, 'Smartwatch Mibro Lite', 'Relógio', 'O relógio inteligente Mibro Lite foi desenvolvido para apresentar um design elegante e sofisticado, que conta uma tela amoled Hd de 1.3 polegadas para uma excelente experiência de visualização. Dispõe de recursos como monitoramento de frequência cardíaca ', '341.88', '../produto/fotos/Mibro Lite.jpg', '', 'sim'),
(36, 'Smart Watch Feminino Oled P70', 'Relógio', '- O relógio Possui a opção de poder colocar sua própria foto como capa do relógio. - Receber Notificações de redes sociais SMS entre outros. - Basta Girar o pulso para mostrar as horas. - 3 Modelos de mostradores de relógio diferentes para uso (analógico ', '180.99', '../produto/fotos/P70.jpg', '', ''),
(37, 'Smartwatch Inteligente X8 max', 'Relógio', 'O smartwatch x8 MAX é um dos smartwatch mais completo do mercado, contando com funções  que buscam o monitoramento da saúde e o desempenho esportivo sem deixar seu estilo de lado,  podendo personalizar com suas fotos e fazer chamadas telefônicas.  Saúde: ', '199.99', '../produto/fotos/x8.jpg', 'sim', ''),
(38, 'Apple AirPods,', 'Fone deouvido', 'Fone de Ouvido Apple AirPods, com estojo de recarga - MV7N2BE/A O Novo AirPods traz uma experiência nova em usar fones de ouvido sem fio. É só tirá-los do estojo e estão prontos para uso com seu iPhone, Apple Watch, iPad ou Mac. Ele oferece cinco horas de', '1399.99', '../produto/fotos/AirPods.jpg', '', ''),
(39, 'Huawei FreeBuds 3', 'Fone de ouvido', 'O fone de ouvido sem fio FreeBuds 3, desenvolvido pela chinesa Huawei, oferece o melhor som em um design projetado ergonomicamente para o máximo conforto. O estojo arredondado do FreeBuds 3 é equipado com recursos de carregamento sem fio, padrão Qi (2W) o', '519.99', '../produto/fotos/huawei.jpg', '', ''),
(40, 'Headphone JBL Tune 510BT', 'Fone de ouvido', 'Os fones de ouvido JBL Tune 510BT oferecem o potente som JBL Pure Bass sem fios. Fáceis de usar, esses fones de ouvido proporcionam até 40 horas de puro prazer e 2 horas extras de bateria com apenas 5 minutos de carga, via um cabo carregador USB-C. E se v', '215.99', '../produto/fotos/jbl black.jpg', 'sim', ''),
(42, 'Motorola Moto XT 220', 'Fone de ouvido', 'O Fone de Ouvido Bluetooth Motorola Moto XT 220 produz excelente qualidade de som, usa Bluetooth de baixo consumo de energia e oferece 24 horas de reprodução de música ininterrupta. Este fone de ouvido sem fio também vem com um cabo de áudio destacável de', '249.99', '../produto/fotos/motorola.jpg', '', ''),
(44, 'TWS Samsung Galaxy Buds2', 'Fone de ouvido', 'O Galaxy Buds2 é um fone de ouvido totalmente sem fio, o que te dá maior liberdade atividades tanto no dia a dia, no lazer ou para o esporte. Oferece uma experiência de som mais imersivo através Alto falantes duplos e melhor qualidade de chamada. Os alto-', '629.99', '../produto/fotos/samsung.jpg', '', ''),
(45, 'Notebook Gamer Acer', 'Notebook', 'O Acer Nitro 5 é um Notebook perfeito para quem deseja aprimorar sua experiência em jogos. Esteja preparado para o desafio, o Aspire Nitro 5 faz você mergulhar de cabeça na ação.', '5858.07', '../produto/fotos/acer nitro.jpg', '', ''),
(46, 'Notebook ASUS Vivobook', 'Notebook', 'Seja para estudar ou para se divertir, ASUS VivoBook 15 é o notebook ideal para se concentrar. Com tela de bordas ultrafinas, ergonômico e eficiente, compacto, fino e leve, o ASUS VivoBook 15 X513 é compacto, mas muita tela e produtividade.', '4149.00', '../produto/fotos/Asus vivobook.jpg', '', ''),
(47, 'Notebook Dell Inspiron 15', 'Notebook', 'O novo notebook Inspiron 15 é fácil de usar e mantém sua produtividade. Faça tudo com eficiência: Os mais recentes processadores Intel® CoreTM de 11ª geração com Intel® Iris® Xe graphics oferecem capacidade de resposta incrível e multitarefa contínua.', '5849.00', '../produto/fotos/Dell inspiriton .jpg', 'sim', ''),
(48, 'Notebook Dell Vostro', 'Notebook', 'Descubra o sucesso todos os dias. O notebook empresarial Vostro foi desenvolvido para pequenas empresas contando com recursos essenciais, segurança integrada e suporte confiável.', '6199.99', '../produto/fotos/dell.jpg', '', ''),
(49, 'Notebook Lenovo®', 'Notebook', 'Notebook Lenovo®, Intel® CoreT i7-1165G7, 12GB, 256GB SSD, Tela de 15,6\", Prata, IdeaPad 3i - 82MD000HBR', '4499.99', '../produto/fotos/lenovo.jpg', 'sim', ''),
(50, 'Notebook Gamer Lenovo 3I', 'Notebook', 'Notebook Gamer Lenovo 3I - Full Hd, Intel I7 10750H, 16Gb, Ssd 512Gb, Geforce G T X-1650, Windows Pro', '7899.99', '../produto/fotos/lenovo 3L.jpg', '', ''),
(51, 'Notebook Apple MacBook Pro 13', 'Notebook', 'Notebook Apple MacBook Pro 13\" com M2 da Apple, 8 CPU, 10 GPU, 8GB RAM, 256GB SSD - Cinza-espacial', '15499.99', '../produto/fotos/MacBook Pro.jpg', '', ''),
(53, 'Notebook Samsung Book', 'Notebook', 'Notebook Samsung Book Intel® Core™ i7-1165G7 Windows 11 Home, 8GB, 256GB SSD, Intel® Iris® Xe, 15.6\" - Cinza', '3999.99', '../produto/fotos/Samsung Book.jpg', '', ''),
(74, 'JBL E35 BRANCO', 'Fone de ouvido', '...', '379.99', '../produto/fotos/fone1.png', 'nao', 'sim'),
(90, 'Notebook Philco Core i3', 'Notebook', 'O Notebook Philco é muito leve e fácil de carregar para todos os lugares que você precisa. Navegue, trabalhe, estude; descubra como aumentar a produtividade do seu dia a dia, unindo todas as funcionalidades do Windows 10 com a potência do Notebook Philco', '1699.00', '../produto/fotos/philco.jpg', 'nao', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` int(14) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `nivel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `senha`, `nome`, `telefone`, `endereco`, `email`, `dataNascimento`, `nivel`) VALUES
(123, '$2y$10$hsxE6Qa4lOOdIBPUIfo68eA5RuIXKcbDbJ5.f5q.Pn8JM4FtOSUwq', 'Gabriel Modesto', '21992331670', '', 'Gabriel@worldtech.com.br', '2023-03-18', 'adm'),
(1235, '$2y$10$swyybIeKaAqC90g0R.3bAujAK.jthFpWs.u5ydhGLYOZsacaXipn.', 'Gabriel', '123', '', 'teste@gmail.com', '2023-04-01', 'usu'),
(3333, '$2y$10$V8RSbxN5Wgq7XH4r7eTNG.5E5YZIOC2VR9gMpV.eyKWd7XohyLmm6', 'pedro', '21997369661', '', 'luis.br@gmail.com', '2023-03-01', 'usu'),
(12345, '$2y$10$RPw.mC.ro.lqvHcMQE42xuE.OhhpGt98mEQPjdJzQsW/Phr7lCs8m', 'userTeste', '21992331670', '', 'user.teste@worldtech.com.br', '2023-06-26', 'usu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
