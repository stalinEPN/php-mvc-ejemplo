-- archivo para crear una base de datos mysql para la aplicacion de ejemplo
CREATE DATABASE mvc;
USE mvc;
CREATE TABLE alumnos (
    matricula VARCHAR(50),
    nombre VARCHAR(100),
    apellido VARCHAR(100)
);
