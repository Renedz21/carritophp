<?php
session_start();
if( ! isset($_SESSION["nombre"]) ){
	header( "location: inicio.html" );
	return;
}
$carritoVacio = (count($_SESSION["carrito"]) == 0);
$nombre = "{$_SESSION["nombre"]} {$_SESSION["apellido"]}";
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inicio de Sesión</title>
	</head>
	<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
		<h2>Usuario: <?php echo( $nombre ) ?></h2>
		<table width="358">
			<tr>
				<td width="170" align="center">
					<a href="agregararticulo.php">Agregar Artículo</a>
				</td>
				<td width="176" align="center">
					<a href="cerrarsesion.php">Cerrar Sesión</a>
				</td>
			</tr>
		</table>
		<?php if( $carritoVacio ) { ?>
		<h3>Carrito Vacio</h3>
		<?php } else { ?>
		<table width='447' border='1'>
			<tr>
				<th width="188">Articulo</th>
				<th width="73">Precio</th>
				<th width="65">Cant.</th>
				<th width="93">Subtotal</th>
			</tr>
			<?php foreach ( $_SESSION["carrito"] as $rec ) { ?>
			<tr>
				<td><?php echo($rec["articulo"]) ?></td>
				<td><?php echo($rec["precio"]) ?></td>
				<td><?php echo($rec["cantidad"]) ?></td>
				<td><?php echo($rec["subtotal"]) ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php } ?>
	</body>
</html>