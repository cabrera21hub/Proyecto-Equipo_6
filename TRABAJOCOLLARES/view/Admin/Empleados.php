
<head>
<link rel="stylesheet" href="Estilos/empleado.css">

</head>
<body>
<div class="form-information">
<form class="form" action="http://localhost/TRABAJOCOLLARES/?C=controllerempleados&M=DetalleEmpleado" method="POST">
        <h2>Alta y Baja de Empleados</h2>
        <div class="form-group">
             <label for="codigo">CURP:</label>
             <input type="text" id="codigo" name="txtCurp" placeholder="CURP" required maxlength="18" pattern="[A-Z0-9]{18}" title="Ingrese la CURP correctamente" oninput="this.value = this.value.toUpperCase()">
        </div>
         <div class="form-group">
            <label for="producto">Nombre del Empleado:</label>
            <input type="text" id="Empleado" name="txtEmpleado" minlength="4" maxlength="20" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Apellido Paterno:</label>
            <input type="text" id="Ap" name="txtAp" minlength="4" maxlength="20" placeholder="Apellido Paterno" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Apellido Materno:</label>
            <input type="text" id="Am" name="txtAm" minlength="4" maxlength="20"  placeholder="Apellido Materno" required>
        </div>
        <div class="form-group">
            <label for="talla">Edad:</label>
            <input type="text" id="Edad" name="txtEdad"  maxlength="2" minlength="2" pattern="[0-9]*" title="Su edad no es valida,solo se admiten numeros" placeholder="Edad" required>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion:</label>
            <input type="text" id="diceccion" name="txtDireccion" minlength="5" maxlength="50" placeholder="Direccion" required>
        </div>
        <div class="form-group">
            <label for="Telefono">Telefono:</label>
            <input type="text" id="telefono" name="txtTelefono" maxlength="10" pattern="[0-9]{10}" title="Ingrese los 10 digitos de su Numero Telefonico" placeholder="Telefono" required>
        </div>
        <div class="form-group">
            <label for="Pago">Pago Semanal:</label>
            <input type="text" id="Pago" name="txtPago" minlength="3" maxlength="8" pattern="[0-9]*" title="Súlo se admiten numeros" placeholder="Pago Semanal" required>
        </div>
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
       
    </form>
    <br>
    <div class="table-container">
        <table class="centered-table">
            <thead>
                <tr>
                    <th>CURP</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Pago Semanal</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($Emp = $Consulta1->fetch_object()) { 
                 echo '<form class="form" action="http://localhost/TRABAJOCOLLARES/?C=controllerempleados&M=ActualizarXEliminar" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtCurp" value="'.$Emp->CURP.'" readonly> </td>';
                echo '<td> <input type="text" name="txtEmpleado" value="'.$Emp->Nombre.'" minlength="4" maxlength="20"></td>';
                echo '<td> <input type="text" name="txtAp" value="'.$Emp->Apaterno.'"minlength="4" maxlength="20" ></td>';
                echo '<td> <input type="text" name="txtAm" value="'.$Emp->Amaterno.'" minlength="4" maxlength="20"></td>';
                echo '<td> <input type="text" name="txtEdad" value="'.$Emp->Edad.'" maxlength="2" minlength="2" pattern="[0-9]*" title="Sólo se admiten números"></td>';
                echo '<td> <input type="text" name="txtDireccion" value="'.$Emp->Direccion.'"minlength="5" maxlength="30" ></td>';
                echo '<td> <input type="text" name="txtTelefono" value="'.$Emp->Telefono.'" maxlength="10"  pattern="[0-9]{10}" title="Sólo se admiten numeros telefonicos de 10 digitos"></td>';
                echo '<td> <input type="text" name="txtPago" value="'.$Emp->PagoSemanal.'" minlength="3" maxlength="8" pattern="[0-9]{1,8}" title="Máximo 8 dígitos numéricos"></td>';

                echo '<td width=200>';
                echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button" >Actualizar</button>';
                echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
                echo '</td>';
                echo '</tr>';
                
                echo '</form>';
                  
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>