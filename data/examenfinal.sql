--
-- Inicio
--

-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

DROP DATABASE IF EXISTS examenfinal;

CREATE DATABASE IF NOT EXISTS examenfinal
CHARACTER SET utf8
COLLATE utf8_spanish_ci;

--
-- Set default database
--
USE examenfinal;

--
-- Create table `ciudades`
--
CREATE TABLE IF NOT EXISTS ciudades (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) DEFAULT NULL,
  habitantes float DEFAULT NULL,
  escudo varchar(255) DEFAULT NULL,
  mapa varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_spanish_ci;

--
-- Create table `cursos`
--
CREATE TABLE IF NOT EXISTS cursos (
  codigoCurso int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(255) DEFAULT NULL,
  descripcion varchar(255) DEFAULT NULL,
  textoCorto text DEFAULT NULL,
  textoLargo text DEFAULT NULL,
  fechaComienzo datetime DEFAULT NULL,
  fechaFin datetime DEFAULT NULL,
  duracionHoras int(11) DEFAULT NULL,
  destacado tinyint(1) DEFAULT NULL,
  fotoPortada varchar(255) DEFAULT NULL,
  pdf varchar(255) DEFAULT NULL,
  comenzado tinyint(1) DEFAULT NULL,
  finalizado tinyint(1) DEFAULT NULL,
  PRIMARY KEY (codigoCurso)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_spanish_ci;

--
-- Create table `inscripciones`
--
CREATE TABLE IF NOT EXISTS inscripciones (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) DEFAULT NULL,
  apellidos varchar(255) DEFAULT NULL,
  email varchar(50) DEFAULT NULL,
  fechaNacimiento datetime DEFAULT NULL,
  estudios varchar(255) DEFAULT NULL,
  telefono varchar(255) DEFAULT NULL,
  desempleado tinyint(1) DEFAULT NULL,
  curso int(11) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_spanish_ci;

ALTER TABLE inscripciones ADD FOREIGN KEY FK_inscripciones_cursos_codigoCurso (curso)
  REFERENCES cursos(codigoCurso)
  ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Fin
--

