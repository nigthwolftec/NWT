<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta charset="iso-8859-1">
	<meta name="description">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<title>Coffe Shop</title>
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
		<section id="seccion">
			<form id="form1" name="form1" method="post" action="">
				<p  class="centro"><h3>ADMINISTRACION DE COMIDAS</h3></p>
                <?php
                include "Comidas.php";
                $com= new Comidas();
				$com-> validarCodigo($_REQUEST['repetir']);
                $com-> inicializarBD($_REQUEST['preciocom'],$_REQUEST['nomcom'],$_REQUEST['cantidadcom'],$_REQUEST['imagencomi'],$_REQUEST['observaciones']);
                $com-> conectarBD();
                if($_REQUEST['codcomi']==$_REQUEST['repetir']){
                $com-> registrarComidas();
                echo '<h1> "COMIDA AGREGADA"</h1>';
                echo'<br>';
                echo '<h2> USTED AGREGO UNA COMIDA NUEVA"</h2>';
            }
            else 
                echo
					'<br>SU CODIGO ES INCORRECTO VERIFIQUERO POR FAVOR';
					$Imagen= addslashes(file_get_contents($_FILES['imagencomi']['carrito']));
                $com->cerrarBD();
                ?>
				<table>
					<tr>
						<td><a href="../../index.html"><image src="../../IMAGENES/home1.png" class="img3"/></a></td>
						<td><a href="Comidas.html"><image src="../../IMAGENES/regre.png" class="img3"/></a></td>
						<td><a href="INICIO.html"><image src="../../IMAGENES/cerrar.png" class="img3"/></a></td>
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
