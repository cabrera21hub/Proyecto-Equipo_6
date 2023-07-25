<?php
class  controladorBienvenida
{
	private $vista;
	
	
	public function bienvenida()
	{	
		$vista="view/public/Bienvenida.php";
        include_once("view/public/frmPlantilla.php");
    }
    public function bienvenida2()
	{	
		
		$vista="view/public/BienvenidaUser.php";
        include_once("view/User/frmPlantilla.php");
    }

	public function bienvenidaAd()
	{	
		$vista="view/Admin/Bienvenida.php";
        include_once("view/Admin/frmPlantilla.php");
    }
}



?>