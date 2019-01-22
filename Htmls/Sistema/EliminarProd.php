<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="iso-8859-1">
	<meta name="description">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
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
				<li> <a href="../../Htmls/Sistema/catalogo.html"> <h2>Catalogo</h2> </a> </li>
			</ul>
		</nav>
		<section id="seccion">
			<form id="form1" name="form1" method="post" action="Borrarp.php">
				<p  class="centro"><h3>Eliminar productos</h3></p>
				<br>
				<table>
					<tr>
						<td>Buscar Codigo:<br></td>
						<td><input type="text" name="buscar"></td>
						<td><input type="submit" value="buscar" /></td>
					</tr>
				</table>
				<br>
				<br>
				<table class="tabs">
					<tr>
						<td>CODIGO</td>
						<td> NOMBRE DEL PRODUTO</td>
						<td> EXISTENTE</td>
						<td> IMAGEN</td>
					</tr>
					<tr>
						<td>Tor1</td>
						<td>Tortas de jamón</td>
						<td>15</td>
						<td><img src="../../IMAGENES/torta.jpg" class="img3" ></td>
					</tr>
					<tr>
						<td>Ench1</td>
						<td>Enchiladas Verdes</td>
						<td>5</td>
						<td><img src="../../IMAGENES/enchi.jpg" class="img3" ></td>
					</tr>
					<tr>
						<td>So1</td>
						<td>Sope Sencillo</td>
						<td>25</td>
						<td><img src="../../IMAGENES/sope.jpg" class="img3" ></td>
					</tr>
					<tr>
						<td>Comida1</td>
						<td>Comida Corrida</td>
						<td>10</td>
						<td><img src="../../IMAGENES/comida.jpg" class="img3" ></td>
					</tr>
					<tr>
						<td>Chil1</td>
						<td>Chilaquiles Verdes</td>
						<td>3</td>
						<td><img src="../../IMAGENES/comidas.jpg" class="img3" ></td>
					</tr>
				</table>
				<br>
				<input type="button" value="Aceptar" />
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
