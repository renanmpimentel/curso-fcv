CREATE SCHEMA `banco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

CREATE TABLE `banco`.`palestrante` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `palestra` VARCHAR(45) NULL,
  `resumo` TEXT NULL,
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

CREATE TABLE `banco`.`ouvinte` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(2) NULL,
  `telefone` VARCHAR(17) NULL,
  `observacao` TEXT NULL,
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

CREATE TABLE `banco`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `senha` VARCHAR(40) NULL,
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

-- 
INSERT INTO `banco`.`ouvinte` (`nome`, `email`, `cidade`, `estado`, `telefone`, `observacao`) VALUES 
('Nome Primeiro', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Segundo', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Terceiro', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Quarto', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Quinto', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Sexto', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma'),
('Nome Setimo', 'email@email.com.br', 'cidade', 'uf', '(00) 0000-0000', 'Nenhuma');

--
INSERT INTO `banco`.`usuario` (`usuario`, `senha`) VALUES ('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
