<?php
class ControllerUser
{
    // ingreso de usuario
    static public function ctrLoginUser()
    {
        if (isset($_POST["ingUsuer"])) {
            if (
                preg_match('/^[-a-zA-Z0-9]+$/', $_POST["ingUsuer"]) &&
                preg_match('/^[-a-zA-Z0-9]+$/', $_POST["ingPassword"])
            ) {

                $tabla = "users";
                $item = "usuario";
                $valor = $_POST["ingUsuer"];
                $cifrar = crypt($_POST["ingPassword"], '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/W231Qfh2tRLmfdvFD6XfHk12u6hMr9cYIA4hnpjLNSTRtUwYr9km9Ij/');

                $response = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                if ($response["usuario"] == $_POST["ingUsuer"] && $response["password"] == $cifrar){

                    if($response["estado"] == 1){

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["nombre"] = $response["nombre"];
                        $_SESSION["usuario"] = $response["usuario"];
                        $_SESSION["perfil"] = $response["perfil"];
                        echo '<script>
                            window.location = "home";
                        </script>';
                    }else{
                        echo '<br><div class="alert alert-danger">Usuario no activado</div>';    
                    }
                }else{
                    echo '<br><div class="alert alert-danger">Error al ingresar</div>';
                }
            }
        }
    }

    // Crear un usuario
    static public function ctrCreateUser(){
       if(isset($_POST["newUser"])){
        if(preg_match('/^[-a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newName"]) &&
           preg_match('/^[-a-zA-Z0-9]+$/', $_POST["newUser"]) &&
           preg_match('/^[-a-zA-Z0-9]+$/', $_POST["newPassword"])){
            $tabla = "users";
            $cifrar = crypt($_POST["newPassword"], '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/W231Qfh2tRLmfdvFD6XfHk12u6hMr9cYIA4hnpjLNSTRtUwYr9km9Ij/');
            $datos = array("nombre" => $_POST["newName"],
                            "usuario" => $_POST["newUser"],
                            "password" => $cifrar,
                            "perfil" => $_POST["newProfile"]);
            
            $response = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

            if($response == 'ok'){
                echo '<script>
                        window.location = "users";
                    </script>';
                
            }
         }
       } 
    }

    // Mostrar usuarios
    static public function ctrMostrarUsuarios($item, $valor){
        $tabla = "users";

        $response = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

        return $response;
    }

}
