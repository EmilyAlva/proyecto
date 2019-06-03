<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=divicce=width">
	<title>BIENBENIDOS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4" >
<form action="agregararticulo.php" method="post" accept-charset="utf-8">

<div class="panel panel-danger">
<div class="panel-heading"><h4 class="text-center"><strong>INICIO DE SESION</strong></h4></div>	
<div class="panel-body">
<h4><strong>Ingrese Datos</strong></h4><br>

<div class="form-group"><label class="col-md-2 control-label">Articulo:</label></div>
<div class="form-group"><input type="text" name="txtarti" class="form-control input-md" placeholder="Ingrese articulo"></div>

<div class="form-group"><label class="col-md-2 control-label">Precio:</label></div>
<div class="form-group"><input type="text" name="txtprec" class="form-control input-md" placeholder="Ingrese precio"></div>

<div class="form-group"><label class="col-md-2 control-label">Cantidad:</label></div>
<div class="form-group"><input type="text" name="txtcant" class="form-control input-md" placeholder="Ingrese cantidad"></div>

<div class="form-group"><button type="submit" name="btnagregar" class="btn btn-primary"><span class="glyphicon glyphicon-ok"> Agregar</span></button></div>

<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>