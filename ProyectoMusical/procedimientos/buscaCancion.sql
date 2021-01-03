--- Opcion B
DROP PROCEDURE IF EXISTS buscaCancion;

DELIMITER !!
CREATE PROCEDURE buscaCancion(subcadena VARCHAR(45))
BEGIN
	SELECT Cancion.idCancion,Cancion.Nombre as NombreCancion,Cancion.FechaLanzamiento,Album.Nombre as NombreAlbum,GeneroMusical.Nombre as NombreGenero FROM Cancion 
	INNER JOIN Album ON Cancion.idAlbum = Album.idAlbum
	INNER JOIN GeneroMusical ON Cancion.idGenero = GeneroMusical.idGenero
	WHERE Cancion.Nombre = subcadena;

END!!

