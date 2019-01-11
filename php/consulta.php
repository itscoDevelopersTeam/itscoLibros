<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/heroic-features.css" rel="stylesheet">
	<?php require_once "elements/scripts.php"; ?>	
</head>
<body>
<?php include("views/menu.php"); ?>
<div id="tableDataTable"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableDataTable').load('elements/tabla4.php');
	});
</script>