CREATE DATABASE IF NOT EXISTS prueba DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE prueba;

CREATE TABLE buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(200) NOT NULL
);

INSERT INTO buscador (canciones) VALUES
('Bohemian Rhapsody - Queen'),
('Stairway to Heaven - Led Zeppelin'),
('Hotel California - Eagles'),
('Imagine - John Lennon'),
('Smells Like Teen Spirit - Nirvana'),
('Sweet Child O Mine - Guns N Roses');