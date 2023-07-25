<head>

<link rel="stylesheet" href="Estilos/empleado.css">
</head>

<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>Curp</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Pago</th>
        <th>Pago quincenal</th>
        <th>Pago anual</th>
      </tr>
    </thead>
    <tbody>
      <?php
            while ($sueld= $Consulta->fetch_object()) {
             echo '<form class="form"  action="#" method="POST"';
                echo '<tr>';
                echo '<td> <input type="text" name="txtCodgo" value="'.$sueld->Curp.'" readonly> </td>';
                echo '<td> <input type="text" name="txtNombre" value="'.$sueld->Nombre.'" ></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$sueld->Direccion.'" ></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$sueld->Telefono.'" ></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$sueld->Pago.'" ></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$sueld->Pago_quincenal.'" ></td>';
                echo '<td> <input type="text" name="txtTipo" value="'.$sueld->Pago_Anual.'" ></td>';
                echo '</tr>';
              echo '</form>';    
            }
      ?>
    
    </tbody>
  </table>
</div>
<form  action="http://localhost/TRABAJOCOLLARES/?C=controladorreportes&M=reporteTurnosGlobal" method="POST">
<center>
<button type="submit" name="btnGenerar"  value="btnGenerar" class="submit-button" >Generar</button>
</center>  
</form>