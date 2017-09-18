<?php
<<<<<<< HEAD
=======
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/usuario/usuarioCollector.php");
>>>>>>> 5977549a02d45e0ebe89d9f09e80e5fefab38bf4
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
    include_once("usuarioCollector.php");
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $UsuarioCollectorObj = new UsuarioCollector();
        
        foreach ($UsuarioCollectorObj->showUsuarios() as $c){
            if($c->getUsername() == $username && $c->getPass() == $pass){
               
                $_SESSION['Misesion']= $username;
                 
                
                

            if($c->getIdrol() == 1){
<<<<<<< HEAD:paginas/modelo/usuario/validarusuario.php
<<<<<<< HEAD:paginas/validarusuario.php
                echo "<p>hola</p>";
=======
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../administrador.php?ID=". $c->getIdusuario(). "'>";
>>>>>>> 63476d16a39531301c44d0ad692003fe89d5b562:paginas/modelo/usuario/validarusuario.php
=======
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../administrador.php?ID=". $c->getIdusuario(). "'>";
>>>>>>> 63476d16a39531301c44d0ad692003fe89d5b562:paginas/modelo/usuario/validarusuario.php

            }

            if($c->getIdrol() == 2){
                 echo "<p>hola</p>";

            }

            }
        }
        
        if (!isset($_SESSION['Misesion'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="login.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
        
       ?>
            
    </body>
</html>