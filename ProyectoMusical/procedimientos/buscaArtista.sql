DROP PROCEDURE IF EXISTS buscaArtista;

DELIMITER !!
CREATE PROCEDURE buscaArtista(subcadena VARCHAR(45))
BEGIN
	SELECT Musico.idMusico,Persona.Nombre ,Musico.Descripcion,Musico.Grupo,Premios.Nombre as NombrePremiacion FROM Musico 
    INNER JOIN Persona ON Musico.RFC = Persona.RFC
    INNER JOIN Premios ON Musico.Premios_idPremio = Premios.idPremio
    WHERE Persona.Nombre=subcadena;
END!!