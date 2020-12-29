SET FOREIGN_KEY_CHECKS = 0;

-- -----------------------------------------------------
-- Table  `Album`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Album` ;

CREATE TABLE IF NOT EXISTS  `Album` (
  `Nombre` VARCHAR(30) NOT NULL,
  `Fecha` DATE NULL,
  PRIMARY KEY (`Nombre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `GeneroMusical`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `GeneroMusical` ;

CREATE TABLE IF NOT EXISTS  `GeneroMusical` (
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Nombre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Cancion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Cancion` ;

CREATE TABLE IF NOT EXISTS  `Cancion` (
  `idCancion` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `FechaLanzamientoz` DATE NULL,
  `AlbumNombre` INT NOT NULL,
  `GeneroMusicalNombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCancion`),
    FOREIGN KEY (`AlbumNombre`)
    REFERENCES  `Album` (`Nombre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`GeneroMusicalNombre`)
    REFERENCES  `GeneroMusical` (`Nombre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Premios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Premios` ;

CREATE TABLE IF NOT EXISTS  `Premios` (
  `idPremio` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idPremio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Persona` ;

CREATE TABLE IF NOT EXISTS  `Persona` (
  `RFC` VARCHAR(10) NOT NULL,
  `Edad` INT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`RFC`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Representante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Representante` ;

CREATE TABLE IF NOT EXISTS  `Representante` (
  `idRepresentante` VARCHAR(10) NOT NULL,
  `RFC` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idRepresentante`),
    FOREIGN KEY (`RFC`)
    REFERENCES  `Persona` (`RFC`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Musico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Musico` ;

CREATE TABLE IF NOT EXISTS  `Musico` (
  `idMusico` VARCHAR(10) NOT NULL,
  `Descripcion` VARCHAR(100) NULL,
  `Grupo` VARCHAR(45) NULL,
  `Premios_idPremio` INT NOT NULL,
  `idRepresentante` VARCHAR(10) NOT NULL,
  `Persona_RFC` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idMusico`),
    FOREIGN KEY (`Premios_idPremio`)
    REFERENCES  `Premios` (`idPremio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`idRepresentante`)
    REFERENCES  `Representante` (`idRepresentante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Persona_RFC`)
    REFERENCES  `Persona` (`RFC`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Compositor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Compositor` ;

CREATE TABLE IF NOT EXISTS  `Compositor` (
  `idCompositor` VARCHAR(10) NOT NULL,
  `Descripcion` VARCHAR(100) NOT NULL,
  `Persona_RFC` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idCompositor`),
    FOREIGN KEY (`Persona_RFC`)
    REFERENCES  `Persona` (`RFC`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Compositor_has_Cancion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Compositor_has_Cancion` ;

CREATE TABLE IF NOT EXISTS  `Compositor_has_Cancion` (
  `idCompositor` VARCHAR(10) NOT NULL,
  `idCancion` INT NOT NULL,
  PRIMARY KEY (`idCompositor`, `idCancion`),
    FOREIGN KEY (`idCompositor`)
    REFERENCES  `Compositor` (`idCompositor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`idCancion`)
    REFERENCES  `Cancion` (`idCancion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Artista_has_Cancion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Artista_has_Cancion` ;

CREATE TABLE IF NOT EXISTS  `Artista_has_Cancion` (
  `Musico_idMusico` VARCHAR(10) NOT NULL,
  `Cancion_idCancion` INT NOT NULL,
  PRIMARY KEY (`Musico_idMusico`, `Cancion_idCancion`),
    FOREIGN KEY (`Musico_idMusico`)
    REFERENCES  `Musico` (`idMusico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Cancion_idCancion`)
    REFERENCES  `Cancion` (`idCancion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET FOREIGN_KEY_CHECKS = 1;