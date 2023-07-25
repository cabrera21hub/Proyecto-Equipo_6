
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/home.css">
</head>
<body>
<section>
    <div class="divs">
    <h2 class="heading-1">Collares únicos para mascotas extraordinarias</h2>
        <p>
        Estamos emocionados de presentarte nuestra colección de collares inteligentes diseñados para mantener a tu peludo amigo seguro y conectado.
        </p>
    </div>

    <div class="filtro-categoria">
    <form method="post" action="http://localhost/TRABAJOCOLLARES/?C=CatalogoController&M=MostrarCatalogoPorCategoriaNosesion">
      <center> 
        <label for="Categoria">Filtrar por categoría:</label>
        <select id="Categoria" name="categoria">
            <option value="0"<?php if (isset($_POST['categoria']) && $_POST['categoria'] == 0) echo " selected"; ?>>Todos</option>
            <option value="1"<?php if (isset($_POST['categoria']) && $_POST['categoria'] == 1) echo " selected"; ?>>Perros</option>
            <option value="2"<?php if (isset($_POST['categoria']) && $_POST['categoria'] == 2) echo " selected"; ?>>Gatos</option>
        </select>
       <button type="submit">Filtrar</button></center>
    </form>
</div>




  <div class="grid">
  <?php
  foreach ($productos as $producto) {
    ?>
    <div class="items">
      <img src="img/<?php echo $producto['Imagen']; ?>" alt="producto 1">
      <div class="info">
        <h3><?php echo $producto['Producto']; ?></h3>
        <!-- Suponiendo que el campo "Precio" contiene el precio del producto -->
        <div class="precio">
          <p>Precio: $<?php echo $producto['Precio']; ?></p>
        </div>
        <form action="http://localhost/TRABAJOCOLLARES/?C=CatalogoController&M=MostrarDetalleProducto&id=<?= $producto['Codigo_Barras'] ?>" method="post">
                        <button type="submit">Detalle de producto</button>
         </form>
      </div>
    </div>
    </form>
    <?php
  }
  ?>
</div>
    <script src="java/script.js"></script>
</body>

</html>