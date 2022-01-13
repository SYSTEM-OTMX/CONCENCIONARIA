<html>

<head>
  <link href="css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>INGRESAR VEHICULO </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <CENTER>
    <P>
      <align="center">
        <FONT FACE="Arial" SIZE="6" COLOR="BLACK">INGRESAR VEHICULO</FONT>
    </P>

    <BODY BACKGROUND="negro.jpg">
      <form action="revehiculo.php" method="POST">
        <center>
          <BR><BR>
          <label for="clave">CLAVE DEL VEHICULO </label>
          <input type="text" name="clave" class="form-input">
          <BR><BR>
          <label for="nombre">MODELO </label>
          <input type="text" name="nombre" class="form-input">
          <BR> <BR>
          <label for="clave">CILINDRADA </label>
          <input type="text" name="dni" class="form-input">
          <BR><BR>
          <label for="nombre">PRECIO </label>
          <input type="text" name="numero" class="form-input">
          <BR> <BR>

          <input class="form-btn" name="submit" type="submit" value="Ingresar" />
        </center>

      </form>
    </body>

</html>