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

    // Activar usuario

    public $activarUsuario;
    public $activarId;

    public function ajaxActivarUsuario(){

        $tabla = "users";
        $item1 = "estado";
        $valor1 = $this->activarUsuario;
        $item2 = "id";
        $valor2 = $this->activarId;

        $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

    }
}

// Objeto de editar usuario
if(isset($_POST["idUsuario"])){

    $editar = new AjaxUsuarios();
    $editar -> idUsuario = $_POST["idUsuario"];
    $editar -> ajaxEditarUsuario();
}

//Objeto activar usuario
if(isset($_POST["activarUsuario"])){
    $activarUsuario = new AjaxUsuarios();
    $activarUsuario -> activarUsuario = $_POST["activarUsuario"];
    $activarUsuario -> activarId = $_POST["activarId"];
    $activarUsuario -> ajaxActivarUsuario();

}