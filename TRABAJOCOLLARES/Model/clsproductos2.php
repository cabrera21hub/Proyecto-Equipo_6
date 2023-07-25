
<?php
include_once 'Config/DBConnection.php';

class clsproductos2 extends DbConnection{
    
    public function Detalleproductos($Codigo_Barras, $Producto, $Descripcion, $Cantidad, $Talla, $Precio,$Categoria,$Imagen) 
    {
        $sql = "CALL SP_INSERTARPRODUCTO('$Codigo_Barras', '$Producto', '$Descripcion', $Cantidad, $Talla, $Precio,$Categoria,'$Imagen')";
        $resultado = $this->connection->query($sql);

        return $resultado;
    }

    public function Actualizar($Codigo_Barras, $Producto, $Descripcion, $Cantidad, $Talla, $Precio,$Categoria,$Imagen) 
    {
     
        $sql = "CALL SP_ACTUALIZARPRODUCTO('$Codigo_Barras','$Producto','$Descripcion',$Cantidad,$Talla,$Precio,$Categoria,'$Imagen');";

        $resultado = $this->connection->query($sql);

        return $resultado;
    }
    public function Eliminar($Codigo_Barras) {
        
        $sql = "CALL SP_ELIMINARPRODUCTO('$Codigo_Barras');";

        $resultado = $this->connection->query($sql);

        return $resultado;
    }
    

    public function ConsultaProductos() {
        
        $sql = "CALL SP_CONSULTAPRODUCTO();";
        $resultado = $this->connection->query($sql);

        return $resultado;
    }
}
