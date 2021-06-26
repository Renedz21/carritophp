<?php
session_start();
if( !isset( $_POST["nombre"] ) || !isset( $_POST["apellido"] ) ) {
	$destino = "inicio.html";
} else {
	$_SESSION["nombre"] = $_POST["nombre"];
	$_SESSION["apellido"] = $_POST["apellido"];
	$_SESSION["carrito"] = array();
	$destino = "carrito.php";
}
header( "location: $destino" );
?>