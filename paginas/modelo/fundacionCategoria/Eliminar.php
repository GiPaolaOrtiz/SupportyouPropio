<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administracion</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/portfolio-item.css" rel="stylesheet">
    <link href="../../../css/estiloFundacionLogin.css" rel="stylesheet">
    <link rel="icon" href="../../../img/LogoSupportYou.png">
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/estiloadmin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="../../../js/main.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../../administrador.php"><img alt="LogoAplicacion" id="estilo_logo" src="../../../img/LogoSupportYou.png"></a>
            </div>
        </div>
    </nav>

<br>
    <br>
    <br>
<div id="main">
    
    <?php 
                echo '<h2 class="topspace text-center"> Categorías de Fundaciones </h2>';
            ?>

<?php

$id=$_GET["id"];

include_once("fundacionCategoriaCollector.php");

$CategoriaCollectorObj = new fundacionCategoriaCollector();
    
    $ObjFundacionCategoria = $CategoriaCollectorObj->showFundacionCategoria($id);
     
$CategoriaCollectorObj->deleteFundacionCategoria($id);

echo "<h3 class='topspace text-center'>La Categoría<span class='red'> " . $ObjFundacionCategoria->getNombre() . " </span> ha sido eliminada</h3>";
    
?>

<div>
                <a href="view.php" class="btn btn-info center-block w70"> Volver </a>
            </div>
    
    
 
</div>

</body>
</html>