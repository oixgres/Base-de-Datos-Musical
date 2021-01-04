DROP PROCEDURE IF EXISTS buscaArtista;

DELIMITER !!
CREATE PROCEDURE buscaArtista(subcadena VARCHAR(45))
BEGIN
    SELECT Musico.idMusico,Persona.Nombre,Musico.Descripcion,Musico.Grupo
	FROM Musico 
	INNER JOIN Persona ON Musico.RFC = Persona.RFC
	WHERE Persona.Nombre=subcadena;
	
END!!