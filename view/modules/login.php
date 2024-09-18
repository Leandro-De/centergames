<div class="login-box">
    <div class="login-logo">
        <h1><b>Center Games</b> App</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingresa los datos de inicio de sesión</p>

        <form method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="ingUsuer" require>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" require>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>

            <?php
                $login = new ControllerUser();
                $login -> ctrLoginUser();
            ?>

        </form>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->