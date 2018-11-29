<?php
include("../conexionGeneral.php");
$clave=$_GET['clave'];
$query="delete from carreras where clave='$clave'";
$link= mysqli_query($conexion, $query);
if ($link)
{
    $msg="La carrera ha sido eliminada";
}
else
{
    $msg="No se puede eliminar la carrera";
}
?>