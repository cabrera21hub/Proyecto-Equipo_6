<head>
<link rel="stylesheet" href="Estilos/creacion.css">

</head>
<body >
  
  <div class="container-form">
    
    <div class="form-information">        
      
      <div class="form-information-childs">
        <h2>¡Bienvenido!</h2>
        <form class="form" action="http://localhost/TRABAJOCOLLARES/?C=controladorlogin&M=acceder" method="POST">
        <div>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="txtusuario" placeholder="Usuario" required>
        </div>
      <div>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="txtpassword" placeholder="Contraeña" required>
      </div>
    <p>¿Desea crear un usuario?<a href="http://localhost/TRABAJOCOLLARES/?C=UserController&M=CrearUsuario"> Registrese aquí</a></p>

      <button type="submit">Acceder</button>
    </div>
    </div>
  </form>
</div>
</body>

