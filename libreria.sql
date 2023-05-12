-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla libreria.editoriales
CREATE TABLE IF NOT EXISTS `editoriales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  `telefono` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla libreria.libros
CREATE TABLE IF NOT EXISTS `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `n_pags` int(11) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `editorial` int(11) DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `editorial` (`editorial`),
  CONSTRAINT `editorial` FOREIGN KEY (`editorial`) REFERENCES `editoriales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
