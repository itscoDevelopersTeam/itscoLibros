<?php 
include("../models/Autor.php");
include("../controllers/CrudAutor.php");

$crudAutor = new CrudAutor();
$autores = $crudAutor->select_all();
?>

<div>
	<table class="table table-hover table-condensed" id="idDataTable">
		<thead style="background-color: #1abc9c; color: white; font-weight: bold;">	<!-- Separar en otro archivo css -->
			<tr>
				<td>id autor</td>				
				<td>nombre</td>				
				<td>Editar</td>			
				<td>Eliminar</td>			
			</tr>
		</thead>
		<tbody>
			<?php foreach($autores as $autor) { ?>	<!-- Abre el ciclo que muestra registros -->
			<tr>
				<td><?php echo $autor->get_id_autor(); ?></td>
				<td><?php echo $autor->get_nombre(); ?></td>
				<td style="text-align: center;">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $autor->get_id_autor(); ?>')">
						<i class="fas fa-pen-square"></i>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $autor->get_id_autor(); ?>')">
						<i class="fas fa-minus-circle"></i>
					</span>
				</td>
			</tr>
			<?php } ?>	<!-- Cierre del ciclo que muestra los registros -->
		</tbody>
		<tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			<tr>
				<td>id autor</td>				
				<td>nombre</td>				
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