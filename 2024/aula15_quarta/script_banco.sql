CREATE TABLE fabricante(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    endereco VARCHAR(255),
    documento VARCHAR(255) NOT NULL
);

CREATE TABLE produto(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    estoque INT DEFAULT 0,
    preco DOUBLE NOT NULL,
    fabricante_fk INT,
    FOREIGN KEY (fabricante_fk) REFERENCES fabricante(id)
);