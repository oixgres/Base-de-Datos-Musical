--- Opcion B
DROP PROCEDURE IF EXISTS buscaCancion;

DELIMITER !!
CREATE PROCEDURE buscaCancion(subcadena VARCHAR(45))
BEGIN
	SELECT Cancion.idCancion,Cancion.Nombre as Nombre,Cancion.FechaLanzamiento,Album.Nombre as Album,GeneroMusical.Nombre as Genero FROM Cancion 
	INNER JOIN Album ON Cancion.idAlbum = Album.idAlbum
	INNER JOIN GeneroMusical ON Cancion.idGenero = GeneroMusical.idGenero
	WHERE Cancion.Nombre = subcadena;

END!!

