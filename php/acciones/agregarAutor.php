<?php
include("../conexionGeneral.php");
$name = $_GET['txtnameAutor'];
$query="Insert into autores('nombre') values('$nombre')";
$link= mysqli_query($conexion, $query);//ejecuta la query
if ($link)
{
	$msg="Registro almacenado";
}
else 
{
   $msg="Error al almacenar";    
}
?>