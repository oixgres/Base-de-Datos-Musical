DROP TRIGGER IF EXISTS albumNuevo;

DELIMITER !!
CREATE TRIGGER albumNuevo
BEFORE INSERT ON Album
FOR EACH ROW
BEGIN
	IF NEW.CantidadCanciones<>1 THEN
		SET NEW.CantidadCanciones = 0;
	END IF;
END;!!