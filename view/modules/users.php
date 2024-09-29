 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Usuarios
     </h1>
     <ol class="breadcrumb">
       <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
       <li class="active">Usuarios</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
           Agrega usuario
         </button>
       </div>

       <div class="box-body">
         <table class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>Nombre</th>
               <th>Usuario</th>
               <th>Perfil</th>
               <th>Estado</th>
               <!-- <th>Ultimo login</th> -->
               <th>Acciones</th>
             </tr>
           </thead>
           <tbody>

             <?php
              $item = null;
              $valor = null;
              $usuarios = ControllerUser::ctrMostrarUsuarios($item, $valor);

              foreach ($usuarios as $key => $value) {
                echo '
                  <tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["usuario"].'</td>
                    <td>'.$value["perfil"].'</td>';
                    
                    if($value["estado"] != 0){
                      echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                    }else{
                      echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                    }
                    
                    echo '  
                    
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                      </div>
                    </td>
                  </tr>   
                ';
              }
              ?>
           </tbody>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- Ventana modal -->
 <div id="modalAddUser" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <form role="form" method="post">
         <div class="modal-header" style="background: #3c8dbc; color:#fff">
           <h4 class="modal-title">Agregar usuario</h4>
         </div>
         <div class="modal-body">
           <div class="box-body">
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input type="text" class="form-control" name="newName" placeholder="Ingresar nombre" required>
               </div>
             </div>
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-key"></i>
                 </span>
                 <input type="text" class="form-control" name="newUser" placeholder="Ingresar usuario" required>
               </div>
             </div>
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-lock"></i>
                 </span>
                 <input type="password" class="form-control" name="newPassword" placeholder="Ingresar contraseña" required>
               </div>
             </div>
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-users"></i>
                 </span>
                 <select class="form-control" name="newProfile">
                   <option value="">Selecionar perfil</option>
                   <option value="Administrador">Administrador</option>
                   <option value="Inventario">Inventario</option>
                   <option value="Vendedor">Vendedor</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Crear</button>
         </div>
         <?php
          $crearUsuario = new ControllerUser();
          $crearUsuario->ctrCreateUser();
          ?>
       </form>
     </div>
   </div>
 </div>