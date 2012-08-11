GRANT SELECT, INSERT, UPDATE, DELETE ON eshop.* TO web@localhost;
CREATE DATABASE IF NOT EXISTS eshop COLLATE utf8_general_ci;
USE eshop;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_UNIQUE` (`url`),
  KEY `parent` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `amount` int(10) unsigned DEFAULT NULL,
  `orders_id` int(10) unsigned NOT NULL,
  `products_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_items_orders1` (`orders_id`),
  KEY `fk_order_items_products1` (`products_id`),
  CONSTRAINT `fk_order_items_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `fk_order_items_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `payment_method` int(10) unsigned NOT NULL,
  `variable_number` varchar(45) NOT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users1` (`users_id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL,
  `about` text NOT NULL,
  `amount` decimal(8,0) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT '0',
  `categories_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_categories` (`categories_id`),
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` char(50) NOT NULL,
  `salt` char(10) NOT NULL,
  `admin` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
