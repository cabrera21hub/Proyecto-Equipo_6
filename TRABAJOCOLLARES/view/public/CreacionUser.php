<head>

<link rel="stylesheet" href="Estilos/creacion.css">
</head>

<body>
    
<div class="form-information">
    
      <div class="form-information-childs">
        <h2>¡Registrate!</h2>
        <form action="http://localhost/TRABAJOCOLLARES/?C=UserController&M=CrearUsuario" method="POST">
            <table>
                <tr>
                    <td><label for="user">Nombre: </label></td>
                    <td><input type="text" name="txtNombre" id="user" placeholder="Nombre" minlength="5" maxlength="20"
                            pattern="[a-zA-Z ]*" title="Sólo se admiten letras" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="user">Apellido Paterno:</label></td>
                    <td><input type="text" name="txtpaterno" id="user" placeholder="Apellido paterno" minlength="5" maxlength="20"
                            pattern="[a-zA-Z ]*" title="Sólo se admiten letras" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="user">Apellido Materno </label></td>
                    <td><input type="text" name="txtmaterno" id="user" placeholder="Apellido materno" minlength="5" maxlength="20"
                            pattern="[a-zA-Z ]*" title="Sólo se admiten letras" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="text">Usuario: </label></td>
                    <td><input type="text" name="txtusuario" id="Usuario" placeholder="Usuario" minlength="5"
                            maxlength="10" pattern="[a-zA-Z0-9]*" title="Sólo se aceptan números y letras" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Correo: </label></td>
                    <td><input type="email" name="txtcorreo" id="email" placeholder="Correo electrónico" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="pass">Contraseña: </label></td>
                    <td><input type="password" name="txtpassword" id="pass" placeholder="Contraseña" minlength="4"
                            maxlength="8" pattern="[a-zA-Z0-9]*" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="Fecha">Fecha de nacimiento: </label></td>
                    <td><input type="date" name="txtfecha" id="Fecha" required>
                    </td>
                </tr> 
            </table>
                <button type="submit">Crear</button>
              <p>¿Cuenta con una sesión?<a href="http://localhost/TRABAJOCOLLARES/?C=controladorlogin&M=inicio">    Inicie aquí</a></p>
</div></div>
    </form>
</body>
</html>