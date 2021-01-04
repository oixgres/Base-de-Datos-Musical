DROP PROCEDURE IF EXISTS listaArtista;

DELIMITER !!
CREATE PROCEDURE  listaArtista(subcadena VARCHAR(45))
BEGIN
	SELECT Musico.idMusico as ArtistaID, Persona.Nombre as Artista, Cancion.Nombre as Cancion 
	FROM Artista_has_Cancion
	INNER JOIN Musico ON Artista_has_Cancion.Musico_idMusico=Musico.idMusico
	INNER JOIN Persona ON Musico.RFC=Persona.RFC
	INNER JOIN Cancion ON Artista_has_Cancion.idCancion=Cancion.idCancion
	WHERE Persona.Nombre=subcadena;
END!!