create database Usuarios;

use Usuarios;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  data_nascimento DATE NOT NULL
);

INSERT INTO usuarios (nome, telefone, email, data_nascimento) VALUES
  ('João', '123456789', 'joao@example.com', '1990-01-01'),
  ('Maria', '987654321', 'maria@example.com', '1995-02-15');