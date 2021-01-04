SET FOREIGN_KEY_CHECKS = 0;

-- -----------------------------------------------------
-- Album
-- -----------------------------------------------------
DROP TABLE IF EXISTS Album;
CREATE TABLE Album(
  idAlbum INT NOT NULL,
  Nombre VARCHAR(30) NOT NULL,
  Fecha DATE NULL,
  CantidadCanciones INT NULL,
  PRIMARY KEY (idAlbum)
  );

-- -----------------------------------------------------
--  GeneroMusical
-- -----------------------------------------------------
DROP TABLE IF EXISTS GeneroMusical;
CREATE TABLE GeneroMusical(
  idGenero INT NOT NULL,
  Nombre VARCHAR(45) NULL,
  PRIMARY KEY (idGenero)
  );

-- -----------------------------------------------------
-- Cancion
-- -----------------------------------------------------
DROP TABLE IF EXISTS Cancion;
CREATE TABLE Cancion(
  idCancion INT NOT NULL,
  Nombre VARCHAR(45) NOT NULL,
  FechaLanzamiento DATE NULL,
  idAlbum INT,
  idGenero INT NOT NULL,
  FOREIGN KEY (idAlbum)
  REFERENCES Album(idAlbum),
  FOREIGN KEY (idGenero)
  REFERENCES GeneroMusical(idGenero),
  PRIMARY KEY (idCancion)
  );


-- -----------------------------------------------------
-- Premios
-- -----------------------------------------------------
DROP TABLE IF EXISTS Premios;
CREATE TABLE Premios(
  idPremio INT NOT NULL,
  Nombre VARCHAR(45) NULL,
  PRIMARY KEY (idPremio)
  );


-- -----------------------------------------------------
-- Persona
-- -----------------------------------------------------
DROP TABLE IF EXISTS Persona;
CREATE TABLE Persona(
  RFC VARCHAR(10) NOT NULL,
  Nombre VARCHAR(45) NOT NULL,
  Edad INT NULL,
  PRIMARY KEY (RFC)
  );


-- -----------------------------------------------------
-- Representante
-- -----------------------------------------------------
DROP TABLE IF EXISTS Representante;

CREATE TABLE Representante(
  idRepresentante VARCHAR(10) NOT NULL,
  RFC VARCHAR(10) NOT NULL,
  FOREIGN KEY (RFC)
  REFERENCES Persona(RFC),  
  PRIMARY KEY (idRepresentante)
  );


-- -----------------------------------------------------
-- Musico
-- -----------------------------------------------------
DROP TABLE IF EXISTS Musico;

CREATE TABLE Musico(
  idMusico VARCHAR(10) NOT NULL,
  Descripcion VARCHAR(100) NULL,
  Grupo VARCHAR(45) NULL,
  Premios_idPremio INT NULL,
  idRepresentante VARCHAR(10) NULL,
  RFC VARCHAR(10) NOT NULL,
  FOREIGN KEY (Premios_idPremio)
  REFERENCES Premios(idPremio),
  FOREIGN KEY (idRepresentante)
  REFERENCES Representante (idRepresentante),
  FOREIGN KEY (RFC)
  REFERENCES Persona(RFC),
  PRIMARY KEY (idMusico)
  );


-- -----------------------------------------------------
-- Compositor
-- -----------------------------------------------------
DROP TABLE IF EXISTS Compositor;

CREATE TABLE Compositor(
  idCompositor VARCHAR(10) NOT NULL,
  Descripcion VARCHAR(100) NOT NULL,
  RFC VARCHAR(10) NOT NULL,
  PRIMARY KEY (idCompositor),
  FOREIGN KEY (RFC)
  REFERENCES Persona(RFC)
  );


-- -----------------------------------------------------
-- Table  Compositor_has_Cancion
-- -----------------------------------------------------
DROP TABLE IF EXISTS Compositor_has_Cancion;

CREATE TABLE  Compositor_has_Cancion(
  idCompositor VARCHAR(10) NOT NULL,
  idCancion INT NOT NULL,
  FOREIGN KEY (idCompositor)
  REFERENCES Compositor(idCompositor),
  FOREIGN KEY (idCancion)
  REFERENCES  Cancion(idCancion),
  PRIMARY KEY (idCompositor, idCancion)
   );


-- -----------------------------------------------------
-- Table  Artista_has_Cancion
-- -----------------------------------------------------
DROP TABLE IF EXISTS Artista_has_Cancion;

CREATE TABLE Artista_has_Cancion(
  Musico_idMusico VARCHAR(10) NOT NULL,
  idCancion INT NOT NULL,
  FOREIGN KEY (Musico_idMusico)
  REFERENCES Musico(idMusico),
  FOREIGN KEY (idCancion)
  REFERENCES  Cancion (idCancion), 
  PRIMARY KEY (Musico_idMusico, idCancion)
  );

SET FOREIGN_KEY_CHECKS = 1;