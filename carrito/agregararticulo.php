<?php
session_start();
if( ! isset($_SESSION["nombre"]) ){
	header( "location: inicio.html" );
	return;
}
if( isset( $_POST["enviar"] ) ) {
	$articulo = $_POST["articulo"];
	$rec["articulo"] = $_POST["articulo"];
	$rec["precio"] = $_POST["precio"];
	$rec["cantidad"] = $_POST["cantidad"];
	$rec["subtotal"] = $rec["precio"] * $rec["cantidad"];
	$_SESSION["carrito"][$articulo] = $rec;
	header( "location: carrito.php" );
	return;
}
$nombre = "{$_SESSION["nombre"]} {$_SESSION["apellido"]}";
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inicio de Sesión</title>
	</head>
	<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
		<h2>Usuario: <?php echo($nombre) ?></h2>
		<form name="form1" method="post" action="agregararticulo.php">
			<table width="282">
				<tr>
					<td width="74">Artículo</td>
					<td width="182">
						<input type="text" name="articulo" size="30" maxlength="30">
					</td>
				</tr>
				<tr>
					<td>Precio</td>
					<td>
						<input name="precio" type="text" id="precio" size="10" maxlength="5">
					</td>
				</tr>
				<tr>
					<td>Cantidad</td>
					<td>
						<input type="text" name="cantidad" size="10" maxlength="3">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="enviar" value="Enviar" id="enviar">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>