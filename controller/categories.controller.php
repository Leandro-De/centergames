<?php

class ControladorCategorias{
    // Crear categorias

    static public function ctrCrearCategoria(){
        
        if(isset($_POST["nuevaCategoria"])){
            
            if(preg_match('/^[-a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

                $tabla = "categorias";
                $datos = $_POST["nuevaCategoria"];
                $respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>
                    window.location = "categories";
                </script>';
                }

            }else{
                echo '<br><div class="alert alert-danger">Error al crear categoría</div>';
            }
        }
    }

    // Mostrar categorias
    static public function ctrMostrarCategorias($item, $valor){
        $tabla = "categorias";

        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;
    }
}