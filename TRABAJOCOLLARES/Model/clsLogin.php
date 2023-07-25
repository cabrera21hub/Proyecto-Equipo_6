<?php
include_once 'Config/DBConnection.php';

class clsLogin extends DBConnection{

	
	public function buscausuario($usuario,$passw)
	{
		$sql = "CALL SP_BUSCAUSUARIO('$usuario','$passw');";
       
		$resultado = $this->connection->query($sql);
		
		return $resultado;
	}	
	

}


?>