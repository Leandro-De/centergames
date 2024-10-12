 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Productos
     </h1>
     <ol class="breadcrumb">
       <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
       <li class="active">Productos</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
           Agrega producto
         </button>
       </div>

       <div class="box-body">
         <table class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>Imagen</th>
               <th>Código</th>
               <th>Nombre</th>
               <th>Categoría</th>
               <th>Stock</th>
               <th>Precio de compra</th>
               <th>Precio de venta</th>
               <th>Acciones</th>
             </tr>
           </thead>
           <tbody>
            <?php
              $item = null;
              $valor = null;

              $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

              foreach($productos as $key => $value){
                echo '
                  <tr>
                    <td><img src="view/img/productos/producto.png" class="img-thumbnail" width="40px"></td>
                    <td>'.$value["codigo"].'</td>
                    <td>'.$value["descripcion"].'</td>';
                    
                    $item = "id";
                    $valor = $value["id_categoria"];

                    $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    echo '
                      <td>'.$categoria["categoria"].'</td>
                      <td>'.$value["stock"].'</td>
                      <td>$ '.$value["precio_compra"].'</td>
                      <td>$ '.$value["precio_venta"].'</td>
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
 <div id="modalAgregarProducto" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <form role="form" method="post" enctype="multipart/form-data">
         <div class="modal-header" style="background: #3c8dbc; color:#fff">
           <h4 class="modal-title">Agregar producto</h4>
         </div>
         <div class="modal-body">
           <div class="box-body">
            <!-- new input -->
            <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-archive"></i>
                 </span>
                 <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre" required>
                </div>
             </div>
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-code"></i>
                 </span>
                 <input type="text" class="form-control" name="nuevoCodigo" placeholder="Ingresar código" required>
                </div>
             </div>
             <!-- new input -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-th"></i>
                 </span>
                 <select class="form-control" name="nuevaCategoria">
                   <option value="">Selecionar categoría</option>
                   <?php
                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                    foreach($categorias as $key => $value){
                      echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                    }
                   ?>
                 </select>
               </div>
             </div>
              <!-- new input -->
              <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-check"></i>
                 </span>
                 <input type="number" class="form-control" name="nuevoStock" min="0" placeholder="Stock" required>
               </div>
             </div>
             <!-- new input -->
             <div class="form-group row">
              <div class="col-xs-6">

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-arrow-up"></i>
                  </span>
                  <input type="number" class="form-control" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-arrow-down"></i>
                  </span>
                  <input type="number" class="form-control" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>
                </div>
                <br>
                <div class="col-xs-6">
                  <div class="form-group"> 
                    <label>
                      <input type="checkbox" class="minimal porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>
                </div>
                <!-- entrada del porcentaje -->
                 <div class="col-xs-6" style="padding: 0;">
                    <div class="input-group">
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                    </div>
                 </div>
              </div>
             </div>
              <!-- new input -->
              <div class="form-group">
               <div class="panel">Subir imagen</div>
               <input type="file" id="nuevaImagen" name="nuevaImagen">
               <p class="help-block">Peso maximo 2 MB</p>
               <img src="view/img/productos/producto.png" class="img-thumbnail" width="100px">
             </div>
           </div>
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
         <?php
         // $crearProducto = new ControladorProductos();
          //$crearProducto->ctrCrearProducto();
          ?>
       </form>
     </div>
   </div>
 </div>
  