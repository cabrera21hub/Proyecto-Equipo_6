<?php
include_once 'Config/DBConnection.php';

class clsCliente extends DbConnection{

    public function CrearUsuarios($nombre,$ap,$am,$usuario,$correo,$passw,$fecha)
	{
		$sql = "CALL SP_INSERTAR_CLIENTE('$nombre','$ap','$am','$usuario','$correo','$passw',$fecha);";
       
		$resultado = $this->connection->query($sql);
		
		return $resultado;
	}

	
}   
?>