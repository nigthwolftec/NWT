<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="iso-8859-1">
	<meta name="description">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<title>Coffe Shop</title>
	<link rel="shortcut icon" href="../../Recursos/Cat.ico" />
	<link rel="stylesheet" href= "../../CSS/pags.css">
</head>
<body>
	<div id="agrupar">
		<header id="cabecera">
			<hgroup>
				<h1>Coffe Shop</h1>
        <h3>» » » Un nombre. Una Leyenda... « «</h3>
				<div class="der">
					<a class="der" href="carrito.html"><img src="../../IMAGENES/carrito.png" class="img3"></a>
				</div>
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
		<br>
		<aside id="columna3">
						<ul>
						<li><a href="tortas.html">Tortas</a></li>
						<br>
						<li><a href="enchiladas.html">Enchiladas</a></li>
						<br>
						<li><a href="paquetes.html">Paquetes</a></li>
						<br>
						<li><a href="hamburguesas.html">Hamburguesas</a></li>
						<br>
						<li><a href="pizza.htm">Pizza</a></li>
						<br>
						<li><a href="lazañas.html">Lazañas</a></li>
						</ul>
		</aside>
		<section id="seccion2">
            <?php
        $con=mysqli_connect("localhost","root","","coffe") or
				die("Problemas con la conexión a la base de datos");	
				$registro=mysqli_query($con,"select * from comidas") or
				die(mysqli_error($con));	
				while($reg=  mysqli_fetch_array($registro)){
					echo "<table border><tr><td>ID </td><td> $reg[0]<br></td></tr>";
					echo "<tr><td>PRECIO </td><td>$reg[1]<br></td></tr>";
					echo "<tr><td>NOMBRE DEL PRODUCTO</td><td>".$reg[2]."<br></td></tr>";
					echo '<tr><td>Imagen:</td><td><img src="'.$reg["3"].'" width="100" heigth="100"></td></tr><br>';	
                    echo "<tr><td>OBSERVACIONES</td><td>".$reg[4]."<br></td></tr></table> ";
                    echo "<br>";
                }	
                ?>
			</section>
			<aside id="as">
					<table>
						<tr>
						<td>
								<a href="../../Htmls/Sistema/productospos.html"><img src="../../IMAGENES/Postres.jpg" class="img" >
						<br>Postres
					</td>
				</tr>
				<tr>
						<td>
								<br>
								<a href="../../Htmls/Sistema/productosbot.html"><img src="../../IMAGENES/pap.jpg" class="img" >
								<br>
								<br>Botanas
						</td>
					</tr>
					<tr>
							<td>
									<br>
									<a href="../../Htmls/Sistema/productosbeb.html"><img src="../../IMAGENES/ag.jpg" class="img" >
									<br>
									<br>Bebidas
							</td>
						</tr>
					</table>
				</aside>
			<footer id="pie">
				Derechos reservados NigthWolf &copy; 2018
			</footer>
	</div>
</body>
</html>
