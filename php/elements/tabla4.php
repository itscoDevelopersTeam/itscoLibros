<?php
include("../models/Libro.php");
include("../controllers/CrudLibro.php");

$crudLibro = new CrudLibro();
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
				<td> Estado </td>
				<td> Autor </td>
				<td> editorial </td>
				<td> Editar </td>
				<td> Eliminar </td>			
			</tr>
		</thead>
		<tbody>
			<?php foreach($libros as $libro) { ?>	<!-- Abre el ciclo que muestra registros -->
			<tr>
				<td><?php echo $libro->get_id_libro(); ?></td>
				<td><?php echo $libro->get_titulo(); ?></td>
				<td><?php echo $libro->get_numero_paginas(); ?></td>
				<td><?php echo $libro->get_stock(); ?></td>
				<td><?php echo $libro->get_estado(); ?></td>
				<td><?php echo $libro->get_id_autor(); ?></td>
				<td><?php echo $libro->get_id_editorial(); ?></td>
				<td style="text-align: center;">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $libro->get_id_libro(); ?>')">
						<i class="fas fa-pen-square"></i>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $libro->get_id_libro(); ?>')">
						<i class="fas fa-minus-circle"></i>
					</span>
				</td>
			</tr>
			<?php } ?>	<!-- Cierre del ciclo que muestra los registros -->
		</tbody>
		<tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			<tr>
				<td>Clave de Libro </td>				
				<td> Titulo </td>				
				<td> Numero Paginas </td>			
				<td> stock </td>
				<td> Estado </td>
				<td> Autor </td>
				<td> editorial </td>
				<td> Editar </td>
				<td> Eliminar </td>
			</tr>
		</tfoot>
	</table>
</div>