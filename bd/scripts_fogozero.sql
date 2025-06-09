/*
CREATE DATABASE fogozero;
USE fogozero;
*/

CREATE TABLE IF NOT EXISTS usuarios
(
    id_usuario BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) UNIQUE,
    cep VARCHAR(8),
    cidade VARCHAR(100),
    estado VARCHAR(50),
    bairro VARCHAR(100),
	rua VARCHAR(100),
    numero VARCHAR(15),
    imagem VARCHAR(255)
);

/* 
INSERT INTO usuarios(nome, email, senha) VALUES("kaique", "kaiqsouza2004@hotmail.com", "123456"); 

SELECT * FROM usuarios;
*/

CREATE TABLE IF NOT EXISTS denuncias
(
	id_denuncia BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100),
    localizacao VARCHAR(255) NOT NULL,
    latitude VARCHAR(11),   
    longitude VARCHAR(11),
    data_denuncia DATETIME NOT NULL,
    comentario VARCHAR(255),
    arquivo VARCHAR(255) NOT NULL,
    status_denuncia TINYINT NOT NULL DEFAULT 1,
	
    usuario_id BIGINT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS alertas
(
	id_alerta BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data_hora DATETIME NOT NULL,

    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia)
);

CREATE TABLE IF NOT EXISTS feedbacks
(
	id_feedback BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    comentario VARCHAR(255) NOT NULL,
    data_feedback DATETIME NOT NULL,
    arquivo VARCHAR(255),
    
    usuario_id BIGINT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia)
);