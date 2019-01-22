<?php
class Foto{
    public function conectarBD(){
        $con=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $con; 
    }
    public function registrarFoto($nomcom,$preciocom,$observaciones,$foto,$ruta){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),"insert into comidas (preciocom,nomcom,imagencomi,observaciones)
		values ($preciocom,'$nomcom','$destino','$observaciones')") 
		or die("problemas en el insert".mysqli_error($this->conectarBD()));
		echo 'SE AGREGO CORRECTAMENTE';
	}  
	public function registrarBebidas($nombebi,$preciobebi,$observaciones,$foto,$ruta){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),"insert into bebidas (preciobebi,nombebi,imagenbebi,observaciones)
		values ($preciobebi,'$nombebi','$destino','$observaciones')") 
		or die("problemas en el insert".mysqli_error($this->conectarBD()));
		echo 'SE AGREGO CORRECTAMENTE';
	} 
	public function registrarPostres($nompos,$preciopos,$observaciones,$foto,$ruta){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),"insert into postres (preciopos,nompos,imagenpost,observaciones)
		values ($preciopos,'$nompos','$destino','$observaciones')") 
		or die("problemas en el insert".mysqli_error($this->conectarBD()));
		echo 'SE AGREGO CORRECTAMENTE';
	}    
	public function registrarBotanas($nombot,$preciobot,$observaciones,$foto,$ruta){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),"insert into botanas (preciobot,nombot,imagenbota,observaciones)
		values ($preciobot,'$nombot','$destino','$observaciones')") 
		or die("problemas en el insert".mysqli_error($this->conectarBD()));
		echo 'SE AGREGO CORRECTAMENTE';
	}
	public function modificarComidas($codcom){
		$registros=mysqli_query($this->conectarBD(),"select * from comidas where codcom like '$codcom'") or die("Problemas el query".mysqli_error());
			if ($reg=mysqli_fetch_array($registros)){
				?>
				<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
				<form action="modiComidas.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Ingrese nuevo Nombre:</td>
							<td><input type="text" name="Nombnue" value="<?php echo $reg['2']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo Precio:</td>
							<td><input type="text" name="precionue" value="<?php echo $reg['1']?>"></td>
						</tr>
						
						<tr>
							<td>Ingrese nuevas observaciones:</td>
							<td><input type="text" name="observaciones" value="<?php echo $reg['4']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo foto:</td>
							<td><input type="file" name="foto"></td>
							<input type="hidden" name="codvie" value="<?php echo $reg['0']?>">
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Modificar"></td>
						</tr>
					</table>
				</form>
				<?php
					}
					else
					echo "No existe producto con dicho ID";
    } 
	public function modif($preciocom,$nom,$codvie,$foto,$ruta,$observaciones){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),
		"update comidas set nomcom='$nom', preciocom=$preciocom, observaciones='$observaciones', imagencomi='$destino' where codcom like '$codvie'")
		or die(mysqli_error($this->conectarBD()));
		echo "FUE MODIFICADO CON EXITO";
	}
	public function modificarPostres($codpos){
		$registros=mysqli_query($this->conectarBD(),"select * from postres where codpos like '$codpos'") 
		or die("Problemas el query".mysqli_error());
			if ($reg=mysqli_fetch_array($registros)){
				?>
				<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
				<form action="modiPostres.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Ingrese nuevo Nombre:</td>
							<td><input type="text" name="Nombnue" value="<?php echo $reg['2']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo Precio:</td>
							<td><input type="text" name="precionue" value="<?php echo $reg['1']?>"></td>
						</tr>
						
						<tr>
							<td>Ingrese nuevas observaciones:</td>
							<td><input type="text" name="observaciones" value="<?php echo $reg['4']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo foto:</td>
							<td><input type="file" name="foto"></td>
							<input type="hidden" name="codvie" value="<?php echo $reg['0']?>">
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Modificar"></td>
						</tr>
					</table>
				</form>
				<?php
					}
					else
					echo "No existe producto con dicho ID";
    } 
	public function modifi($preciopos,$nom,$codvie,$foto,$ruta,$observaciones){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),
		"update postres set nompos='$nom', preciopos=$preciopos, observaciones='$observaciones', imagenpost='$destino' where codpos like '$codvie'")
		or die(mysqli_error($this->conectarBD()));
		echo "FUE MODIFICADO CON EXITO";
	}
	public function modificarBotanas($codbot){
		$registros=mysqli_query($this->conectarBD(),"select * from botanas where codbot like '$codbot'") 
		or die("Problemas el query".mysqli_error());
			if ($reg=mysqli_fetch_array($registros)){
				?>
				<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
				<form action="modiBotanas.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Ingrese nuevo Nombre:</td>
							<td><input type="text" name="Nombnue" value="<?php echo $reg['2']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo Precio:</td>
							<td><input type="text" name="precionue" value="<?php echo $reg['1']?>"></td>
						</tr>
						
						<tr>
							<td>Ingrese nuevas observaciones:</td>
							<td><input type="text" name="observaciones" value="<?php echo $reg['4']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo foto:</td>
							<td><input type="file" name="foto"></td>
							<input type="hidden" name="codvie" value="<?php echo $reg['0']?>">
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Modificar"></td>
						</tr>
					</table>
				</form>
				<?php
					}
					else
					echo "No existe producto con dicho ID";
    } 
	public function modific($preciobot,$nom,$codvie,$foto,$ruta,$observaciones){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),
		"update botanas set nombot='$nom', preciobot=$preciobot, observaciones='$observaciones', imagenbota='$destino' where codbot like '$codvie'")
		or die(mysqli_error($this->conectarBD()));
		echo "FUE MODIFICADO CON EXITO";
	}
	public function modificarBebidas($codbebi){
		$registros=mysqli_query($this->conectarBD(),"select * from bebidas where codbebi like '$codbebi'") 
		or die("Problemas el query".mysqli_error());
			if ($reg=mysqli_fetch_array($registros)){
				?>
				<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
				<form action="modiBebidas.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Ingrese nuevo Nombre:</td>
							<td><input type="text" name="Nombnue" value="<?php echo $reg['2']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo Precio:</td>
							<td><input type="text" name="precionue" value="<?php echo $reg['1']?>"></td>
						</tr>
						
						<tr>
							<td>Ingrese nuevas observaciones:</td>
							<td><input type="text" name="observaciones" value="<?php echo $reg['4']?>"></td>
						</tr>
						<tr>
							<td>Ingrese nuevo foto:</td>
							<td><input type="file" name="foto"></td>
							<input type="hidden" name="codvie" value="<?php echo $reg['0']?>">
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Modificar"></td>
						</tr>
					</table>
				</form>
				<?php
					}
					else
						echo "No existe producto con dicho ID";
    } 
	public function modifica($preciobebi,$nom,$codvie,$foto,$ruta,$observaciones){
		$destino="IMAGENES/".$foto;
		copy($ruta,$destino);
		mysqli_query($this->conectarBD(),
		"update bebidas set nombebi='$nom', preciobebi=$preciobebi, observaciones='$observaciones', imagenbebi='$destino' where codbebi like '$codvie'")
		or die(mysqli_error($this->conectarBD()));
		echo "FUE MODIFICADO CON EXITO";
	}
	public function borrarComidas($id){
        $registro=mysqli_query($this->conectarBD(),"select* from comidas where codcom=$id")
         or die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo '</table>';
            mysqli_query($this->conectarBD(),"delete from comidas where codcom=$id") or
            die(mysqli_error($this->conectarBD()));
            
            echo '<br><h3>Se efectuo el borrado de </h3>'.$reg[0];
        }	
        else echo 'NO EXISTE DICHO ID';				
	}
	public function borrarPostres($id){
        $registro=mysqli_query($this->conectarBD(),"select* from postres where codpos=$id")
         or die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo '</table>';
            mysqli_query($this->conectarBD(),"delete from postres where codpos=$id") or
            die(mysqli_error($this->conectarBD()));
            
            echo '<br><h3>Se efectuo el borrado de</h3>'.$reg[0];
        }	
        else echo 'NO EXISTE DICHO ID';				
	}
	public function borrarBotanas($id){
        $registro=mysqli_query($this->conectarBD(),"select* from botanas where codbot=$id")
         or die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo '</table>';
            mysqli_query($this->conectarBD(),"delete from botanas where codbot=$id") or
            die(mysqli_error($this->conectarBD()));
            
            echo '<br><h3>Se efectuo el borrado de</h3>'.$reg[0];
        }	
        else echo 'NO EXISTE DICHO ID';				
	}
	public function borrarBebidas($id){
        $registro=mysqli_query($this->conectarBD(),"select* from bebidas where codbebi=$id")
         or die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo '</table>';
            mysqli_query($this->conectarBD(),"delete from bebidas where codbebi=$id") or
            die(mysqli_error($this->conectarBD()));
            
            echo '<br><h3>Se efectuo el borrado de</h3>'.$reg[0];
        }	
        else echo 'NO EXISTE DICHO ID';				
	}
	public function consultarComidas($id){
		$registro=mysqli_query($this->conectarBD(),"select* from comidas where codcom=$id") or
		die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo '</table>';
	}
	else
	echo '<h3>NO EXISTE ESE ID</h3>';        
}
public function consultarPostres($id){
	$registro=mysqli_query($this->conectarBD(),"select* from postres where codpos=$id") or
	die(mysqli_error($this->conectarBD()));
	if ($reg=mysqli_fetch_array($registro)){
		echo '<table class="tablalistado">';
		echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
		echo "<tr><td>".$reg[0]."</td>";
		echo "<td>".$reg[1]."</td>";
		echo "<td>".$reg[2]."</td>";
		echo "<td>".$reg[3]."</td>";
		echo "<td>".$reg[4]."</td>";
		echo '</table>';
}
else
echo '<h3>NO EXISTE ESE ID</h3>';        
}
public function consultarBotanas($id){
	$registro=mysqli_query($this->conectarBD(),"select* from botanas where codbot=$id") or
	die(mysqli_error($this->conectarBD()));
	if ($reg=mysqli_fetch_array($registro)){
		echo '<table class="tablalistado">';
		echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
		echo "<tr><td>".$reg[0]."</td>";
		echo "<td>".$reg[1]."</td>";
		echo "<td>".$reg[2]."</td>";
		echo "<td>".$reg[3]."</td>";
		echo "<td>".$reg[4]."</td>";
		echo '</table>';
}
else
echo '<h3>NO EXISTE ESE ID</h3>';        
}
public function consultarBebidas($id){
	$registro=mysqli_query($this->conectarBD(),"select* from bebidas where codbebi=$id") or
	die(mysqli_error($this->conectarBD()));
	if ($reg=mysqli_fetch_array($registro)){
		echo '<table class="tablalistado">';
		echo '<tr><th>ID</th><th>PRECIO</th><th>PRODUCTO</th><th>IMAGEN</th><th>OBSERVACIONES</th></tr>';
		echo "<tr><td>".$reg[0]."</td>";
		echo "<td>".$reg[1]."</td>";
		echo "<td>".$reg[2]."</td>";
		echo "<td>".$reg[3]."</td>";
		echo "<td>".$reg[4]."</td>";
		echo '</table>';
}
else
echo '<h3>NO EXISTE ESE ID</h3>';        
}
    public function cerrarBD(){
        mysqli_close($this->conectarBD());
    }
}
?>