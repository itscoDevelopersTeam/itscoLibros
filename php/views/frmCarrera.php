<!DOCTYPE html>
<html lang="es">
<head>
	<title> Carreras</title>
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
						Nombre del usuario
					</div>
					<div class="card-body">
						<h5 class="card-title">Carreras</h5>
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
					<h5 class="modal-title" id="exampleModalLabel"> Agrega nuevas carreras </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frm-nueva-carrera">
						<label> Clave de la carrera: </label>
						<input type="text" class="form-control input-sm" id="clave" name="txt-clave-carrera">
						<label> Nombre: </label>
						<input type="text" class="form-control input-sm" id="nombre" name="txt-nombre-carrera">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarNuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		$('#btnAgregarNuevo').click(function() {
			datos = $('#frm-nueva-carrera').serialize();
			$.ajax({
				type: "GET",
				data: datos,
				url: "../form-handlers/add-carrera-handler.php",
				success: function(r) {
					if(r !== "")
						alertify.error("Falló al agregar");
					else {
						$('#frm-nueva-carrera')[0].reset();
						$('#tableDataTable').load('../elements/tabla3.php');
						alertify.success("Agregado con éxito");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableDataTable').load('../elements/tabla3.php');
	});
</script>
<script>
function eliminarDatos(idCarrera) {
		alertify.confirm('Eliminar juego', '¿Seguro que lo quieres eliminar :(?', 
			function(){ 
				$.ajax({
					type: "POST",
					data: "id_carrera=" + idCarrera,
					url: "../form-handlers/delete-carrera-handler.php",
					success: function(r) {
						if(r !== "") 
							alertify.error("No se pudo eliminar");
						else {
							$('#tableDataTable').load('../elements/tabla3.php');
							alertify.success("Eliminado con éxito");
						}
					}
				});
			},
			function(){/*Empty function*/});
	}
</script>