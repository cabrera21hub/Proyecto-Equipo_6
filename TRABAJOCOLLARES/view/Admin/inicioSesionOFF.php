<!DOCTYPE html>
<html>
<head>
  <script src="/Scripts/denegado.js"></script>
 <link rel="stylesheet" href="Estilos/inicioSesionOFF.css">
</head>
<body>
<br></br>
<form class="form" action="http://localhost/TRABAJOCOLLARES/?C=UserController&M=Acceder" method="POST">
    <h2>LOGIN</h2>
    <div class="form-group">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="txtusuario" required>
    </div>
    <div class="form-group">
      <label for="password">Pas1sword:</label>
      <input type="password" id="password" name="txtpassword" required>
    </div>
    <p>¿Desea crear un usuario?<a href="http://localhost/TRABAJOCOLLARES/?C=UserController&M=CrearUsuario">Cree su registro aqui</a></p>
    <div class="form-group">
      <button type="submit">Acceder</button>
    </div>
  </form>

</body>
</html>
