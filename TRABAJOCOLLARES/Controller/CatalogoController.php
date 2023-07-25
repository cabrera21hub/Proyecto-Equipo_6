<?php
include_once 'Model/clscatalogo.php';
class CatalogoController
{
    private $vista;

    public function MostrarCatalogo()
    {
        $catalogo = new clscatalogo();
        $productos = $catalogo->consultaProductos();

        $vista = "view/public/home.php";
        include_once("view/public/frmPlantilla.php");
    }

    public function MostrarCatalogoSesion()
    {
        $catalogo = new clscatalogo();
        $productos = $catalogo->consultaProductos();

        $vista = "view/public/homeinicio.php";
        include_once("view/user/frmPlantilla.php");
    }

    public function MostrarCatalogoPorCategoria()
    {
        if (isset($_POST['IdCategoria'])) {
            $Idcategoria = $_POST['IdCategoria'];
    
            if (!empty($Idcategoria)) {
                $catalogo = new clscatalogo();
                $productos = $catalogo->consultaProductosPorCategoria($Idcategoria);
    
                $vista = "view/public/home.php";
                include_once("view/public/frmPlantilla.php");
            } else {
                $this->MostrarCatalogoSesion();
            }
        } else {
            $this->MostrarCatalogoSesion();
        }
    }
    public function MostrarCatalogoPorCategoriaNosesion()
    {
        if (isset($_POST['categoria'])) {
            $Idcategoria = $_POST['categoria'];
    
            if ($Idcategoria == 0) {
                // Si se selecciona la opción "Todos", obtener todos los productos
                $catalogo = new clscatalogo();
                $productos = $catalogo->consultaProductos();
    
                $vista = "view/public/homeinicio.php";
                include_once("view/User/frmPlantilla.php");
            } elseif (!empty($Idcategoria)) {
                // Si se selecciona una categoría específica, obtener los productos por categoría
                $catalogo = new clscatalogo();
                $productos = $catalogo->consultaProductosPorCategoria($Idcategoria);
    
                $vista = "view/public/homeinicio.php";
                include_once("view/User/frmPlantilla.php");
            }
        } else {
            // Si no se envió el formulario o no se seleccionó una categoría, mostrar el catálogo completo sin filtro
            $catalogo = new clscatalogo();
            $productos = $catalogo->consultaProductos();
    
            $vista = "view/public/homeinicio.php";
            include_once("view/User/frmPlantilla.php");
        }
    }
    
    public function MostrarDetalleProducto()
    {
        $Idcategoria = $_GET['id'];
        $catalogo = new clscatalogo();
        $Detalleproductos = $catalogo->consultaDetalle($Idcategoria);

        $vista = "view/public/DetalleProducto.php";
        include_once("view/User/frmPlantilla.php");
    }
}
?>
