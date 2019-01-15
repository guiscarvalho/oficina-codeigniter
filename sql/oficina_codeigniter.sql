CREATE DATABASE oficina_codeigniter;
USE oficina_codeigniter;

CREATE TABLE IF NOT EXISTS usuario(
	id_usuario INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    data_nascimento DATE,
    cpf VARCHAR(14)
);

INSERT INTO usuario VALUES
	  (null, "Guilherme Carvalho", "1999-10-01", "031.261.130-79"),
    (null, "Cassiano Pacheco", "1998-12-12", "123.456.789-10"),
    (null, "Edmilson Filho", "1998-11-25", "109.876.543-21");
