<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos/home.css">

</head>
<form action="http://Localhost//TRABAJOCOLLARES/?C= CatalogoController&M=MostrarCatalogoPorCategoriaNosesion" method="post"  ></form>
<body>
    <div class="divs">
    <h2 class="heading-1">Collares únicos para mascotas extraordinarias</h2>
        <p>
        <p>Agradecemos sinceramente tu visita y confianza en nuestra tienda. ¡Esperamos que disfrutes navegando y
          encuentres el collar ideal para consentir a tus adorables compañeros!</p>
    </div>
 <!-- ... Tu código HTML anterior ... -->

<div class="grid">
  <?php
  foreach ($productos as $producto) {
    ?>
    <div class="items">
      <img src="img/<?php echo $producto['Imagen']; ?>" alt="producto 1">
      <div class="info">
        <h3><?php echo $producto['Producto']; ?></h3>
        <!-- Suponiendo que el campo "Descripcion" contiene la descripción del producto -->
        <div class="precio">
          <p>Precio: $<?php echo $producto['Precio']; ?></p>
        </div>
        <button type="button" onclick="confirmarSesion()"><strong>Detalle de producto</strong> </button>
      </div>
    </div>
    </form>
    <?php
    
  }

  ?>
</div>
</body>
</html>
<script>
	function confirmarSesion() {
		if (confirm("Para comprar este producto necesitas iniciar sesion ¿Deseas hacerlo?")) {
			window.location.href = "http://localhost/TRABAJOCOLLARES/?C=UserController&M=inicio";
		}
	}
</script>
























