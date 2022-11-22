<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from libretas
                        where dni='$_REQUEST[dni]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="altalibretamodificada.php" method="post">
      
      <input type="hidden" name="dni" value="<?php echo $reg['dni'] ?>">
    
      Ingrese nuevo nombre:
      <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
      <br>
      Ingrese nuevo mail:
      <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
      <br>
      Ingrese la fecha de nacimiento (dd/mm/aaaa):
      <input type="text" name="dia" size="2">
      <input type="text" name="mes" size="2">
      <input type="text" name="anio" size="4">
      <br>
      Ingrese su obra social:
      <select name="obrasocialsnueva">
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "gestion medica") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select codigoobra,nombreobra from obrasocial") or
            die("Problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array($registros)) {
            echo "<option value=\"$reg[codigoobra]\">$reg[nombreobra]</option>";
        }
        ?>
      </select>
      <input type="text" name="numeroobranuevo">
      <br>
      Seleccione su sexo:
      M <input type="radio" name="sexon" value="M"> F <input type="radio" name="sexon" value="F">
      <br>
      Se dio la vacuna para COVID19:
      Si <input type="radio" name="covidn" value="Si"> No <input type="radio" name="covidn" value="No">
      <br>
      Ingrese si es que tiene alergias:
      <input type="text" name="alergnuevo">
      <br>
      Ingrese si posee antecedentes medicos familiares
      <input type="text" name="antnuevo">
      <br>
      Ingrese si tiene registros medicos
      <input type="text" name="regnuevo">
      <br>
        
        
        
        
        
        Seleccione que vacunas tiene: <br>
        <input type="checkbox" name="bcg"> BCG <br>
        <input type="checkbox" name="hb"> Hepatitis B <br>
        <input type="checkbox" name="neum"> Neumococo <br>
        <input type="checkbox" name="pol"> Polio <br>
        <input type="checkbox" name="rot"> Rotavirus <br>
        <input type="checkbox" name="menin"> Meningococo <br>
        <input type="checkbox" name="grip"> Gripe <br>
        <input type="checkbox" name="ha"> Hematitis A <br>
        <input type="checkbox" name="tv"> Triple viral / doble viral <br>
        <input type="checkbox" name="var"> Varicela <br>
        <input type="checkbox" name="quin"> Quintuple (o Pentavalente) <br>
        <input type="checkbox" name="tbc"> Triple Bacteriana Celular <br>
        <input type="checkbox" name="tba"> Triple Bacteria Acelular <br>
        <input type="checkbox" name="vph"> VPH <br>
        <input type="checkbox" name="db"> Doble Bacteriana <br>
        <input type="checkbox" name="fa"> Fiebre Amarilla <br>
        <input type="checkbox" name="fha"> Fiebre Hemorragica Argentina <br>
        <br>
      
      
      
      
        <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe una libreta vinculada a dicho DNI";
  ?>
</body>

</html>