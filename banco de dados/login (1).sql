
use cadastro

CREATE TABLE login (
  nome varchar(50) NOT NULL,
  senha int NOT NULL
);

INSERT INTO login (nome, senha) VALUES
('adm', 123),
('adm', 555);
 
 INSERT INTO login (nome, senha) VALUES ('kayron', 777);

DELETE FROM login
WHERE nome = 'adm';

UPDATE login
SET senha = 777
WHERE nome = 'kayron';



SELECT * FROM login;


SELECT * FROM login;

