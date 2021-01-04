DROP PROCEDURE IF EXISTS listaGenero;

DELIMITER !!
CREATE PROCEDURE listaGenero(subcadena VARCHAR(45))
BEGIN 
	SELECT GeneroMusical.idGenero as idGenero, GeneroMusical.Nombre as Genero, Cancion.Nombre as Cancion, Album.Nombre as Album
	FROM Cancion
	INNER JOIN Album ON Cancion.idAlbum = Album.idAlbum
	INNER JOIN GeneroMusical ON Cancion.idGenero = GeneroMusical.idGenero
	WHERE GeneroMusical.Nombre=subcadena;
END!!