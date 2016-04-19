CREATE DATABASE conalmi;
SHOW DATABASES;
USE conalmi;
CREATE TABLE clientes(
id BIGINT,
tipoid VARCHAR(3),
nombre VARCHAR(50),
direccion VARCHAR(30),
telefono INT,
celular BIGINT,
email VARCHAR(30)); 
SHOW TABLES;
DESCRIBE clientes;