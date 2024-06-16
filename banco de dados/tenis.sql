CREATE DATABASE cadastro
use cadastro

CREATE TABLE tenis (
  marca varchar(50) NOT NULL,
  modelo varchar(50) NOT NULL,
  tamanho int NOT NULL,
  preco int NOT NULL     
);



INSERT INTO tenis (marca, modelo, tamanho, preco) VALUES
('adidas', 'rosa', 41, 100),
('olimpico', 'branco', 40, 152),
('pulma', 'azul', 42, 199),
('nike', 'preto', 45, 130);

COMMIT;

SELECT * FROM tenis;




UPDATE tenis
SET preco = 15
WHERE marca = 'adidas' AND modelo = 'preto';


UPDATE tenis
SET tamanho = 42
WHERE marca = 'nike' AND modelo = 'preto' AND tamanho = 40;



SELECT * FROM tenis;


SELECT * FROM tenis
WHERE marca = 'adidas';


SELECT * FROM tenis
WHERE marca = 'nike' AND modelo = 'preto' AND tamanho = 45 AND preco = 130;
 


DELETE FROM tenis
WHERE marca = 'adidas' AND modelo = 'preto';


DELETE FROM tenis
WHERE marca = 'nike' AND modelo = 'preto' AND tamanho = 40;
