<?php
class Eliminar{
    private $idusuarios;
    public function iniciarBD($idusuarios){
        $this->idusuarios=$idusuarios;
    }
    public function conectarBD(){
        $con=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $con; 
    }
public function eliminarUsu($idusuarios){
        $this->idusuarios=$idusuarios;
    }
    public function borrarUsu($idusuarios){
        $registro=mysqli_query($this->conectarBD(),"select* from usuarios where idusuarios=$idusuarios")
         or die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<table class="tablalistado">';
            echo '<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>DIRECCION</th><th>TELEFONO</th><th>FECHA DE NACIMIENTO</th><th>EMAIL</th><th>ROL</th></tr>';
            echo "<tr><td>".$reg[0]."</td>";
            echo "<td>".$reg[1]."</td>";
            echo "<td>".$reg[2]."</td>";
            echo "<td>".$reg[3]."</td>";
            echo "<td>".$reg[4]."</td>";
            echo "<td>".$reg[5]."</td>";
            echo "<td>".$reg[6]."</td>";
            echo "<td>".$reg[7]."</td>";
            echo "<td>".$reg[9]."</td></tr>"; 
            echo '</table>';
            mysqli_query($this->conectarBD(),"delete from usuarios where idusuarios=$idusuarios") or
            die(mysqli_error($this->conectarBD()));
            
            echo '<br><h3>Se efectuo el borrado de'.$reg[0];
        }	
        else echo 'NO EXISTE DICHO ID';				
    }
public function cerrarBD(){
    mysqli_close($this->conectarBD());
}
}
    ?>
    