CREATE DATABASE FogoZero;
USE FogoZero;

CREATE TABLE IF NOT EXISTS usuarios
(
    id_usuario BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(15) NOT NULL UNIQUE,
    cpf VARCHAR(14) UNIQUE NULL,
    cep VARCHAR(8) NULL,
	rua VARCHAR(100) NULL,
    numero VARCHAR(15) NULL,
    bairro VARCHAR(100) NULL,
    estado VARCHAR(50) NULL,
    cidade VARCHAR(100) NULL,
    imagem VARCHAR(255) NULL
);

CREATE TABLE IF NOT EXISTS denuncias
(
	id_denuncia BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100) NULL,
    localizacao VARCHAR(255) NOT NULL,
    latitude VARCHAR(255) NULL, /* ver tamanho */
    longitude VARCHAR(255) NULL,
    data_denuncia DATETIME NOT NULL,
    comentario VARCHAR(255) NULL,
    arquivo VARCHAR(255) NOT NULL,
	cod_confirmacao VARCHAR(5) NOT NULL,
	
    usuario_id BIGINT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS codigos
(
	id_codigo BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(5) NOT NULL,
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
    comentario VARCHAR(255) NULL,
    arquivo VARCHAR(255) NULL,
    
    denuncia_id BIGINT NOT NULL,
    FOREIGN KEY (denuncia_id) REFERENCES denuncias(id_denuncia),
    usuario_id BIGINT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario)
);