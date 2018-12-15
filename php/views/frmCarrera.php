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
						Nombre de la carrera
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
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevas carreras</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frm-nuevo-autor">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="txt-nuevo-nombre">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarNuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>
	<!--Modal Actualizar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar autor</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frm-atualiza-autor">
						<input type="text" hidden="" id="idAutor" name="txt-actualiza-id">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombreU" name="txt-actualiza-nombre">
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
		$('#btnAgregarNuevo').click(function() {
			datos = $('#frm-nuevo-autor').serialize();
			$.ajax({
				type: "POST",
				data: datos,
				url: "../form-handlers/add-carrera-handler.php",
				success: function(r) {
					if(r !== "")
						alertify.error("Falló al agregar");
					else {
						$('#frm-nuevo-autor')[0].reset();
						$('#tableDataTable').load('../elements/tabla.php');
						alertify.success("Agregado con éxito");
					}
				}
			});
		});
</script>