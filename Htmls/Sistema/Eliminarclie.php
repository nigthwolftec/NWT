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
			<form id="form1" name="form1" method="post" action="eliminarCtrl.php">
				<p class="Centro"><h3>ELIMINAR CLIENTE</h3></p><br>
				<table>
					<tr>
						<td>Eliminar Por ID:<br></td>
						<td><input type="text" name="eliminar"></td>
						<br>
						<td><input type="submit" value="Eliminar" /></td>
					</tr>
                </table>
                <?php		
						$con=mysqli_connect("localhost","root","","coffe") or
						die("Problemas con la conexión a la base de datos");	
						$registro=mysqli_query($con,"select * from usuarios") or die(mysqli_error($con));
						echo '<table class="tablalistado">';
						echo '<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>DIRECCION</th><th>TELEFONO</th><th>FECHA DE NACIMIENTO</th><th>EMAIL</th><th>ROL</th></tr>';
						while($reg=  mysqli_fetch_array($registro)){
                            echo "<tr><td>".$reg[0]."</td>";
                            echo "<td>".$reg[1]."</td>";
                            echo "<td>".$reg[2]."</td>";
                            echo "<td>".$reg[3]."</td>";
                            echo "<td>".$reg[4]."</td>";
                            echo "<td>".$reg[5]."</td>";
                            echo "<td>".$reg[6]."</td>";
                            echo "<td>".$reg[7]."</td>";
							echo "<td>".$reg[9]."</td></tr>";
						}	
						echo '</table>';				
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
