<?php
include_once 'config/DBConnection.php';

class clscatalogo extends DBConnection{

	public function consultaProductos() {
		$sql = "CALL SP_CONSULTAPRODUCTOS();";
		$resultado = $this->connection->query($sql);
		return $resultado;
	}

	public function consultaDetalle($CodigoBarras) {
		$sql = "CALL SP_CONSULTADETALLE('$CodigoBarras');";
		$resultado = $this->connection->query($sql);
		return $resultado;
	}

	public function consultaProductosPorCategoria($Idcategoria) {
		$sql = "CALL SP_CONSULTAPROXCATEGORIA($Idcategoria);";
		$resultado = $this->connection->query($sql);
		return $resultado;
	}
}

?>