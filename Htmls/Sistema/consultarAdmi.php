|<?php
class Consulta{
    private $id_admi;
    public function inicializarBD($id_admi){
        $this->id_admi=$id_admi;
    }
    public function conectarBD(){
        $con=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $con; 
    }
public function consultarAdmi($id_admi){
        $registro=mysqli_query($this->conectarBD(),"select * from administradores where id_admi=$this->id_admi") or
        die(mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo "El ID del Administrador es el numero ".$reg[0]."<br>";
            echo "El administrador ".$reg[1]."<br>";
            echo "<br>Su Apellido paterno ".$reg[2]."<br>";
            echo "<br>Y el Apellido materno ".$reg[3]."<br>";
            echo "<br>Y Su Direccion es ".$reg[4]."<br>";
            echo "<br>Su Telefono es ".$reg[5]."<br>";
            echo "<br>Su edad es ".$reg[6]."<br>";
            echo "<br>El Corre Electronico ".$reg[7]."<br>";
}
else{
echo 'NO EXISTE UN ADMINISTRADOR CON DICHO ID';
}
    }
		public function cerrarBD(){
			mysqli_close($this->conectarBD());
    }
    }
        ?>