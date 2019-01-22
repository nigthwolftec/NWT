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
		<nav id="menu">
			<ul class="nave">
				<li class="opc"> <a href="../../index.html"> <h2>Inicio</h2> </a> </li>
				<li class="opc"><a> <h2> Conócenos  </h2></a>
					<ul>
						<li> <a href="../Pagina/Misión.html"><h2> Misión </h2></a></li>
						<li> <a href="../Pagina/Visión.html"><h2> Visión </h2></a></li>
						<li> <a href="../Pagina/Valores.html"><h2> Valores </h2></a></li>
						<li> <a><h2> Políticas</h2></a>
							<ul>
								<li><a href="../Pagina/Politicas2.html"><h2> Ventas </h2></a></li>
								<li><a href="../Pagina/Politicas1.html"><h2> Empresa </h2></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li> <a href="catalogo.html"> <h2>Catalogo</h2> </a> </li>
				<li> <a href="Menuadmi.html"> <h2>Administrar</h2> </a> </li>
			</ul>
		</nav>
		<section id="seccion">
			<form id="form1" name="form1" method="post" action="eliminarAdmi.php">
                <p class="Centro"><h3>ELIMINAR ADMINISTRADOR</h3></p><br>
                <img src="../../IMAGENES/ELIMINAR.png" class="img2" />
                <br>
                <?php
                include "eliminar.php";
                $eli= new Eliminar();
                $eli-> iniciarBD($_REQUEST['eliminar']);
                $eli-> conectarBD();
				$eli-> eliminarUsu($_REQUEST['eliminar']);
                $eli-> borrarUsu($_REQUEST['eliminar']);
                $eli-> cerrarBD();
                ?>
				<br>
				<table>
					<tr>
						<td><a href="../../index.html"><image src="../../IMAGENES/home1.png" class="img4"/></a></td>
						<td><a href="Adminuser.html"><image src="../../IMAGENES/regre.png" class="img4"/></a></td>
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
