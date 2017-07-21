<!DOCTYPE html>
<html>
<!--
  * Please see the included README.md file for license terms and conditions.
  -->
<head>
    <title>Blank Cordova Mobile App Project Template (Lite)</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
        /* following two viewport lines are equivalent to the meta viewport statement above, needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; zoom: 100% ; }  @viewport { width: 100vw ; zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; }           @viewport { user-zoom: fixed ; }
    </style>

    <script src="cordova.js"></script>          <!-- phantom library, needed for Cordova api calls, added during build -->
    <script src="js/app.js"></script>           <!-- recommended location of your JavaScript code relative to other JS files -->
    <script src="xdk/init-dev.js"></script>     <!-- normalizes device and document ready events, see README for details -->
    
    <link href="css/normalize.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="css/estilo.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="nome-app" >
        <?php 
        if(isset($_GET['sucesso'])){
           echo "Sucesso!";
        }else{
            echo "SAMP";
        }
            ?>
    </div>
    <a class="opcao" href=""><div class="box" style="background-color: white;">Mobilia</div></a>
    <a class="opcao" href="reclamacao.php?id=1"><div class="box cor1">Mobilia</div></a>
    <a class="opcao" href="reclamacao.php?id=2"><div class="box cor2">Informatica</div></a>
    <a class="opcao" href="reclamacao.php?id=3"><div class="box cor3">Eletronico</div></a>
    <a class="opcao" href="reclamacao.php?id=4"><div class="box cor4">Sanitario</div></a>
    <a class="opcao" href="reclamacao.php?id=5"><div class="box cor5">Veiculos</div></a>
    <a class="opcao" href="reclamacao.php?id=6"><div class="box cor6">Estrutura</div></a>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
