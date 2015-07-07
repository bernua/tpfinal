<?php
session_start();
if($_SESSION['usuario']="" ){
//si no esta seteada la variable en session
	header("location:index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segurolandia</title>

    <?php include("libreriasCSS.php"); ?>
    
    </head>
    <body>
        
        <div class="wrap">
            <div class="container">
                <?php include("navBar.php") ?>
				HOLA ADMINISTRADOR
            </div><!-- /.container -->
        </div><!-- /.wrap -->
        <?php include("footer.php") ?>

        <?php include("libreriasJS.php"); ?>
   
    </body>
</html>
