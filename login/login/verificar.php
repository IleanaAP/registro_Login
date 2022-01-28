<?php
include("acceso.php");

sesion_start();
//importando datos para conectarse
//conectarse
require_once 'passwordHash.Class.php';
require_once 'acceso.php';

/**
 * 
 */
class Login {

	private $iNombreUsuario = "";
	private $iClaveUsuario = "";
	private $mensaje = "";
	
	function __construct($iNombreUsuario, $iClaveUsuario)
	{
		$this->usuario_=$iNombreUsuario;
		$this->contrasena_=$iClaveUsuario;
	}

	public function Ingresar(){
		if($this->ValidarUsuario()==false){
			$this->mensaje=$this->mensaje;
		} else {
			if($this->contraUsuario()==false){
				$this->mensaje=$this->mensaje;
			} else {
				//si el logeo es correcto hace la redireccion
				if(!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
					$uri = 'https://';
				} else {
					$uri = 'https://';
				}
				$uri .= $_SERVER['HTTP_HOST'];

				echo "<script type=\"text/javascript\">window.location=\"".uri."/admin.php\";</script>";
			}
		}
	}

	private function ValidarUsuario(){
		$retornar = false;


		//sentencia SQL para buscar un usuario con esos datos
		$sql = "SELECT login.nombre_usuario FROM login WHERE login.nombre_usuario = '$iNombreUsuario' and clave_usuario = '$contrasena'";
		$result = mysqli_query($conn, $sql);
	}
}

?>