<?php
include("../conexionGeneral.php");
$clave=$_GET['clave'];
$query="delete from autores where id='$clave'";
$link= mysqli_query($conexion, $query);
if ($link)
{
    $msg="El autor fue eliminado";
}
else
{
    $msg="No se pudo eliminar el autor";
}
?>