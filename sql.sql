-- MySQL Script generated by MySQL Workbench
-- Sun Apr 22 19:00:45 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema uploadFiles
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema uploadFiles
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `uploadFiles` DEFAULT CHARACTER SET latin1 ;
USE `uploadFiles` ;

-- -----------------------------------------------------
-- Table `uploadFiles`.`cv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uploadFiles`.`cv` (
  `id` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `apellido` VARCHAR(255) NOT NULL,
  `url` VARCHAR(500) NOT NULL,
  `telefono` INT(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `uploadFiles`.`herramientas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uploadFiles`.`herramientas` (
  `id_herramienta` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(5000) NULL DEFAULT NULL,
  `textoHerramienta` VARCHAR(5000) NULL DEFAULT NULL,
  `segundoTexto` VARCHAR(5000) NULL DEFAULT NULL,
  `url` VARCHAR(5000) NULL DEFAULT NULL,
  `vehiculo` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id_herramienta`))
ENGINE = InnoDB
AUTO_INCREMENT = 37
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `uploadFiles`.`obra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uploadFiles`.`obra` (
  `id_obra` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
  `antecedentes` VARCHAR(5000) NULL DEFAULT NULL,
  `texto` VARCHAR(5000) NULL DEFAULT NULL,
  `obra` VARCHAR(500) NULL DEFAULT NULL,
  `lugar` VARCHAR(500) NULL DEFAULT NULL,
  `planta` VARCHAR(500) NULL DEFAULT NULL,
  `cliente` VARCHAR(500) NULL DEFAULT NULL,
  `anio` DATE NULL DEFAULT NULL,
  `desc_tar_realiz` VARCHAR(5000) NULL DEFAULT NULL,
  `tipo` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_obra`))
ENGINE = InnoDB
AUTO_INCREMENT = 42
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `uploadFiles`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uploadFiles`.`images` (
  `id_images` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(5000) NULL DEFAULT NULL,
  `textoImagen` VARCHAR(5000) NULL DEFAULT NULL,
  `id_obra` MEDIUMINT(9) NOT NULL,
  PRIMARY KEY (`id_images`),
  INDEX `id_obra` (`id_obra` ASC),
  CONSTRAINT `images_ibfk_1`
    FOREIGN KEY (`id_obra`)
    REFERENCES `uploadFiles`.`obra` (`id_obra`))
ENGINE = InnoDB
AUTO_INCREMENT = 51
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
