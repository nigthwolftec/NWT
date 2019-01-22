|<?php  
class ModificarCli{
    private $nuevoemail;
    private $viejoemail;
    public function inicializarBD($nuevoemail,$viejoemail){
        $this->nuevoemail=$nuevoemail;
        $this->viejoemail=$viejoemail;
    }
    public function conectarBD(){
        $cone=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $cone; 
    }
    public function modificarUsuario(){
        mysqli_query($this->conectarBD(),"update usuarios set email='$this->nuevoemail'where email='$this->viejoemail'") 
        or die("problemas en el insert".mysqli_error($this->conectarBD()));
            echo"<br>";
    }
    public function cerrarBD(){
        mysqli_close($this->conectarBD());
    }
}
?>