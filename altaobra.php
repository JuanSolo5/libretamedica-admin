<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into obrasocial(nombreobra) values 
                       ('$_REQUEST[obrasoc]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "La obra social fue dada de alta.";
  ?>
  <br>
  <form method="post" action="paginaprincipal.php">
    <button type="submit">Ir a la pagina principal</button>
  </form>
</body>

</html>