// Editar categoria
$(".btnEditarCategoria").click(function(){
    
    var idCategoria = $(this).attr("idCategoria");
    var datos = new FormData();
    datos.append("idCategoria", idCategoria);

    $.ajax({
        url: "ajax/categorias.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        successs: function(respuesta){
            console.log('respuesta', respuesta);
        }
    })
})