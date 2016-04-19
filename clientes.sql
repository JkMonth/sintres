CREATE DATABASE conalmi;
SHOW DATABASES;
USE conalmi;

CREATE TABLE tipoid(
tipoid VARCHAR(3),
nombreid VARCHAR(40),
PRIMARY KEY (tipoid));

CREATE TABLE clientes(
id BIGINT,
tipoid VARCHAR(3),
nombre VARCHAR(50),
direccion VARCHAR(50),
telefono INT,
celular BIGINT,
email VARCHAR(50),
PRIMARY KEY(id,tipoid),
FOREIGN KEY(tipoid) REFERENCES tipoid(tipoid)); 

DESCRIBE clientes;
DESCRIBE tipoid;
