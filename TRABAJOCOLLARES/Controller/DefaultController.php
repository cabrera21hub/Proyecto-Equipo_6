<?php
class DefaultController{

 
    private $vista;

    public function index(){
    
        $vista="view/public/Bienvenida.php";
        include_once("view/public/frmPlantilla.php");
    }

}
?>