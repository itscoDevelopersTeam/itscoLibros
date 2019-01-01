<!DOCTYPE html>

<html>
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
            <h5 class="card-title">Autores</h5>
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
	</body>
</html>