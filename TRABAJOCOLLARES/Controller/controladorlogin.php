<?php
session_start();//Con esto indicamos que se estarán manejando sesiones guardadas para utilizarlas en todo el sitio
include_once 'Model/clsLogin.php';
class controladorlogin
{
	private $vista;
	
	public function inicio()
	{	 $vista = "view/public/inicioSesionOFF.php";
        include_once("view/public/frmPlantilla.php");
    }	
	public function acceder()
	{
		$login = new clsLogin();

		if (!empty($_POST)) {
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$datos = $login->buscausuario($usuario, $passw);

			if ($datos->num_rows > 0) {
				$usuario = $datos->fetch_object();
				$_SESSION['Tipo'] = $usuario->Tipo;

				if ($_SESSION['Tipo'] === 'Administrador') {
					$vista = "view/Admin/Bienvenida.php"; // Plantilla para el administrador
					include_once("view/Admin/frmPlantilla.php");
				} 
				else if($_SESSION['Tipo'] === 'Normal') {
					$vista = "view/public/BienvenidaUser.php"; // Plantilla para el Usuario
					include_once("view/User/frmPlantilla.php");
			} 
		}
		else{
			$vista = "view/public/CreacionUser.php";
			include_once("view/public/frmPlantilla.php");
		}
	}
}
public function cerrarsesion()
{
	session_destroy();
	$vista = "view/public/Bienvenida.php";
	include_once("view/public/frmPlantilla.php");

}

	
}
	
?>