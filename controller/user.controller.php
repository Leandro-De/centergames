<?php
    class ControllerUser{
        // ingreso de usuario
        public function ctrLoginUser(){
            if(isset($_POST["ingUsuer"])){
                if(preg_match('/^[-a-zA-Z0-9]+$/',$_POST["ingUsuer"]) &&
                   preg_match('/^[-a-zA-Z0-9]+$/',$_POST["ingPassword"])){
                    
                    $tabla = "users";
                    $item = "usuario";
                    $valor = $_POST["ingUsuer"];

                    $response = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
                    
                    var_dump($response);
                }
            }
        }
    }