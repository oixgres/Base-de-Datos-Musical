DROP PROCEDURE IF EXISTS buscaArtista;

DELIMITER !!
CREATE PROCEDURE buscaArtista(subcadena VARCHAR(45))
BEGIN
	SELECT * FROM Persona WHERE Nombre=subcadena;
END!!