CREATE DATABASE fogozero;
USE fogozero;

CREATE TABLE IF NOT EXISTS usuarios
(
    id_usuario BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(15) NOT NULL UNIQUE,
    cpf VARCHAR(14) UNIQUE,
    cep VARCHAR(8),
	rua VARCHAR(100),
    numero VARCHAR(15),
    bairro VARCHAR(100),
    estado VARCHAR(50),
    cidade VARCHAR(100),
    imagem VARCHAR(255)
);

/* 
INSERT INTO usuarios(nome, email, senha, telefone) VALUES("kaique", "kaiqsouza2004@hotmail.com", "123456", "14991144192"); 

SELECT * FROM usuarios;
*/

CREATE TABLE IF NOT EXISTS denuncias
(
	id_denuncia BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100),
    localizacao VARCHAR(255) NOT NULL,
    latitude DECIMAL(15,14),    /* ou 10,8 */
    longitude DECIMAL(15,14),   /* ou 11,8 */
    data_denuncia DATETIME NOT NULL,
    comentario VARCHAR(255),
    arquivo VARCHAR(255) NOT NULL,
	
    usuario_id BIGINT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS codigos
(
	id_codigo BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(6) NOT NULL,
    data_utilizacao DATETIME NOT NULL,
    tempo_expiracao DATETIME NOT NULL,
    
    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia)
);

CREATE TABLE IF NOT EXISTS alertas
(
	id_alerta BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    conteudo VARCHAR(255) NOT NULL,
    data_hora DATETIME NOT NULL,
    
    usuario_id BIGINT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS feedbacks
(
	id_feedback BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data_feedback DATETIME NOT NULL,
    comentario VARCHAR(255),
    arquivo VARCHAR(255),
    
    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia),
    usuario_id BIGINT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);