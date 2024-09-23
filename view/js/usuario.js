// Editar usuario
$(".btnEditarUsuario").click(function(){
    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("respuesta", respuesta);
            $("#updateName").val(respuesta["nombre"]);
            $("#updateUser").val(respuesta["usuario"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            //$("#updatePassword").val(respuesta["nombre"]);
        }
    })

}) 