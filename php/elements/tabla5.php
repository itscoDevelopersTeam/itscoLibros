<?php
include("../models/Libro.php");
include("../controllers/busqueda.php");

$crudLibro = new busqueda();
$libros = $crudLibro->select_all();
?>
<div>
	<table class="table table-hover table-condensed" id="idDataTable">
		<thead style="background-color: #1abc9c; color: white; font-weight: bold;">	<!-- Separar en otro archivo css -->
			<tr>
				<td>Clave de Libro </td>				
				<td> Titulo </td>				
				<td> Numero Paginas </td>			
				<td> stock </td>
				<td> Autor </td>
				<td> editorial </td>		
			</tr>
		</thead>
		<tbody>
			<?php foreach($libros as $libro) { ?>	<!-- Abre el ciclo que muestra registros -->
			<tr>
				<td><?php echo $libro->get_id_libro(); ?></td>
				<td><?php echo $libro->get_titulo(); ?></td>
				<td><?php echo $libro->get_numero_paginas(); ?></td>
				<td><?php echo $libro->get_stock(); ?></td>
				<td><?php echo $libro->get_id_autor(); ?></td>
				<td><?php echo $libro->get_id_editorial(); ?></td>
			</tr>
			<?php } ?>	<!-- Cierre del ciclo que muestra los registros -->
		</tbody>
		<tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			<tr>
				<td>Clave de Libro </td>				
				<td> Titulo </td>				
				<td> Numero Paginas </td>			
				<td> stock </td>
				<td> Autor </td>
				<td> editorial </td>
			</tr>
		</tfoot>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#idDataTable').DataTable();
	} );
</script>