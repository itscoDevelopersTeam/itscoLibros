<?php
   switch($_POST['accion']) {
   case 'Alumnos':
      header("Location: http://localhost:80/itscoLibros/php/usuarioNormal.php");
      break;
   case 'Bibliotecario':
      header("Location: http://localhost:80/itscoLibros/login.php");
      break;
}
?>

