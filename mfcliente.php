<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="2021Tese"; // password de acceso para el usuario de la
                      // linea anterior
$db="bd_coches";        // Seleccionamos la base con la cual trabajar
$tabla="cliente";

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
    <head><title>ACTUALIZAR</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
	<CENTER><P><align="center"><FONT FACE="Arial" SIZE="6" COLOR="BLACK">Modificar</FONT></P>
	<BODY BACKGROUND="negro.jpg">
    <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">INICIO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      INSERTAR DATOS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="incalle.php">CALLE</a></li>
                    <li><a class="dropdown-item" href="incliente.php">CLIENTE</a></li>
                    <li><a class="dropdown-item" href="incoche.php">COCHE</a></li>
                    <li><a class="dropdown-item" href="incolonia.php">COLONIA</a></li>
                    <li><a class="dropdown-item" href="indelegacion.php">DELEGACION</a></li>
                    <li><a class="dropdown-item" href="inmarca.php">MARCA</a></li>
                    <li><a class="dropdown-item" href="inopcione.php">OPCIONE</a></li>
                    <li><a class="dropdown-item" href="intipotel.php">TIPO TEL</a></li>
                    <li><a class="dropdown-item" href="intipotelcli.php">TIPO TEL CLI</a></li>
                    <li><a class="dropdown-item" href="intiptelven.php">TIPO TEL VEN</a></li>
                    <li><a class="dropdown-item" href="invehiculo.php">VEHICULO</a></li>
                    <li><a class="dropdown-item" href="invendedor.php">VENDEDOR</a></li>
                    <li><a class="dropdown-item" href="inveop.php">REVEOP</a></li>
                  </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      ACTUALIZAR DATOS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="mfcalle.php">CALLE</a></li>
                      <li><a class="dropdown-item" href="mfcliente.php">CLIENTE</a></li>
                      <li><a class="dropdown-item" href="mfcoche.php">COCHE</a></li>
                      <li><a class="dropdown-item" href="mfcolonia.php">COLONIA</a></li>
                      <li><a class="dropdown-item" href="mfdelegacion.php">DELEGACION</a></li>
                      <li><a class="dropdown-item" href="mfmarca.php">MARCA</a></li>
                      <li><a class="dropdown-item" href="mfopce.php">OPCE</a></li>
                      <li><a class="dropdown-item" href="mftipotel.php">TIPO TEL</a></li>
                      <li><a class="dropdown-item" href="mftiptelcli.php">TIPO TEL CLI</a></li>
                      <li><a class="dropdown-item" href="mftiptelven.php">TIP TEL VEN</a></li>
                      <li><a class="dropdown-item" href="mfvehiculo.php">VEHICULO</a></li>
                      <li><a class="dropdown-item" href="mfvendedor.php">VENDEDOR</a></li>
                      <li><a class="dropdown-item" href="mfveop.php">VE OP</a></li>
                      
                    </ul>
                  </li>

                 


                </ul>
              </div>
            </div>
          </nav>

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
	<td>CLAVE</td>
    <td>NOMBRE </td>
	<td>DNI CLIENTE </td>
	<td>NUM DOM </td>
    <td>COD POSTAL CLIENTE </td>
	<td>EDITAR</td>

</tr>

<?
while ($row=mysql_fetch_array($resultado)){
echo "<tr><td>". $row["id_c"]. "</td>";
echo "<td>". $row["nom_c"]. "</td>";
echo "<td>". $row["dni_c"]. "</td>";
echo "<td>". $row["num_dom"]. "</td>";
echo "<<td>". $row["cod_pos_c"]. "</td>";

echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['id_c'].">Editar</a></td></tr>";
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
		$sql = "SELECT * FROM ".$tabla." WHERE id_c=".$id;
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
	<h1><div align="center">EDITANDO DATOS DEL CLIENTE</div></h1>
		<BODY BACKGROUND="negro.jpg">
	<div align="center">
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" name="mfcliente.php">
	<p>
	<input type="hidden" align="LEFT" name="id_c" value="<?php echo $registro['id_c'];?>" /><p>
	<p>NOMBRE:
	<input type="text" align="LEFT" name="nom_c" value="<?php echo $registro['nom_c'];?>"/><p>
	<p>DNI:
	<input type="text" align="LEFT" name="dni_c" value="<?php echo $registro['dni_c'];?>"/><p>
	<p>NUMERO:
	<input type="text" align="LEFT" name="num_dom" value="<?php echo $registro['num_dom'];?>"/><p>
	<p>COD POSTAL:
	<input type="text" align="LEFT" name="cod_pos_c" value="<?php echo $registro['cod_pos_c'];?>"/><p>
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="mfcliente.php">Regresar a Cambios</a></p></div>

	</body>
	</html>
<?PHP
}

if($_POST){
	ECHO '<html>
    	<head><title>Resultado de UPDATE</title></head>
    	<body>';

 	
$subs_clave = utf8_decode($_POST['id_c']);
$subs_nombre = utf8_decode($_POST['nom_c']);
$subs_dni = utf8_decode($_POST['dni_c']);
$subs_num = utf8_decode($_POST['num_dom']);
$subs_codp = utf8_decode($_POST['cod_pos_c']);



		$sql="UPDATE ".$tabla." SET
		nom_c=' $subs_nombre',
		dni_c=' $subs_dni',
		num_dom=' $subs_num',
		cod_pos_c=' $subs_codp'

		WHERE id_c=".$id;
		

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