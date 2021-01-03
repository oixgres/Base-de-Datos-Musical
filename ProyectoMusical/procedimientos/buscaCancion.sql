--- Opcion B
DROP PROCEDURE IF EXISTS buscaCancion;

DELIMITER !!
CREATE PROCEDURE buscaCancion(subcadena VARCHAR(45))
BEGIN
	SELECT * FROM Cancion WHERE Nombre=subcadena;
END!!

