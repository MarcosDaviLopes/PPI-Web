CREATE DATABASE Usuarios;

use Usuarios;

CREATE TABLE usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL
);

INSERT INTO usuario (nome, telefone, email, senha) VALUES
  ('João', '123456789', 'joao@gmail.com', '123'),
  ('Maria', '987654321', 'maria@gmail.com', 'Maria');