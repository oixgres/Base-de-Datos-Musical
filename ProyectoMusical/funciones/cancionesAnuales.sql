DROP FUNCTION IF EXISTS cancionesAnuales;
DELIMITER !!
CREATE FUNCTION cancionesAnuales(year INT)
RETURNS INT
BEGIN
	DECLARE res INT;
	SET res=0;
	SELECT SUM(res+1) AS CancionesAnuales INTO res 
	FROM Cancion
	WHERE year=YEAR(Cancion.FechaLanzamiento);
	RETURN res;
END;!!