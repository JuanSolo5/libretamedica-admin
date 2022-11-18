<html>

<head>
  <title>Baja Libreta</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select dni from libretas
                        where dni='$_REQUEST[dni]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from libretas where dni='$_REQUEST[dni]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuo la baja de la libreta.";
  } else {
    echo "No existe la libreta vinculada al DNI.";
  }
  mysqli_close($conexion);
  ?>
  <br>
  <form method="post" action="paginaprincipal.php">
    <button type="sumbit">Ir a la pagina principal</button>
  </form>
</body>

</html>