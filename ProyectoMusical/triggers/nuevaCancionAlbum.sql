DROP TRIGGER IF EXISTS nuevaCancionAlbum;

DELIMITER !!
CREATE TRIGGER nuevaCancionAlbum
AFTER INSERT ON Cancion
FOR EACH ROW
BEGIN
	UPDATE Album
	SET cantidadCanciones = cantidadCanciones+1
	WHERE idAlbum=NEW.idAlbum;
END;!!