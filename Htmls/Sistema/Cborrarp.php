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
			<p class="centro"><h3>Eliminar Producto</h3>  </p>
			<img src="../../IMAGENES/inventario.png" class="img2">
			<?php
				$op=$_POST['tab'];
				$bus=$_POST['buscar'];
				$con=mysqli_connect("localhost","root","","coffe") or
				die("Problemas con la conexión a la base de datos");
				mysqli_query($con,"delete from $op where codcom='$bus'") or
				die(mysqli_error($con));
				echo '<br>Se efectuo el borrado del Producto';
			?>	
		</section>
		<footer id="pie">
			Derechos reservados NigthWolf &copy; 2018
		</footer>
	</div>
</body>
</html>