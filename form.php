<?php
  $conexion = mysqli_connect("localhost", "root", "", "secure") or
    die("Problemas con la conexión");
    /* $conexion = mysqli_connect("localhost", "id19118513_securetest", "85~k!}3gP=A!h%@r", "id19118513_secure") or
    die("Problemas con la conexión"); */
  mysqli_query($conexion, "insert into registros(nombre,correo,pregunta) values 
                       ('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[pregunta]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);
  header("Location:feed.html");
 
  ?>