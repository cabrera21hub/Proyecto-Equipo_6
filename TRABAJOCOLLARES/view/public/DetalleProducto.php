
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/DetalleProducto.css">
      
</head>

<body>
<div class="grid">
  <?php
    foreach ($Detalleproductos as $detalle) { ?>
    <div class="items">
      <img src="img/<?php echo  $detalle['Imagen']; ?>" alt="producto 1">
      <div class="info">
        <h3><?php echo $detalle['Producto']; ?></h3>
        <!-- Suponiendo que el campo "Descripcion" contiene la descripción del producto -->
        <p><?php echo  $detalle['Descripcion']; ?></p>
        <!-- Suponiendo que el campo "Precio" contiene el precio del producto -->
        <div class="precio">
          <p>Precio:$<?php echo  $detalle['Precio']; ?></p>
        </div>
        <div class="fila">
            <div>
                <button type="button" onclick="confirmarCompra()">COMPRAR AHORA</button>
                <button type="button" onclick="Volver()">VOLVER AL INICIO</button>
            </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>
</body>
</html>
<script>
	function confirmarCompra() {
	if (confirm("¿Estás seguro de que deseas comprar este collar?")) {
		// Redirigir a la página de confirmación personalizada
		window.location.href = "view/public/Compra.php";
	}
}
</script>
<script>
	function Volver() {
		if (confirm("¿Esta seguro que desea volver al inicio?")) {
			window.location.href = "http://localhost/TRABAJOCOLLARES/?C=CatalogoController&M=MostrarCatalogoSesion";
		}
	}
</script>
