<?php

include_once 'Model/clsEmpleadoSueldo.php';
include_once 'Libreria/fpdf.php';
class controladorreportes
{
	private $vista;
	
	
    public function reporteTurnosGlobal()
    {
        $Turnos=new clsEmpleadoSueldo();
        if(!empty($_POST))
        {
            
           
            // Crear el objeto FPDF
            $pdf = new FPDF();
        
            // Agregar una página
            $pdf->AddPage();
            
        
            // Establecer la fuente y el tamaño del título
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->SetLeftMargin(10);
            $pdf->Cell(0, 20,utf8_decode('Reporte de empleados'), 0, 1, 'C');

            // Consulta a la base de datos
            
            $Consulta=$Turnos->ConsultaGlobal();     
            //Centrar la tabla
            $pdf->SetLeftMargin(10);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 10);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(20, 10, 'CURP', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Nombre', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Direccion', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Telefono', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Pago', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Pago quincenal', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Pago anual', 1, 1, 'C');
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 9);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(20, 10, $row["Curp"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["Nombre"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["Direccion"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["Telefono"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["Pago"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["Pago_quincenal"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["Pago_Anual"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $Turnos->connection->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

        }
        else
        {
             $Consulta=$Turnos->ConsultaGlobal();
             $vista="View/Admin/ReporteEmpleado.php";
            include_once("View/Admin/frmPlantilla.php");
        }
    }

}
?>