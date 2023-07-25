
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="Estilos/empleado.css">
</head>
<body>
<div class="form-information">

   
<form class="form" action="http://localhost/TRABAJOCOLLARES/?C=controllerproductos2&M=Detalleproducto" method="POST">
        <h2>Alta y Baja de productos</h2>
        <div class="form-group">
            <label for="codigo">Código de Barras:</label>
            <input type="text" id="Codigo_Barras" name="txtCodigo_Barras"  placeholder="Codigo de barras">

        </div>
        <div class="form-group">
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="txtProducto" placeholder="Nombre Producto" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="txtDescripcion"  placeholder="Descripción" required>
        </div>
        <div class="form-grobup">
            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="txtCantidad" pattern="[0-9]*" title="Súlo se admiten numeros"   placeholder="Cantidad" required>
        </div>
        

        <div class="form-group">
            <label for="talla"> Talla: </label>
            <select id="talla" name="txtTalla">
            <option value="1">Grande</option>
            <option value="2">Mediana</option>
            <option value="3">Chica</option>
            </select>
        </div> 


        <div class="form-group">
            <label for="precio">Precio:</label>
            <input  type="text" id="precio" name="txtPrecio" pattern="[0-9]*" title="Súlo se admiten numeros" placeholder="Precio" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="txtCategoria">
            <option value="1">Perros</option>
            <option value="2">Gatos</option>
            </select>
        </div>  
        <div class="form-group">
            <label for="Img">Imgen:</label>
            <input type="File" id="Imagen" name="txtImagen" required>
        </div>
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
    </form>
    <br>
    <div class="table-container">
        <table class="centered-table">
            <thead>
                <tr>
                    <th>Código de Barras</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Talla</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($prod = $productos->fetch_object()) { 
                 echo '<form class="form" action="http://localhost/TRABAJOCOLLARES/?C=controllerproductos2&M=ActualizarXEliminar" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtCodigo_Barras" value="'.$prod->Codigo_Barras.'"readonly></td>';
                echo '<td> <input type="text" name="txtProducto" value="'.$prod->Producto.'" ></td>';
                echo '<td> <input type="text" name="txtDescripcion" value="'.$prod->Descripcion.'" ></td>';
                echo '<td> <input type="text" name="txtCantidad" value="'.$prod->Cantidad.'"  pattern="[0-9]*" title="Sólo se admiten números" ></td>';
                echo '<td> <input type="text" name="txtTalla" value="'.$prod->IdTallas.'" readonly></td>';
                echo '<td> <input type="text" name="txtPrecio" value="'.$prod->Precio.'" pattern="[0-9]*" title="Sólo se admiten números" ></td>';
                echo '<td> <input type="text" name="txtCategoria" value="'.$prod->Categoria.'" readonly> </td>';
                echo '<td> <input type="text" name="txtImagen" value="'.$prod->Imagen.'" ></td>';
                echo '<td width=200>';
                echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button" >Actualizar</button>';
                echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
                echo '</td>';
                echo '</tr>';
                
                echo '</form>';
                  
                } ?>
            </tbody>
        </table>
    </div>
</div>
    </body>
</html>
