CREATE DATABASE `teste_autogestor` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- teste_autogestor.categories definition

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO teste_autogestor.categories (name) VALUES
	 ('Prospects'),
	 ('Experimentadores'),
	 ('Compradores'),
	 ('Clientes Eventuais'),
	 ('Clientes Regulares'),
	 ('Defensores'),
	 ('Evangelistas');


-- teste_autogestor.clients definition

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO teste_autogestor.clients (first_name,last_name,category_id) VALUES
	 ('Kauê','Leal',1),
	 ('Paulo','Carvalho',2),
	 ('Erison','Lima',3),
	 ('Ykaro','Kayky',3),
	 ('André','Pinto',4),
	 ('Flávio','Prado',5),
	 ('Gabriel','Barbosa',5),
	 ('João','Senna',6),
	 ('Patrícia','Oliveira',7),
	 ('Renata','Silva',1);
INSERT INTO teste_autogestor.clients (first_name,last_name,category_id) VALUES
	 ('Luciana','Diniz',2),
	 ('Fabrícia','Aguiar',6);

-- teste_autogestor.clients_categories source

CREATE OR REPLACE
ALGORITHM = UNDEFINED VIEW `teste_autogestor`.`clients_categories` AS
select
    `cli`.`first_name` AS `first_name`,
    `cli`.`last_name` AS `last_name`,
    `cat`.`name` AS `name`
from
    (`teste_autogestor`.`clients` `cli`
join `teste_autogestor`.`categories` `cat` on
    (`cli`.`category_id` = `cat`.`id`));
    
