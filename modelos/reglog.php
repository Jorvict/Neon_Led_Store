<?php
require_once 'conexion.php';
class Reglog {
	public $id;
	public $nombre;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->conexion = new Conexion();
	}

	public static function Registrar($nombre,$apellidos,$email,$clavehash) {
		$conexion = new Conexion ();
		$listado = $conexion->actualizar("INSERT INTO tab_clientes (cli_nombre,cli_apellidos,cli_email,cli_clave,cli_estado) VALUES ('$nombre','$apellidos','$email','$clavehash','Activo')");
		$conexion->cerrar();
		return $listado;
	}
	
	public static function Login($email,$clave) {
		$conexion = new Conexion ();
		$array = array();
		$listado = $conexion->actualizar("SELECT * FROM tab_clientes WHERE cli_email ='$email' AND cli_estado = 'Activo'");
		while ($array2 = mysqli_fetch_array($listado)) {
			if (password_verify($clave, $array2["cli_clave"])) {
					 $array[]= $array2; 
			} 
		 }
		$conexion->cerrar();
		return $array;

		
    }

    
}

?>