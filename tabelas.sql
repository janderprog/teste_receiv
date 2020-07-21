-- DB receiv
CREATE SCHEMA `receiv` ;

-- TABLE usuarios
CREATE TABLE `receiv`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(30) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `ativo` BIT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));
  
-- INSERT usuario
INSERT INTO `receiv`.`usuarios` (`nome`, `senha`, `email`, `ativo`) VALUES ('usuario 1', '123456', 'usuario@usuario.com.br', b'1');

-- TABLE devedores
CREATE TABLE `devedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_vencimento` date NOT NULL,
  `pago` int(11) NOT NULL DEFAULT '0',
  `alterado` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

