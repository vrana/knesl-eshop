CREATE USER web@localhost;
GRANT SELECT, INSERT, UPDATE, DELETE ON eshop.* TO web@localhost;
CREATE DATABASE IF NOT EXISTS eshop COLLATE utf8_general_ci;
USE eshop;

