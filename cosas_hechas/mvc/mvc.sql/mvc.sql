-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 05-05-2012 a las 12:49:07
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `mvc`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tpersona`
-- 

CREATE TABLE `tpersona` (
  `cedula` char(11) collate utf8_spanish2_ci NOT NULL,
  `nombre` varchar(30) collate utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) collate utf8_spanish2_ci NOT NULL,
  `sexo` char(1) collate utf8_spanish2_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `telefono` char(12) collate utf8_spanish2_ci NOT NULL,
  `email` varchar(150) collate utf8_spanish2_ci NOT NULL,
  `direccion` varchar(150) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- 
-- Volcar la base de datos para la tabla `tpersona`
-- 

