<?php include ("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/miEstilo.css'>
    <title>Mi sueño</title>
</head>
<body>
    <p><h1>Mi sueño</h1></p>
    <div>
        <p></p>
        
    </div>
    <div id="textoSobreMi">
        <p>Mi nombre es Silvia tengo 39 años.<br>
            Desde la infancia me encantan los libros...así que después de muchos
            años he decidido aventurarme en el mundo de los negocios abriendo mi propia librería.
        </p>
        <p></p>
        <p><img src="imagenes/imagenLibreriaSobreMi.jpg"></p>
    </div>
    
    <p class="BotonAtras">
        <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
    </p>

</body>
</html>
<?php include ("footer.php") ?>