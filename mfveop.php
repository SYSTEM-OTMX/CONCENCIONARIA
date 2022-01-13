<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="2021Tese"; // password de acceso para el usuario de la
                      // linea anterior
$db="bd_coches";        // Seleccionamos la base con la cual trabajar
$tabla="veopcliven";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexión a la base de datos.</p>');
}
if (!@mysql_select_db($db, $conexion)){
	exit ('<p>Problema al seleccionar la base de datos </p>' .$db);
}
if (!$_GET /*($accion)*/){

?>
    <html>
    <head><title>ACTUALIZAR</title></head>
		<style type="text/css">
			body{
				background-color: palegreen;
			}
		</style>
    <body>

	<?
	$sql = "SELECT * FROM ".$tabla;

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<h1><div align="center">Contenido de la base de datos <?php echo $db.", tabla ".$tabla;?></div></h1>
<table align="center" border=1 cellpadding="1" cellspacing="1">
<tr>
	<td>FECHA VENTA </td>
    <td>MATRICULA </td>
	<td>PRECIO OE </td>

	<td>EDITAR</td>

</tr>

<?
while ($row=mysql_fetch_array($resultado)){
echo "<tr><td>". $row["fecha_vta"]. "</td>";
echo "<td>". $row["matricula"]. "</td>";
echo "<td>". $row["precio_OE"]. "</td>";

echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['fecha_vta'].">Editar</a></td></tr>";
}
?>
	</table>
	</div>
	</body>
	</html>
<?
}
if (empty($_GET['cambiar'])==false)
{
$id=$_GET['cambiar'];

//echo $id;
		$sql = "SELECT * FROM ".$tabla." WHERE fecha_vta=".$id;
		$registro = @mysql_query($sql);
	if(!$registro){
		echo "Error ".mysql_errno();
		exit('<p>No se pudo obtener los detalles del registro.</p>');
	}
	$registro = mysql_fetch_array($registro);
	
	?>
	
	<html>
    	<head><title>Actualizar datos</title></head>
    	<body>
	<h1><div align="center">EDITANDO DATOS DEL VENDEDOR</div></h1>

	<div align="center">
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" name="mfveop.php">
	<p>
	<input type="hidden" align="LEFT" name="fecha_vta" value="<?php echo $registro['fecha_vta'];?>" /><p>
	<p>MATRICULA:
	<input type="text" align="LEFT" name="matricula" value="<?php echo $registro['matricula'];?>"/><p>
	<p>PRECIO OE:
	<input type="text" align="LEFT" name="precio_OE" value="<?php echo $registro['precio_OE'];?>"/><p>
	
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="mfveop.php">Regresar a Cambios</a></p></div>

	</body>
	</html>
<?PHP
}

if($_POST){
	ECHO '<html>
    	<head><title>Resultado de UPDATE</title></head>
    	<body>';

 	
$subs_clave = utf8_decode($_POST['fecha_vta']);
$subs_nombre = utf8_decode($_POST['matricula']);
$subs_dni = utf8_decode($_POST['precio_OE']);


		$sql="UPDATE ".$tabla." SET
		matricula=' $subs_nombre',
		precio_OE=' $subs_dni',
		

		WHERE fecha_vta=".$id;
		

		if(@mysql_query($sql)){
			echo '<script>alert("Registro Actualizado.");</script>';
		}
		else{
			echo "<p>Error al actualizar el registro.</p>";
			echo mysql_errno();
			if (mysql_errno()==1452){
				echo "existe una restricción .";
			}
		}
	
	echo '</body></html>';

}
   echo '</table>';
    echo '<div align="center"><p><a href="menu.php">Regresar al Menu</a></p></div>
    </body>
    </html>';
 mysql_close($conexion); ?>