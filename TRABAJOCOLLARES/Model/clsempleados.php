
<?php
include_once 'Config/DBConnection.php';

class clsempleados extends DbConnection{
    
    public function DetalleEmpleados($Curp, $Nombre,$A_paterno,$A_materno,$Edad,$Direccion,$Telefono,$Pago)
    {
        $sql = "CALL SP_INSERTAREMPLEADO('$Curp','$Nombre','$A_paterno','$A_materno',$Edad,'$Direccion','$Telefono',$Pago)";
       
        $resultado = $this->connection->query($sql);

        return $resultado;
    }
    public function Actualizar($Curp, $Nombre,$A_paterno,$A_materno,$Edad,$Direccion,$Telefono,$Pago)
    {
        $sql = "CALL SP_ACTUALIZAREMPLEADO('$Curp', '$Nombre','$A_paterno','$A_materno',$Edad,'$Direccion','$Telefono',$Pago)";
       
        $resultado = $this->connection->query($sql);

        return $resultado;
    }
    public function Eliminar($Curp) {
        
        $sql = "CALL SP_ELIMINAREMPLEADO('$Curp')";

        $resultado = $this->connection->query($sql);

        return $resultado;
    }
    public function ConsultaEmpleados() {
        
        $sql = "CALL SP_CONSULTAEMPLEADO();";

        $resultado = $this->connection->query($sql);

        return $resultado;
    }
}
