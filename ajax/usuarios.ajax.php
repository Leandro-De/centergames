<?php

require_once "../controller/user.controller.php";
require_once "../models/user.model.php";

class AjaxUsuarios{
    // Editar usuario
    public $idUsuario;
    public function ajaxEditarUsuario() {
        
        $item = "id";
        $valor = $this->idUsuario;
        $response = ControllerUser::ctrMostrarUsuarios($item, $valor);

        echo json_encode($response);

    }
}

// Objeto de editar usuario
if(isset($_POST["idUsuario"])){

    $editar = new AjaxUsuarios();
    $editar -> idUsuario = $_POST["idUsuario"];
    $editar -> ajaxEditarUsuario();
}