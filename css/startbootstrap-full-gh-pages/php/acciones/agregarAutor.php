<?php
include("../conexionGeneral.php");
$name = $_GET['txtnameAutor'];
$query= "Insert into autores(nombre) values('$name')";
$link= mysqli_query($conexion, $query);//ejecuta la query
if($link)
{
	$msg="Registro almacenado";
	
}
else
{
   $msg="Error al almacenar";
}
header("location: http://localhost:8080/itscoLibros/php/formularios/frmAutor.php?mensaje=$msg");
?>