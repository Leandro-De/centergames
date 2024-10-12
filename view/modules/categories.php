 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
     Categorías
     </h1>
     <ol class="breadcrumb">
       <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
       <li class="active">Categorías</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
           Agrega categoria
         </button>
       </div>

       <div class="box-body">
         <table class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>Nombre</th>
               <th>Acciones</th>
             </tr>
           </thead>
           <tbody>
              <?php
                $item = null;
                $valor = null;

                $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                foreach($categorias as $key => $value){
                  echo '
                    <tr>
                      <td>'.$value["categoria"].'</td>
                      <td>
                      <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
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
 <div id="modalAgregarCategoria" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <form role="form" method="post">
         <div class="modal-header" style="background: #3c8dbc; color:#fff">
           <h4 class="modal-title">Agregar categoría</h4>
         </div>
         <div class="modal-body">
           <div class="box-body">
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-th"></i>
                 </span>
                 <input type="text" class="form-control" name="nuevaCategoria" placeholder="Ingresar categoría" required>
               </div>
             </div>
           </div>
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Agregar</button>
         </div>
         <?php
          $crearCategoria = new ControladorCategorias();
          $crearCategoria->ctrCrearCategoria();
          ?>
       </form>
     </div>
   </div>
 </div>