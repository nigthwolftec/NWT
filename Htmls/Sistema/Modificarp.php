<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="iso-8859-1">
	<meta name="description">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<title>Coffe Shop</title>
	<link rel="shortcut icon" href="../../Recursos/clie.ico" />
	<link rel="stylesheet" href= "../../CSS/pags.css">
</head>
<body>
	<div id="agrupar">
		<header id="cabecera">
			<hgroup>
				<h1>Coffe Shop</h1>
				<h3>» » » Las limitaciones no nos limitan « « «</h3>
			</hgroup>
		</header>
		<section>
			<nav id="menu">
				<ul class="nave">
					<li> <a href="../../index.html"> <h2>Inicio</h2> </a> </li>
					<li><a> <h2> Conócenos  </h2></a>
						<ul>
							<li> <a href="../Pagina/Misión.html"><h2> Misión </h2></a> </li>
							<li> <a href="../Pagina/Visión.html"><h2> Visión </h2></a> </li>
							<li> <a href="../Pagina/Valores.html"><h2> Valores </h2></a> </li>
							<li> <a><h2> Políticas</h2></a>
								<ul>
									<li><a href="../Pagina/Politicas2.html"><h2> Ventas </h2></a></li>
									<li><a href="../Pagina/Politicas1.html"><h2> Empresa </h2></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="catalogo.html"> <h2>Catalogo</h2> </a> </li>
					<li><a href="../Pagina/Contáctanos.html"> <h2>Contáctanos</h2> </a></li>
				</ul>
			</nav>
		</section>
		<section id="seccion">
			<p class="centro"><h3>Modificar Producto</h3>  </p>
			<img src="../../IMAGENES/inventario.png" class="img2">
			<?php
				$codcom=$_POST['buscar'];
				$opc=$_POST['opc'];
				$con=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion");
				$registros=mysqli_query($con,"select * from $opc where codcom like '$codcom'") or die("Problemas el query".mysqli_error());
				if ($reg=mysqli_fetch_array($registros)){
					?>
					<form action="modifp.php" method="post" enctype="multipart/form-data">
						Ingrese nuevo ID:
						<input type="text" name="pnue" value="<?php echo $reg['codcom']?>">
						<input type="hidden" name="pvie" value="<?php echo $reg['codcom']?>">
						<br>
						Ingrese nuevo Precio:
						<input type="text" name="ppnue" value="<?php echo $reg['precio']?>">
						<input type="hidden" name="ppvie" value="<?php echo $reg['precio']?>">
						<br>
						<br>					
						Ingrese nuevo Imagen:
						<input type="file" name="inue">
						<input type="hidden" name="ivie" value="<?php echo $reg['imagen']?>">
						<br>
						Ingrese nuevas Observaciones:
						<input type="text" name="onue" value="<?php echo $reg['observaciones']?>">
						<input type="hidden" name="ovie" value="<?php echo $reg['observaciones']?>">
						<br>
						<input type="hidden" name="opc" value="<?php echo $opc ?>">
						<input type="submit" value="Modificar">
					</form>
					<?php
				}
				else
					echo "<br>No existe El producto con dicho Nombre";
			?>		
		</section>
		<footer id="pie">
			Derechos reservados NigthWolf &copy; 2018
		</footer>
	</div>
</body>
</html>