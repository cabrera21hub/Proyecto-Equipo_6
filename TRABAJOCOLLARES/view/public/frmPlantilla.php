<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="Estilos/plantillap.css">
</head>
<body>
    <header>
        <a class="logo">
            <img src="Img/huellas.png" alt="logo de la empresa" class="logo-img">
            <h1 class="logo-nombre">LOCURA DE CUELLO</h1> 
        </a>
    </header>
    <div class="main-menu">
        <nav class="menu-area">
            <ul>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorBienvenida&M=bienvenida">Bienvenido</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=CatalogoController&M=MostrarCatalogo">Inicio</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorlogin&M=inicio">Iniciar sesión</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=UserController&M=CrearUsuario">Registrar</a></li>
            </ul>
        </nav>
    </div>
    <!-- Este es el cuerpo -->
    <?php include_once($vista); ?>

    
    <!-- Este es el pie de la pagina -->

    <footer>
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>
                        Dirección: Col.Centro Calle:Centro Huejutla de Reyes.
                        34000
                    </li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>EmaiL: L0curaCuell0s@gmail.com</li>
                </ul>
            </div>
        </footer>
</body>
</html>