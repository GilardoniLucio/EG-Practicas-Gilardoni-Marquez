CREATE DATABASE IF NOT EXISTS base2 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE base2;

CREATE TABLE alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigocurso INT NOT NULL,
    mail VARCHAR(100) NOT NULL
);

INSERT INTO alumnos (codigo, nombre, codigocurso, mail) VALUES
(1, 'Pablo Clavo Clavito', 123, 'pablo@example.com'),
(2, 'Matias Saitam', 456, 'matias@example.com'),
(3, 'Lugo Lugano', 789, 'lugo@example.com'),
(4, 'Valentina Martinez', 101, 'medellin@example.com'),
(5, 'Lima Limon', 102, 'lima@example.com'),
(6, 'Pilar Pillar', 103, 'caracas@example.com'),
(7, 'Santiago no tiene apellido', 104, 'santiago@example.com'),
(8, 'Carlos Rodriguez', 105, 'antigua@example.com'),
(9, 'Quito Esta', 106, 'quito@example.com'),
(10, 'La Le Li Lo Lu', 107, 'lahabana@example.com'); 