<?php
include("../conexionGeneral.php");
$clave = $_GET['txtclaveCarrera'];
$name = $_GET['txtnameCarrera'];
$query= "Insert into carreras values('$clave','$name')";
$link= mysqli_query($conexion, $query);//ejecuta la query
if($link)
{
	$msg="Registro almacenado";
	
}
else
{
   $msg="Error al almacenar";
}
header("location: http://localhost:8080/itscoLibros/php/formularios/frmCarrera.php?mensaje=$msg");
?>