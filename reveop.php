<?php

include("conect/conexion.php")

$subs_clave = utf8_decode($_POST['clave']);
$subs_nombre = utf8_decode($_POST['nombre']);
$subs_dni = utf8_decode($_POST['dni']);
	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`fecha_vta`, `matricula`,`precio_OE` ) VALUES ("' . $subs_clave . '", "' . $subs_nombre . '", "' . $subs_dni . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	


mysql_close($db_connection);

		
?>