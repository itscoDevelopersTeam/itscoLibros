<?php 
include("../models/Carrera.php");
include("../controllers/CrudCarrera.php");

$crudCarrera = new CrudCarrera();
$carreras = $crudCarrera->select_all();

 ?>

<div>
	<table class="table table-hover table-condensed" id="idDataTable">
		<thead style="background-color: #1abc9c; color: white; font-weight: bold;">	<!-- Separar en otro archivo css -->
			<tr>
				<td> Clave Carrera </td>				
				<td>Nombre</td>				
				<td>Editar</td>			
				<td>Eliminar</td>			
			</tr>
		</thead>
		<tbody>
			<?php foreach($carreras as $carrera) { ?>	<!-- Abre el ciclo que muestra registros -->
			<tr>
				<td><?php echo $carrera->get_id_carrera(); ?></td>
				<td><?php echo $carrera->get_nombre(); ?></td>
				<td style="text-align: center;">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $carrera->get_id_carrera(); ?>')">
						<i class="fas fa-pen-square"></i>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $carrera->get_id_carrera(); ?>')">
						<i class="fas fa-minus-circle"></i>
					</span>
				</td>
			</tr>
			<?php } ?>	<!-- Cierre del ciclo que muestra los registros -->
		</tbody>
		<tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			<tr>
				<td>Clave Carrera </td>				
				<td>Nombre</td>				
				<td>Editar</td>			
				<td>Eliminar</td>	
			</tr>
		</tfoot>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
    	$('#idDataTable').DataTable();
	} );
</script>