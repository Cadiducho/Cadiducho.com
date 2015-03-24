<?php

function pagina($n) {
    return isset($_GET[$n]);
}

?>
<html lang="es">
<!--   
   _____          _ _     _            _           
  / ____|        | (_)   | |          | |          
 | |     __ _  __| |_  __| |_   _  ___| |__   ___  
 | |    / _` |/ _` | |/ _` | | | |/ __| '_ \ / _ \ 
 | |___| (_| | (_| | | (_| | |_| | (__| | | | (_) |
  \_____\__,_|\__,_|_|\__,_|\__,_|\___|_| |_|\___/ 
--> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Cadiducho.com | Inicio</title>

  <!-- CSS  -->
  <link href="datos/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="datos/css/font-awesome.min.css" rel="stylesheet">
  <link href="datos/css/inicio.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    
        <?php

        include ("datos/paginas/header.php");
        ?>
    <div class="section no-pad-bot introWeb" id="index-banner">
        <?
        if (pagina("contacto")) {
            echo "contacto :D"; //
        } else {
            include("datos/paginas/pInicio.php");
        }
        ?>
    </div>
        <?
        include ("datos/paginas/footer.php");
        ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="datos/js/timeAgo.js"></script>
  <script src="datos/js/materialize.js"></script>
  <script src="datos/js/inicio.js"></script>

  </body>
</html>
