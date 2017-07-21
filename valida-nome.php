<?php 

$id = $_GET['id'];
?>
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

<body id="corpo">

    <form method="post" action="envia.php?id=<?= $id ?>">
        
                <input type="hidden" name="bloco" value="<?= $_POST['bloco'];?>">
                <input type="hidden" name="piso" value="<?= $_POST['piso'];?>" >
                <input type="hidden" name="sala" value="<?= $_POST['sala'];?>"/>
                <input type="hidden" name="descricao" value="<?= $_POST['descricao'];?>"></textarea>


            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Confirme seu nome:</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12" >
                        <input type="text" name="nome" placeholder="Ex: João Silva" class="form-control" required>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-xs-12"> 
                        <a href="reclamacao.php?id=<?= $_GET['id']; ?>" class="btn btn-warning" style="margin-top: 5px; float: left;">Voltar</a>
                        <button type="submit" class="btn btn-success" style="margin-top: 5px; float: right;">Enviar</button>
                    </div>
                </div>
            </div>
    
    <script>
        function sucesso(){
            window.location.href = 'index.html';
            alert('Reclação enviada com sucesso!');
            
            
        }
    </script>

    <script>
        var id = <?= $id ?>;
        document.getElementById('corpo').className= 'cor'+id;
    </script>
    
</body>
</html>
