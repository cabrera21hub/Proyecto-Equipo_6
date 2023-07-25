<?php
session_start();
include_once 'Model/clsempleados.php';

class controllerempleados {
    
    public $vista;

    public function inicioempleado()
    {
        $vista="view/Admin/Empleados.php";
        include_once("view/Admin/frmPlantilla.php");
    }	
    

    public function DetalleEmpleado() 
    {
        $login = new clsempleados();

        if (!empty($_POST)) {
            $Curp = $_POST['txtCurp'];
            $Nombre = $_POST['txtEmpleado'];
            $A_paterno = $_POST['txtAp'];
            $A_materno = $_POST['txtAm'];
            $Edad = $_POST['txtEdad'];
            $Direccion = $_POST['txtDireccion']; // Corregido el nombre de la variable
            $Telefono = $_POST['txtTelefono'];
            $Pago= $_POST['txtPago'];

            $login->DetalleEmpleados( $Curp, $Nombre, $A_paterno, $A_materno, $Edad, $Direccion, $Telefono,$Pago); // Corregido el nombre de la variable
            
        }
        $Consulta1 = $login->ConsultaEmpleados();
        $vista = "view/Admin/Empleados.php";
        include_once("view/Admin/frmPlantilla.php");
    }

    public function ActualizarXEliminar() {
        $login = new clsempleados();

        if (!empty($_POST)) {
            if (isset($_POST['btnActualizar'])) {
                $Curp = $_POST['txtCurp'];
                $Nombre = $_POST['txtEmpleado'];
                $A_paterno = $_POST['txtAp'];
                $A_materno = $_POST['txtAm'];
                $Edad = $_POST['txtEdad'];
                $Direccion = $_POST['txtDireccion']; // Corregido el nombre de la variable
                $Telefono = $_POST['txtTelefono'];
                $Pago= $_POST['txtPago'];
                
                $login->Actualizar( $Curp, $Nombre, $A_paterno, $A_materno, $Edad, $Direccion, $Telefono,$Pago); // Corregido el nombre de la variable
            } else if (isset($_POST['btnEliminar'])) {
                $Curp = $_POST['txtCurp'];
                $login->Eliminar($Curp);
            }
        }

        $Consulta1 = $login->ConsultaEmpleados();
        $vista = "view/Admin/Empleados.php";
        include_once("view/Admin/frmPlantilla.php");
    }
}
?>
