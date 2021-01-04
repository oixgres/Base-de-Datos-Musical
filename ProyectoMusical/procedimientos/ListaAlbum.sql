DROP PROCEDURE IF EXISTS listaAlbum;

DELIMITER !!
CREATE PROCEDURE listaAlbum(subcadena VARCHAR(45))
BEGIN
	SELECT Album.idAlbum as idAlbum, Album.Nombre as Album, Cancion.Nombre as Cancion, GeneroMusical.Nombre as Genero
	FROM Cancion
	INNER JOIN Album ON Cancion.idAlbum = Album.idAlbum
	INNER JOIN GeneroMusical ON Cancion.idGenero = GeneroMusical.idGenero
	WHERE Album.Nombre=subcadena;
END!!