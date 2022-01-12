<?php
$db_host="localhost";
$db_user="root";
$db_password="2021Tese";
$db_name="bd_coches";
$db_table_name="vendedor";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_clave = utf8_decode($_POST['clave']);
$subs_nombre = utf8_decode($_POST['nombre']);
$subs_dni = utf8_decode($_POST['dni']);
$subs_numero = utf8_decode($_POST['numero']);
$subs_cp = utf8_decode($_POST['cp']);
	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id_v`, `nom_v`,`dni_v`, `num_v`, `cp_v` ) VALUES ("' . $subs_clave . '", "' . $subs_nombre . '", "' . $subs_dni . '", "' . $subs_numero . '", "' . $subs_cp . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	


mysql_close($db_connection);
 header("location:invendedor.php");
		
?>