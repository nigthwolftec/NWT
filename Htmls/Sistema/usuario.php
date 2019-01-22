|<?php  
    class Usuarios{
    private $nombreusuarios;
    private $apepa;
    private $apemate;
    private $direccion;
    private $telefono;
    private $fechanacimiento;
    private $email;
    private $contrasena;
    private $roles;
    public function inicializarBD($nombreusuarios, $apepa,$apemate,$direccion,$telefono,$fechanacimiento,$email,$contrasena,$roles){
        $this->nombreusuarios=$nombreusuarios;
        $this->apepa=$apepa;
        $this->apemate=$apemate;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->fechanacimiento=$fechanacimiento;
        $this->email=$email;
        $this->contrasena=$contrasena;
        $this->roles=$roles;
    }
    public function conectarBD(){
        $cone=mysqli_connect("localhost","root","","coffe") or die ("problemas en la conexion de base de datos");
        return $cone; 

    }
    public function validacionUsuario($repetir){
        $this->repetir=$repetir;
    }
    public function registrarUsuario(){
        mysqli_query($this->conectarBD(),"insert into usuarios (nombreusuarios,apepa,apemate,direccion,telefono,fechanacimiento,email,contrasena,roles)values
        ('$this->nombreusuarios','$this->apepa','$this->apemate','$this->direccion', $this->telefono, '$this->fechanacimiento','$this->email','$this->contrasena','$this->roles')") 
        or die("problemas en el insert".mysqli_error($this->conectarBD()));
        echo"<br>";
    }
    public function cerrarBD(){
        mysqli_close($this->conectarBD());
    }
}
?>  