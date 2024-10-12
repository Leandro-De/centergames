// Agregar precio de venta
$("#nuevoPrecioCompra").change(function(){

    if($(".porcentaje").prop("checked")){
   
        var valorPorcentaje = $(".nuevoPorcentaje").val();
        var porcentaje = Number(($("#nuevoPrecioCompra").val()*valorPorcentaje/100))+Number($("#nuevoPrecioCompra").val());
        console.log(porcentaje)
 
        $("#nuevoPrecioVenta").val(porcentaje);
        $("#nuevoPrecioVenta").prop("readonly", true);

    }
})

// Cambio de porcentaje
$(".nuevoPorcentaje").change(function(){

    if($(".porcentaje").prop("checked")){
   
        var valorPorcentaje = $(".nuevoPorcentaje").val();
        var porcentaje = Number(($("#nuevoPrecioCompra").val()*valorPorcentaje/100))+Number($("#nuevoPrecioCompra").val());
        console.log(porcentaje)
 
        $("#nuevoPrecioVenta").val(porcentaje);
        $("#nuevoPrecioVenta").prop("readonly", true);

    }
})
