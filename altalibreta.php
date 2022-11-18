<html>

<head>
  <title>Alta Libreta</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
    die("Problemas con la conexión");

  $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
  $sex = $_REQUEST['sexo'];
  $cov = $_REQUEST['covid'];
  mysqli_query($conexion, "insert into libretas(dni,nombre,mail,fechanac,obrasocial,numobra,sexo,vacovid, alergias, antfam, regmed) values 
                       ($_REQUEST[dni], '$_REQUEST[nombre]', '$_REQUEST[mail]', '$fechanacimiento', '$_REQUEST[obrasocials]', $_REQUEST[numeroobra], '$sex', '$cov', '$_REQUEST[alerg]', '$_REQUEST[antec]', '$_REQUEST[regis]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "La libreta fue dada de alta.";
  ?>
  
  <form method="post" action="paginaprincipal.php">
    <button type="sumbit">Ir a la pagina principal</button>
  </form>
    
  
</body>

</html>