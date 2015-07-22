

SET @variable_idNevera=4;
SELECT* FROM Amarey.datos WHERE nevera_idNevera= @variable_idNevera ORDER BY idDatos DESC;

rs = stm.executeQuery("select temperatura, humedad, energia, hora, fecha from datos where nevera_idNevera = '" + mi_Nevera.getIdNevera() + "' AND fecha >= '" + desde + "'AND fecha <= '" + hasta + "' ORDER BY idDatos ASC;");

rs = stm.executeQuery("select id,hora,fecha,titulo, descripcion from reporte where  nevera_idNevera = '" + mi_Nevera.getIdNevera() + "' AND fecha >= '" + desde + "'AND fecha <= '" + hasta + "'ORDER BY idDatos ASC;");



CALL Amarey.listarUsuarios();
SELECT * FROM information_schema.routines;
CALL amarey.listarUsuarios();

GRANT ALL ON amarey.* TO 'isotronica'@'localhost' IDENTIFIED BY '1s0tr0n1c4' WITH GRANT OPTION;
Error Code : 1449 The user specified as a definer  does not exist


*********************************

CALL amarey.validarLogin('user@uao.com','thebest1');/*devuelve todo los campos del user pero sin password*/
CALL amarey.neverasActivas('user@uao.com','thebest1');/*devuelve todo los campos del user pero sin password*/