<?php
include_once 'Model/clsproductos2.php';

class controllerproductos2 {
    public $vista;

    public function inicio() {
        $vista = "view/Admin/productos2.php";
        include_once("view/Admin/frmplantilla.php");
    }

    public function Detalleproducto() 
    {
        $producto = new clsproductos2();

        if (!empty($_POST)) {
            $Codigo_Barras = $_POST['txtCodigo_Barras'];
            $Producto = $_POST['txtProducto'];
            $Descripcion = $_POST['txtDescripcion'];
            $Cantidad = $_POST['txtCantidad'];
            $Talla = $_POST['txtTalla'];
            $Precio = $_POST['txtPrecio'];
            $Categoria = $_POST['txtCategoria'];
            $Imagen=$_POST['txtImagen'];

            $producto->Detalleproductos($Codigo_Barras, $Producto, $Descripcion, $Cantidad, $Talla, $Precio,$Categoria, $Imagen);
        }

        $productos = $producto->ConsultaProductos();
        $vista = "view/Admin/productos2.php";
        include_once("view/Admin/frmplantilla.php");
    }

    public function ActualizarXEliminar() {
         $producto = new clsproductos2();

        if (!empty($_POST)) {
            if (isset($_POST['btnActualizar'])) {
                $Codigo_Barras = $_POST['txtCodigo_Barras'];
                $Producto = $_POST['txtProducto'];
                $Descripcion = $_POST['txtDescripcion'];
                $Cantidad = $_POST['txtCantidad'];
                $Talla = $_POST['txtTalla'];
                $Precio = $_POST['txtPrecio'];
                $Categoria = $_POST['txtCategoria'];
                $Imagen=$_POST['txtImagen'];

                 $producto->Actualizar($Codigo_Barras, $Producto, $Descripcion, $Cantidad, $Talla,$Precio,$Categoria,$Imagen);
            } else if (isset($_POST['btnEliminar'])) {
                $Codigo_Barras = $_POST['txtCodigo_Barras'];
                 $producto->Eliminar($Codigo_Barras);
            }
        }

        $productos =  $producto->ConsultaProductos();

        $vista = "view/Admin/productos2.php";
        include_once("view/Admin/frmplantilla.php");
    }
}
?>
