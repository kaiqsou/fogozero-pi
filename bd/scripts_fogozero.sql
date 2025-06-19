/*
CREATE DATABASE fogozero;
USE fogozero;
*/

CREATE TABLE IF NOT EXISTS usuarios
(
    id_usuario BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    telefone VARCHAR(14) UNIQUE DEFAULT NULL,
    senha VARCHAR(255) NOT NULL,
    cep VARCHAR(10) DEFAULT NULL,
    cidade VARCHAR(100) DEFAULT NULL,
    estado VARCHAR(50) DEFAULT NULL,
    bairro VARCHAR(100) DEFAULT NULL,
	rua VARCHAR(100) DEFAULT NULL,
    numero VARCHAR(15) DEFAULT NULL,
    imagem VARCHAR(255) DEFAULT NULL,
    tipo_usuario ENUM('Administrador', 'Comum') NOT NULL DEFAULT 'Comum'
);

INSERT INTO usuarios(nome, email, senha, tipo_usuario) VALUES("kaique", "kaiqsouza2004@hotmail.com", "123456", "Administrador"); 

/*
SELECT * FROM usuarios;
*/

CREATE TABLE IF NOT EXISTS denuncias
(
	id_denuncia BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    data_denuncia DATETIME NOT NULL,
    comentario VARCHAR(255) DEFAULT NULL,
    imagem VARCHAR(255) DEFAULT NULL,
    status_denuncia ENUM('Ativo', 'Inativo') NOT NULL DEFAULT 'Ativo',

    usuario_id BIGINT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario) ON DELETE CASCADE /* quando o usuario nao existir, as denuncias dele sumirá */
);

CREATE TABLE IF NOT EXISTS alertas
(
	id_alerta BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS feedbacks
(
	id_feedback BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    comentario VARCHAR(255) NOT NULL,
    data_feedback DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    imagem VARCHAR(255),
    
    usuario_id BIGINT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia) ON DELETE CASCADE,

    UNIQUE (usuario_id, denuncia_id)
);