<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CenterGames App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="view/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="view/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="view/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="view/img/faivocn" type="image/x-icon"> -->
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
    <!-- Site wrapper -->
    <?php

    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

        echo '<div class="wrapper">';
        include "modules/header.php";
        include "modules/sidebar.php";

        // Rutas
        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "home" ||
                $_GET["ruta"] == "users" ||
                $_GET["ruta"] == "categories" ||
                $_GET["ruta"] == "product" ||
                $_GET["ruta"] == "customers" ||
                $_GET["ruta"] == "sales" ||
                $_GET["ruta"] == "new-sales" ||
                $_GET["ruta"] == "report-sales"
            ) {
                include "modules/" . $_GET["ruta"] . ".php";
            } else {
                include "modules/404.php";
            }
        } else {
            include "modules/home.php";
        }
        echo '</div>';
    }else{
        include "modules/login.php";
    }
    ?>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="view/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="view/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="view/dist/js/adminlte.min.js"></script>
    <script src="view/js/plantilla.js"></script>
</body>

</html>