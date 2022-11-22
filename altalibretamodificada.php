<html>

<head>
    <title>Alta Libreta Modificada</title>
</head>

<body>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
        die("Problemas con la conexión");
        
    $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];

    mysqli_query($conexion, "update libretas
                          set nombre='$_REQUEST[nombrenuevo]', mail='$_REQUEST[mailnuevo]', fechanac='$fechanacimiento', obrasocial='$_REQUEST[obrasocialsnueva]', numobra='$_REQUEST[numeroobranuevo]', sexo='$_REQUEST[sexon]', vacovid='$_REQUEST[covidn]', alergias='$_REQUEST[alergnuevo]', antfam='$_REQUEST[antnuevo]', regmed='$_REQUEST[regnuevo]'
                        where dni='$_REQUEST[dni]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El nombre fue modificado con exito";
    ?>
</body>

</html>