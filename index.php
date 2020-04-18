<?php
    if(!empty($_GET["c"])){ $c = $_GET["c"]; }
    else{$c = ""; }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El tiempo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
    <body>
    <?php
        require_once("./includes/header.php"); 
        if(empty($c)){
            require_once("./includeS/home.php"); 
        }elseif($c=="provincia"){
            require_once("./includes/provincia.php"); 
        }
        require_once("./includes/footer.php"); 
    ?>
   
    </body>
</html>