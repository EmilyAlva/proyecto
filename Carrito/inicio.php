<?php 
session_start();
if (trim($_POST['txtnom']) =="" || trim($_POST['txtape'])=="") {

$destino="inicio de sesion.html";

}else{
	$_SESSION['nombre'] = $_POST['txtnom'];
	$_SESSION['apellido']= $_POST['txtape'];
	$destino="carrito.php";

}
header("location: $destino");




 ?>