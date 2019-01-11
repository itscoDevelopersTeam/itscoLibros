<?php
   switch($_POST['accion']) {
   case 'Alumnos':
      header("Location: http://localhost:8080/itscoLibros/php/usuarioNormal.php");
      break;
   case 'Bibliotecario':
      header("Location: http://localhost:8080/itscoLibros/login.php");
      break;
}
?>

