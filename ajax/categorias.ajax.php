<?php

require_once "../controller/categories.controller.php";
require_once "../models/categories.model.php";

class AjaxCategorias{
    // Editar categoria
    public $idCategoria;

    public function ajaxEditarCategoria(){
        
        $item = "id";
        $valor = $this->idCategoria;

        $respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

        echo json_encode($respuesta);
    }
}

// Objeto editar categoria
if(isset($_POST["idCategoria"])){

    $categoria = new AjaxCategorias();
    $categoria -> idCategoria = $_POST["idCategoria"]; 
    $categoria -> ajaxEditarCategoria(); 
}