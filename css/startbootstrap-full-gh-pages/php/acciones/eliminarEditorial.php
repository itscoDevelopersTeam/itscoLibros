<?php
include("../conexionGeneral.php");
$clave=$_GET['clave'];
$query="delete from editoriales where id='$clave'";
$link= mysqli_query($conexion, $query);
if ($link)
{
    $msg="La editorial ha sido eliminada";
}
else
{
    $msg="No se puede eliminar la editorial";
}
?>