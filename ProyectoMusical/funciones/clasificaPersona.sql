-- FUNCION COMPARACION PARA SABER SI UNA PERSONA ES CANTANTE O COMPOSITOR 
DELIMITER !!
CREATE FUNCTION clasificaPersona(RFC VARCHAR(10))
RETURNS VARCHAR(13)
BEGIN
	DECLARE AUX VARCHAR(4);
	DECLARE tipo VARCHAR(13);
	SET AUX = SUBSTRING(RFC,1,4);
	IF strcmp(AUX,'CANT') = 0
		THEN SET tipo = 'CANTANTE';
	ELSE
		SET tipo = 'REPRESENTANTE';	
	END IF;
	RETURN tipo;
END;!!
DELIMITER ;