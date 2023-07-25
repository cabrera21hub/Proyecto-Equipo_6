<?php
session_start();
include_once 'Model/clsUsuario.php';

class UserController
{
	public $vista;
	public function inicio()
	{
		$vista="view/public/inicioSesionOFF.php";
		include_once("view/public/frmPLantilla.php");
	}

	public function CrearUsuario()
	{
		$login =new clsUsuario();

		if (!empty($_POST)) 
		{
			$nombre = $_POST['txtNombre'];
			$ap = $_POST['txtpaterno'];
			$am = $_POST['txtmaterno'];
			$usuario = $_POST['txtusuario'];
			$correo = $_POST['txtcorreo']; 
			$passw = $_POST['txtpassword'];
			$fecha = $_POST['txtfecha'];
			$login ->CrearUsuarios($nombre,$ap,$am,$usuario,$correo,$passw,$fecha);
			$vista = "view/public/BienvenidaUser.php";
			include_once("view/User/frmPlantilla.php");
		} 
		else {
			$vista = "view/public/CreacionUser.php";
			include_once("view/public/frmPlantilla.php");
		}
	}
}
?>