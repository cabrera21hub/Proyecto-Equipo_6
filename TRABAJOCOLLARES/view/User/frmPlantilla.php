
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="Estilos/plantillap.css">
</head>
<body>
    <header>
        <a class="logo">
            <img src="Img/huellas.png" alt="logo de la empresa" class="logo-img">
            <h2 class="logo-nombre">LOCURA DE CUELLO</h2>
        </a>
    </header>
    <div class="main-menu">
        <nav class="menu-area">
            <ul>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorBienvenida&M=bienvenida2">Bienvenido</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=CatalogoController&M=MostrarCatalogoSesion">Inicio</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorlogin&M=cerrarsesion">Cerrar Sesion</a></li>
                
            </ul>
        </nav>
    </div>
    <!-- Este es el cuerpo -->
    <?php include_once($vista); ?>

    
    <!-- Este es el pie de la pagina -->
    <br></br>
    <footer>

    </footer>
</body>
</html>