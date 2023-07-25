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
            <h2 class="logo-nombre">LOCURA DE CUELLO</h2>
        </a>
    </header>
    <div class="main-menu">
        <nav class="menu-area">
            <ul>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorBienvenida&M=bienvenidaAd">Bienvenido</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controllerempleados&M=DetalleEmpleado">Empleados</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controllerproductos2&M=Detalleproducto">Productos</a></li>
                <li><a href="http://localhost/TRABAJOCOLLARES/?C=controladorreportes&M=reporteTurnosGlobal">Recursos humanos</a></li>
                <li onclick="return confirmarRedireccion();"><a href="http://Localhost//TRABAJOCOLLARES/?C=controladorAdUs&M=irmenu">Cerrar sesión</a></li>
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
    <script>
	function confirmarRedireccion() {
		if (confirm("¿Desea cerrar sesión?")) {
			window.location.href = "http://Localhost//TRABAJOCOLLARES/?C=controladorAdUs&M=irmenu";
		}
	}
</script>
</body>
</html>