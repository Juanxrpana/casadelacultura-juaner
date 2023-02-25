-- MySQL Script generated by MySQL Workbench
-- Wed Nov  9 19:24:38 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`DirectorSalon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`DirectorSalon` (
  `idDirectorSalon` INT NOT NULL,
  `Nombre1` VARCHAR(45) NULL,
  `Nombre2` VARCHAR(45) NULL,
  `Apellido1` VARCHAR(45) NULL,
  `Apellido2` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  PRIMARY KEY (`idDirectorSalon`));


-- -----------------------------------------------------
-- Table `mydb`.`EncargadoActividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EncargadoActividad` (
  `idEncargadoActividad` INT NOT NULL,
  `Nombre1` VARCHAR(45) NULL,
  `Nombre2` VARCHAR(45) NULL,
  `Apellido1` VARCHAR(45) NULL,
  `Apellido2` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  PRIMARY KEY (`idEncargadoActividad`));


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `IdUsuario` INT NOT NULL,
  `Usuario` VARCHAR(16) NOT NULL,
  `Correo` VARCHAR(100) NULL,
  `Password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `DirectorSalon_idDirectorSalon` INT NULL,
  `EncargadoActividad_idEncargadoActividad` INT NULL,
  PRIMARY KEY (`IdUsuario`, `EncargadoActividad_idEncargadoActividad`, `DirectorSalon_idDirectorSalon`),
  INDEX `fk_user_DirectorSalon1_idx` (`DirectorSalon_idDirectorSalon` ASC) VISIBLE,
  INDEX `fk_user_EncargadoActividad1_idx` (`EncargadoActividad_idEncargadoActividad` ASC) VISIBLE,
  CONSTRAINT `fk_user_DirectorSalon1`
    FOREIGN KEY (`DirectorSalon_idDirectorSalon`)
    REFERENCES `mydb`.`DirectorSalon` (`idDirectorSalon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_EncargadoActividad1`
    FOREIGN KEY (`EncargadoActividad_idEncargadoActividad`)
    REFERENCES `mydb`.`EncargadoActividad` (`idEncargadoActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`Salon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Salon` (
  `idSalon` INT NOT NULL,
  `NombreSalon` VARCHAR(45) NULL,
  `CantidadSalon` INT NULL,
  `CantidadSillas` INT NULL,
  `DirectorSalon_idDirectorSalon` INT NOT NULL,
  PRIMARY KEY (`idSalon`, `DirectorSalon_idDirectorSalon`),
  INDEX `fk_Salon_DirectorSalon_idx` (`DirectorSalon_idDirectorSalon` ASC) VISIBLE,
  CONSTRAINT `fk_Salon_DirectorSalon`
    FOREIGN KEY (`DirectorSalon_idDirectorSalon`)
    REFERENCES `mydb`.`DirectorSalon` (`idDirectorSalon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`IndoleActividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`IndoleActividad` (
  `idIndoleActividad` INT NOT NULL,
  `IndoleActividadcol` VARCHAR(45) NULL,
  PRIMARY KEY (`idIndoleActividad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TipoActividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TipoActividad` (
  `idTipoActividad` INT NOT NULL,
  `TipoActividad` VARCHAR(45) NULL,
  PRIMARY KEY (`idTipoActividad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FocusActividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`FocusActividad` (
  `idFocusActividad` INT NOT NULL,
  `FocusActividad` VARCHAR(45) NULL,
  PRIMARY KEY (`idFocusActividad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`RequisitosActividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`RequisitosActividad` (
  `idRequisitosActividad` INT NOT NULL,
  `RequisitosActividad` VARCHAR(200) NULL,
  PRIMARY KEY (`idRequisitosActividad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Actividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Actividad` (
  `idActividad` INT NOT NULL,
  `NombreActividad` VARCHAR(45) NULL,
  `FechaActividad` DATETIME NULL,
  `Participantes` INT NULL,
  `CantidadEncuentros` INT NULL,
  `HoraInicio` DATETIME NULL,
  `HoraCierre` DATETIME NULL,
  `EncargadoActividad_idEncargadoActividad` INT NOT NULL,
  `Salon_idSalon` INT NOT NULL,
  `IndoleActividad_idIndoleActividad` INT NOT NULL,
  `RequisitosActividad_idRequisitosActividad` INT NOT NULL,
  `TipoActividad_idTipoActividad` INT NOT NULL,
  `FocusActividad_idFocusActividad` INT NOT NULL,
  PRIMARY KEY (`idActividad`, `EncargadoActividad_idEncargadoActividad`, `Salon_idSalon`, `IndoleActividad_idIndoleActividad`, `RequisitosActividad_idRequisitosActividad`, `TipoActividad_idTipoActividad`, `FocusActividad_idFocusActividad`),
  INDEX `fk_Actividad_EncargadoActividad1_idx` (`EncargadoActividad_idEncargadoActividad` ASC) VISIBLE,
  INDEX `fk_Actividad_Salon1_idx` (`Salon_idSalon` ASC) VISIBLE,
  INDEX `fk_Actividad_IndoleActividad1_idx` (`IndoleActividad_idIndoleActividad` ASC) VISIBLE,
  INDEX `fk_Actividad_RequisitosActividad1_idx` (`RequisitosActividad_idRequisitosActividad` ASC) VISIBLE,
  INDEX `fk_Actividad_TipoActividad1_idx` (`TipoActividad_idTipoActividad` ASC) VISIBLE,
  INDEX `fk_Actividad_FocusActividad1_idx` (`FocusActividad_idFocusActividad` ASC) VISIBLE,
  CONSTRAINT `fk_Actividad_EncargadoActividad1`
    FOREIGN KEY (`EncargadoActividad_idEncargadoActividad`)
    REFERENCES `mydb`.`EncargadoActividad` (`idEncargadoActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_Salon1`
    FOREIGN KEY (`Salon_idSalon`)
    REFERENCES `mydb`.`Salon` (`idSalon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_IndoleActividad1`
    FOREIGN KEY (`IndoleActividad_idIndoleActividad`)
    REFERENCES `mydb`.`IndoleActividad` (`idIndoleActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_RequisitosActividad1`
    FOREIGN KEY (`RequisitosActividad_idRequisitosActividad`)
    REFERENCES `mydb`.`RequisitosActividad` (`idRequisitosActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_TipoActividad1`
    FOREIGN KEY (`TipoActividad_idTipoActividad`)
    REFERENCES `mydb`.`TipoActividad` (`idTipoActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_FocusActividad1`
    FOREIGN KEY (`FocusActividad_idFocusActividad`)
    REFERENCES `mydb`.`FocusActividad` (`idFocusActividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
