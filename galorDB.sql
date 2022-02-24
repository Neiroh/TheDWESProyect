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
    idUser INT NOT NULL,
    numLikes INT,
    PRIMARY KEY (idImg, idUser),
    FOREIGN KEY (idImg) REFERENCES img(idImg)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS coment(
    idImg INT NOT NULL,
    idUser INT NOT NULL,
    text VARCHAR(10000) NOT NULL,
    PRIMARY KEY (idImg, idUser),
    FOREIGN KEY (idImg) REFERENCES img(idImg)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE USER 'arce'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON galor.* TO 'arce'@'localhost';

CREATE USER 'ahmed'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON galor.* TO 'ahmed'@'localhost';

CREATE USER 'jesusro'@'localhost' IDENTIFIED BY '123456';
GRANT ALL ON galor.* TO 'jesusro'@'localhost';