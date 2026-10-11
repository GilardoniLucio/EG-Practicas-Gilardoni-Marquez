CREATE DATABASE IF NOT EXISTS Compras DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE Compras;

CREATE TABLE catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    precio DECIMAL(11,2) NOT NULL
);

INSERT INTO catalogo (producto, precio) VALUES
('Zapatillas Deportivas', 45000.00),
('Remera Algodon', 12000.50),
('Pantalon Jean', 35000.00),
('Campera de Cuero', 85000.00);