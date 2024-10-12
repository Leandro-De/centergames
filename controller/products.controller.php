<?php

class ControladorProductos{

    //Mostrar productos
    static public function ctrMostrarProductos($item, $valor){
        
        $tabla = "productos";

        $respuesta = ModeloProductos::mldMostrarProductos($tabla, $item, $valor);

        return $respuesta;
    }

    /*Crear productos
    static public function ctrCrearProducto(){

        if(isset($_POST["nuevoNombre"])){
            if(
                preg_match('/^[-a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoStock"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoPrecioCompra"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoPrecioVenta"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"])
                ){

                    $ruta = "view/img/productos/productos.png";

                    $tabla = "productos";

                    $datos = array(
                        "id_categoria" => $_POST["nuevaCategoria"],
                        "codigo" => $_POST["nuevaCodigo"],
                        "descripcion" => $_POST["nuevoNombre"],
                        "stock" => $_POST["nuevoStock"],
                        "precio_compra" => $_POST["nuevoPrecioCompra"],
                        "precio_Venta" => $_POST["nuevoPrecioVenta"],
                        "imagen" => $ruta); 

                    $respuesta = ModeloProductos::mdlIngresarProducto($tabla, $datos);

                    if($respuesta == "ok"){
                        echo '<script>
                            window.location = "home";
                        </script>';
                    }

                }else{
                    echo '<br><div class="alert alert-danger">Datos incompletos</div>';  
                }
        }
    }*/
}