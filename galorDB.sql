CREATE DATABASE IF NOT EXISTS galorDB;
USE galorDB;

CREATE TABLE IF NOT EXISTS user(
	idUser INT PRIMARY KEY AUTO_INCREMENT,
    nombreUser VARCHAR(100) NOT NULL,
    passwd VARCHAR(25) NOT NULL,
    correoUser VARCHAR(200) NOT NULL,
    fotoPerfil LONGBLOB
);

CREATE TABLE IF NOT EXISTS img(
    idImg INT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS likes(
    idImg INT NOT NULL,
    idUser VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS coment(
    idImg INT NOT NULL,
    idUser VARCHAR(200) NOT NULL,
    text VARCHAR(10000) NOT NULL
);

CREATE USER 'arce'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON *.* TO 'arce'@'localhost';

CREATE USER 'ahmed'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON *.* TO 'ahmed'@'localhost';

CREATE USER 'jesusro'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON *.* TO 'jesusro'@'localhost';