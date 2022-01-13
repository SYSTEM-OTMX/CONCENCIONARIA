<html>
<head>
<title>INGRESAR CLIENTE </title>
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
 
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
                      <li><a class="dropdown-item" href="invendedor.php">VENDEDOR</a></li>
                      <li><a class="dropdown-item" href="intipotelcli.php">CLIENTE</a></li>
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

	<CENTER><P><align="center"><FONT FACE="Arial" SIZE="6" COLOR="BLACK">INGRESAR VENDEDOR</FONT></P>
	<BODY BACKGROUND="negro.jpg">
  <form action="revendedor.php" method="POST">
  <center>
<BR><BR>  
	<label for="clave">CLAVE DEL VENDEDOR </label>
      <input type="text" name="clave" class="form-input">      
	 <BR><BR>
      <label for="nombre">NOMBRE DEL VENDEDOR </label>
      <input type="text" name="nombre" class="form-input" >   
     <BR> <BR>
	 <label for="clave">DNI DEL VENDEDOR</label>
      <input type="text" name="dni" class="form-input">      
	 <BR><BR>
      <label for="nombre">NUMERO DEL VENDEDOR </label>
      <input type="text" name="numero" class="form-input" >   
     <BR> <BR>
	 <label for="clave">CODIGO POSTAL </label>
      <input type="text" name="cp" class="form-input">      
	 <BR><BR>

      <input class="form-btn" name="submit" type="submit" value="Ingresar" /></center>
    
  </form>
</body>
</html>