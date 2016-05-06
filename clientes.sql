CREATE DATABASE conalmi;
USE conalmi;

CREATE TABLE tipoid(
tipoid VARCHAR(3),
numeroid VARCHAR(40),
PRIMARY KEY (tipoid));

CREATE TABLE clientes(
tipoid VARCHAR(3),
numeroid BIGINT,
contraseña VARCHAR(30),
nombre VARCHAR(50),
direccion VARCHAR(50),
telefono INT,
celular BIGINT,
email VARCHAR(50),
PRIMARY KEY(numeroid,tipoid),
FOREIGN KEY(tipoid) REFERENCES tipoid(tipoid)); 

INSERT INTO tipoid VALUES("CC","CEDULA");
INSERT INTO tipoid VALUES("NIT","NIT");
INSERT INTO tipoid VALUES("CE","EXTRANJERIA");

