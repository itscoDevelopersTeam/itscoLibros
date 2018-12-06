<?php
include("../conexionGeneral.php");
$name = $_GET['txtnameEditorial'];
$query= "Insert into editoriales(nombre) values('$name')";
$link= mysqli_query($conexion, $query);//ejecuta la query
if($link)
{
	$msg="Registro almacenado";
	
}
else
{
   $msg="Error al almacenar";
}
header("location: http://localhost:8080/itscoLibros-production/php/formularios/frmEditorial.php?mensaje=$msg");
?>