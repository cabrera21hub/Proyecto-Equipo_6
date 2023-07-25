<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section>
        <?php foreach ($Detalleproductos as $detalle) { ?>
            <div class="items">
        <img src="img/<?php echo $detalle['Imagen']; ?>" alt="<?php echo $detalle['Producto']; ?>">
        <div class="info">
            <h3><?php echo $detalle['Producto']; ?></h3>
            <p><?php echo $detalle['Descripcion']; ?></p>
            <div class="precio">
                <p>$<?php echo $detalle['Precio']; ?></p>
            </div>
            <div>
          <button href="#" onclick="confirmarSesion()">COMPRAR</button>
            </div>
                    </div>
                </div>
            <?php } ?>
    </section>
</body>
</html>
<script>
	function confirmarSesion() {
		if (confirm("El producto ha sido comprado, ¡Esperemos que sea de su agrado!")) {
			window.location.href = "http://Localhost//TRABAJOCOLLARES/?C=controladorCatalogo&M=MostrarCatalogo";
		}
	}
</script>