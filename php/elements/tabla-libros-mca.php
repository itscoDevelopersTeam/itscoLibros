<?php
include("../models/Libro.php");
include("../controllers/busqueda.php");

$crudLibro = new busqueda();
$libros = $crudLibro->select_mca();
// echo $libros;
?>
<div>
	<table class="table table-hover table-condensed" id="idDataTable">
		<thead style="background-color: #212158; color: white; font-weight: bold;">	<!-- Separar en otro archivo css -->
			<tr>
				<td> Clave </td>				
				<td> Titulo </td>				
				<td> Tipo </td>				
				<td> año </td>		
				<td> Programa </td>
				<td> Autor </td>		
				<td> Editorial </td>		
				<td> ubicación </td>
				<td> estado </td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($libros as $libro) { ?>	<!-- Abre el ciclo que muestra registros -->
			<tr>
				<td><?php echo $libro->get_id_libro(); ?></td>
				<td><?php echo $libro->get_titulo(); ?></td>
				<td><?php echo $libro->get_tipo(); ?></td>
				<td><?php echo $libro->get_anio(); ?></td>
				<td><?php echo $libro->get_programa(); ?></td>
				<td><?php echo $libro->get_id_autor(); ?></td>
				<td><?php echo $libro->get_id_editorial(); ?></td>
				<td><?php echo $libro->get_ubicacion(); ?></td>
				<td><?php echo $libro->get_estado(); ?></td>
			</tr>
			<?php } ?>	<!-- Cierre del ciclo que muestra los registros -->
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#idDataTable').DataTable({
			"languaje": {
				"search": "Buscar Libro",
				"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			},
		});
	} );
</script>