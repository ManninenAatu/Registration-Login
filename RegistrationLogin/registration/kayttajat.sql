DROP DATABASE IF EXISTS oppimistehtava;
CREATE DATABASE oppimistehtava DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE oppimistehtava;
DROP TABLE IF EXISTS kayttajat;
CREATE TABLE kayttajat (
  id int(10) auto_increment,
  Tunnus varchar(100) NOT NULL, 
  Salasana varchar(100) NOT NULL
  PRIMARY KEY  (id)
);
