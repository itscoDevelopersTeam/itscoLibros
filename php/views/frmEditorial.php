<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	 <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/heroic-features.css" rel="stylesheet">
    <?php require_once "../elements/scripts.php"; ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Nombre de la editorial
					</div>
					<div class="card-body">
						<h5 class="card-title">Editoriales</h5>
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarNuevosDatosModal">
							Agregar nuevo <i class="fas fa-plus-circle"></i>
						</span>
						<hr>
						<div id="tableDataTable"></div>
					</div>
					<div class="card-footer text-muted">
						By Samuel Gómez Balderas & Cristhian Enrique Olivares Lara
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Modal Agregar -->
	<div class="modal fade" id="agregarNuevosDatosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevas editoriales</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frm-nueva-editorial">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="txtNombreEditorial">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarEditorial" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>

<!-- Modal Actualizar -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Editorial</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frm-atualiza-editorial">
						<input type="text" hidden = "" id="idEditorial" name="txt-actualiza-id">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombreE" name="txt-actualiza-nombre">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		$('#btnAgregarEditorial').click(function() {
			datos = $('#frm-nueva-editorial').serialize();
			$.ajax({
				type: "GET",
				data: datos,
				url: "../form-handlers/add-editorial-handler.php",
				success: function(r) {
					if(r !== "")
						alertify.error("Falló al agregar");
					else {
						$('#frm-nueva-editorial')[0].reset();
						$('#tableDataTable').load('../elements/tabla2.php');
						alertify.success("Agregado con éxito");
					}
				}
			});
		});
		$('#btnActualizar').click(function() {
			datos = $('#frm-atualiza-editorial').serialize();
			$.ajax({
				type: "POST",
				data: datos,
				url: "../form-handlers/update-editorial-handler.php",
				success: function(r) {
					console.log(r);
					
						$('#frm-atualiza-editorial')[0].reset();
						$('#tableDataTable').load('../elements/tabla2.php');
						alertify.success("Actualizado con éxito");
					
					
				}
			});
		});
	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#tableDataTable').load('../elements/tabla2.php');
	});
</script>

<script type="text/javascript">
function agregaFrmActualizarEditorial(idEditorial){
		console.log(idEditorial);
		$.ajax({
			type: "GET",
			data: "id_editorial="+idEditorial,
			url: "../form-handlers/obtener-datos-editorial.php",
			success: function(r) {
				console.log(r);
				datos = jQuery.parseJSON(r);
				$('#idEditorial').val(datos['id_editorial']);
				$('#nombreE').val(datos['nombre']);
			}
		});
}
	function eliminarDatos(idEditorial) {
		alertify.confirm('Eliminar juego', '¿Seguro que lo quieres eliminar :(?', 
			function(){ 
				$.ajax({
					type: "GET",
					data: "id_editorial=" + idEditorial,
					url: "../form-handlers/delete-editorial-handler.php",
					success: function(r) {
						if(r !== "") 
							alertify.error("No se pudo eliminar");
						else {
							$('#tableDataTable').load('../elements/tabla2.php');
							alertify.success("Eliminado con éxito");
						}
					}
				});
			},
			function(){/*Empty function*/});
	}
</script>
