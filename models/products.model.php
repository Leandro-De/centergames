<?php

require_once "conexion.php";

class ModeloProductos{

    // Mostrar productos
    static public function mldMostrarProductos($tabla, $item, $valor) {
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        $stmt -> close();
        $stmt = null;
    }

    /*Agregar productos
    static public function mdlIngresarProducto($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria, codigo, descripcion, imagen, stock, precio_compra, precio_venta) VALUES (:id_categoria, :codigo, :descripcion, :imagen, :stock, :precio_compra, :precio_venta)");

        $stmt -> bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
        $stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $stmt -> bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
        $stmt -> bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
        $stmt -> bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt -> close();
        $stmt = null;
    }*/
}