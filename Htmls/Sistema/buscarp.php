<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="iso-8859-1">
	<meta name="description">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8">
	<title>Coffe Shop</title>
	<link rel="shortcut icon" href="../../Recursos/prod.ico" />
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
		<nav id="menu">
			<ul class="nave">
				<li class="opc"> <a href="../../index.html"> <h2>Inicio</h2> </a> </li>
				<li class="opc"><a> <h2> Conócenos  </h2></a>
					<ul>
						<li> <a href="../Pagina/Misión.html"><h2> Misión </h2></a></li>
						<li> <a href="../Pagina/Visión.html"><h2> Visión </h2></a></li>
						<li> <a href="../Pagina/Valores.html"><h2> Valores </h2></a></li>
						<li> <a href="../Pagina/Politicas1.html"><h2> Políticas <h2></a></li>
					</ul>
				</li>
				<li> <a href="catalogo.html"> <h2>Catalogo</h2> </a> </li>
				<li> <a href="Menuadmi.html"> <h2>Administrar</h2> </a> </li>
			</ul>
		</nav>
		<section id="seccion">
			<form id="form1" method="post" action="buscarp.php">
				<p  class="centro"><h3>Buscar productos</h3></p>
				<br>
				<table>
					<tr>
						<td>Buscar :</td>
						<td><select name="opc">
							<option value="Comidas">Comidas</option>
							<option value="Postres">Postres</option>
							<option value="Botanas">Botanas</option>
							<option value="Bebidas">Bebidas</option>
						</select></td>
					</tr>
				</table>
				<table>
					<tr>
						<td>Buscar Codigo:<br></td>
						<td><input type="search" name="buscar"></td>
						<td><input type="submit" value="Buscar" /></td>
					</tr>
				</table>
				<br>
				<br>
				<table class="tabs" >
				<?php
					$prod=$_POST['buscar'];
						$con=mysqli_connect("localhost","root","","coffe") or
						die("Problemas con la conexión a la base de datos");	
						$registro=mysqli_query($con,"select * from comidas where codcom='$prod'") or
						die(mysqli_error($con));
						if($registro!=null){
							while($reg=  mysqli_fetch_array($registro)){			
							echo "<tr><td>Nombre:</td><td>".$reg['1']."</td></tr><br>";
							echo "<tr><td>Precio:</td><td>".$reg['2']."</td></tr><br>";		
							echo '<tr><td>Imagen:</td><td><img src="'.$reg["3"].'" width="100" heigth="100"></td></tr><br>';	
							echo "<tr><td>Observaciones:</td><td>".$reg['4']."</td></tr><br>";								
							}	
						}	
						elseif($registro==$registro){
							echo "NO EXISTE PRODUCTO";
						}						
					?>
				</table>
				<br>
				<br>
				<br>
				<table>
					<tr>
						<td><a href="../../index.html"><image src="../../IMAGENES/home1.png" class="img4"/></a></td>
						<td><a href="AdminProduc.html"><image src="../../IMAGENES/regre.png" class="img4"/></a></td>
						<td><a href="INICIO.html"><image src="../../IMAGENES/cerrar.png" class="img4"/></a></td>
					</tr>
				</table>
			</form>
		</section>
		<footer id="pie">
			Derechos reservados NigthWolf &copy; 2018
		</footer>
	</div>
</body>
</html>
