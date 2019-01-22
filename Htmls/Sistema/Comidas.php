<?php
class Comidas{
    private $codcom;
    private $preciocom;
    private $nomcom;    
    private $imagencomi;
    private $observaciones;
    public function inicializarBD($codcomi,$preciocom,$nomcom,$imagencomi,$observaciones){
        $this->codcomi=$codcomi;
        $this->preciocom=$preciocom;
        $this->nomcom=$nomcom;
        $this->imagencomi=$imagencomi;
        $this->observaciones=$observaciones;
    }
    public function conectarBD(){
        $con=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $con; 
    }
    public function validarCodigo($repetir){
        $this->repetir=$repetir;
    }
    public function registrarComidas(){
        mysqli_query($this->conectarBD(),"insert into comidas (codcomi,preciocom,nomcom,imagencomi,observaciones)values
        ('$this->codcomi',$this->preciocom,'$this->nomcom','$this->imagencomi','$this->observaciones')") 
        or die("problemas en el insert".mysqli_error($this->conectarBD()));
        echo"<br>";
    }
    public function cerrarBD(){
        mysqli_close($this->conectarBD());
    }
}
?>  