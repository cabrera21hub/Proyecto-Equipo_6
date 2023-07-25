<?php
include_once 'Config/DBConnection.php';

class clsEmpleadoSueldo extends DbConnection{

	
	
	public function ConsultaGlobal()
	{
		$sql = "CALL SP_CONSULTASUELDOEMPLE();";
       
		$resultado = $this->connection->query($sql);
		
		return $resultado;
	}	
}


?>