<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta charset="iso-8859-1">
		<meta name="description">
		<meta name="keywords" content="HTML5, CSS3, JavaScript">
		<title>Coffe Shop</title>
		<link rel="shortcut icon" href="Recursos/COFi.ico" />
		<link rel="stylesheet" href= "CSS/pag.css">
	</head>
	<body>
		<div id="agrupar">
			<header id="cabecera">
				<hgroup>
					<h1>Biblio Tec  </h1>
					<h2>» » » Tu Mejor Opción« « «</h2>
				<div class="der">
					<a href="http://www.utn.edu.mx/"><img src="IMAGENES/utn.gif" class="imagen4"></a>
				</div>
				</hgroup>
			</header>
			<section>
				<nav id="menu">
					<ul class="nave">
						<li> <a href="index.html"> <h2>Inicio</h2> </a> </li>
						</li>
						<li> <a href="XD.php"> <h2>Busqueda de libros</h2> </a> </li>
					</ul>
				</nav>
			</section>
					<section id="seccion">
			<img class="imagen5" src="IMAGENES/nig.png" />
						<h2 class="tt">Busqueda Por Bibliotecas</h2>
						<br>
    <form name="vista">
      <p>
		  <center>
        <input type="text" name="bi" placeholder="Nombre"
                accesskey="1">
	  </p>
	  <br>
      <p>
		  <center>
        <input type="text" name="bio" placeholder="Categorias"
                accesskey="2">
      </p>
      <p>
		  <center>
			  <br>
        <h2><output name="respuesta"></output><h2>
	  </p>
	  <br>
      <p>
		  		  <center>
        <button type="submit">Buscar</button>
      </p>
    </form>
			<div class="just">

				    <script>
      "use strict";
      const vista = document.vista;
      let respuesta;
      document.vista.addEventListener("submit", saluda);
      function saluda(evt) {
        evt.preventDefault();
        try {
          const bi = vista.bi.value.trim();
          const bio = vista.bio.value.trim();
          if (!bi) {
            throw new Error("Falta el nombre de la biblioteca");
          } else if (!bio) {
            throw new Error("Falta la categoria");
          }
          respuesta = `Saludos a ${bi} y a ${bio}.`;
        } catch (e) {
          respuesta = e.message;
        }   
        vista.respuesta.value = respuesta;
      }
    </script>
			</div>
		</section>
			<aside id="columna">
			<a href="index.html"> <img class="imagen6" src="IMAGENES/v.png" /></a>	
			</aside>
					<aside id="columna">
			<h4> Redes sociales </h4><br>
			<h2>Facebook</h2>
			<a href="https://www.facebook.com"> <img class="imagen4" src="IMAGENES/f.png" /></a>
			<br><br>
			<h2>Instagram</h2><br>
			<a href="https://www.instagram.com/yoyo_y_yo_/"> <img class="imagen4" src="IMAGENES/i.png" /></a>
			<br><br>
			<h2>Twitter</h2>
			<a href="https://twitter.com/"> <img class="imagen4" src="IMAGENES/t.png"></a>
		</aside>
			<footer id="pie">
				Derechos reservados Nigthwolf Tec &copy; 2019
			</footer>
		</div>
	</body>
</html>
