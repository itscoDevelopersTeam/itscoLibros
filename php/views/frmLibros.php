<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'biblioteca');
$mysqli->set_charset("utf8");
?>

<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Crud Libros</title>
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
            Nombre del libro
          </div>
          <div class="card-body">
            <h5 class="card-title">Libros</h5>
            <span class="btn btn-primary" data-toggle="modal" data-target="#agregarNuevosDatosModal">
              Agregar nuevo <i class="fas fa-plus-circle"></i>
            </span>
            <hr>
            <div id="tableDataTable"></div>
          </div>
          <div class="card-footer text-muted">
            By itscoDevelopersTeam
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
          <h5 class="modal-title" id="exampleModalLabel">Agrega nuevos libros </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frm-nuevo-libro">
            <label>Codigo del libro</label>
            <input type="text" class="form-control input-sm" id="codigo" name="txt-codigo-libro">
            <label>Titulo</label>
            <input type="text" class="form-control input-sm" id="titulo" name="txt-titulo">
            <label>Numero de Paginas</label>
            <input type="number" class="form-control input-sm" id="numero_paginas" name="txt-numero-paginas">
            <label>Stock</label>
            <input type="number" class="form-control input-sm" id="stock" name="txt-stock">
            <label>Autor</label>
            <input type="text" class="form-control input-sm" id="stock" name="txt-autor">
            <label>Editorial</label>
            <input type="text" class="form-control input-sm" id="editorial" name="txt-editorial">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnAgregarNuevo" class="btn btn-primary">Agregar nuevo</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Actualizar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frm-atualiza-libro">
            <input type="text" hidden="" id="idLibro" name="txt-actualiza-id">
            <label>Titulo</label>
            <input type="text" class="form-control input-sm" id="tituloLibro" name="txt-actualiza-titulo">
            <label>Numero de paginas</label>
            <input type="number" class="form-control input-sm" id="paginasLibro" name="txt-actualiza-paginas">
            <label>Stock</label>
            <input type="number" class="form-control input-sm" id="stockLibro" name="txt-actualiza-stock">
            <label>Autor</label>
            <input type="text" class="form-control input-sm" id="autorLibro" name="txt-actualiza-autor">
            <label>Editorial</label>
            <input type="text" class="form-control input-sm" id="editorialLibro" name="txt-actualiza-editorial">
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
      datos = $('#frm-nuevo-libro').serialize();
      $.ajax({
        type: "GET",
        data: datos,
        url: "../form-handlers/add-libro-handler.php",
        success: function(r) {
          if(r !== "")
            alertify.error("Falló al agregar");
          else {
            $('#frm-nuevo-libro')[0].reset();
            $('#tableDataTable').load('../elements/tabla4.php');
            alertify.success("Agregado con éxito");
          }
        }
      });
    });
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tableDataTable').load('../elements/tabla4.php');
  });
</script>

<script type="text/javascript">
  function eliminarDatos(idLibro) {
    alertify.confirm('Eliminar juego', '¿Seguro que lo quieres eliminar :(?', 
      function(){ 
        $.ajax({
          type: "POST",
          data: "id_libro=" + idLibro,
          url: "../form-handlers/delete-libro-handler.php",
          success: function(r) {
            if(r !== "") 
              alertify.error("No se pudo eliminar");
            else {
              $('#tableDataTable').load('../elements/tabla4.php');
              alertify.success("Eliminado con éxito");
            }
          }
        });
      },
      function(){/*Empty function*/});
  }
</script>
<script type="text/javascript">
  function agregaFrmActualizarLibro(idLibro) {
    console.log(idLibro);
    $.ajax({
      type: "GET",
      data: "id_libro=" + idLibro,
      url: "../form-handlers/obtener-datos-libro.php",
      success: function(r) {
        console.log(r);
        datos = jQuery.parseJSON(r);
        $('#idLibro').val(datos['idlibro']);
        $('#tituloLibro').val(datos['titulo']);
        $('#paginasLibro').val(datos['numero_paginas']);
        $('#stockLibro').val(datos['stock']);
        $('#autorLibro').val(datos['id_autor']);
        $('#editorialLibro').val(datos['id_editorial']);
      }
    });
  }
</script>
<script type="text/javascript">
$('#btnActualizar').click(function() {
      datos = $('#frm-atualiza-libro').serialize();
      $.ajax({
        type: "GET",
        data: datos,
        url: "../form-handlers/update-libro-handler.php",
        success: function(r) {
            $('#frm-atualiza-libro')[0].reset();
            $('#tableDataTable').load('../elements/tabla4.php');
            alertify.success("Actualizado con Exito!!");  
        }
      });
    });
</script>