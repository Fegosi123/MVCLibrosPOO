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
    <title>Contáctanos</title>
</head>
<body>
    <div>
        <p></p>
        <form id="formContacto" action="index.php?controller=libros&action=validarContacto" method="post">
            <fieldset>
                <legend>Datos de contacto</legend>
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" title="Solo puede contener letras" placeholder="Nombre completo" pattern="[A-Za-z]+" required><br>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="email" placeholder="ejemplo@email.com" required><br>
                    </p>
                    <p>
                        <label for="telefono">Teléfono:</label>
                        <input id="telefono" name="telefono"  placeholder="988-111-11" pattern="[^[0-9]{3}\-[0-9]{3}\-[0-9]{3}$/" required><br>
                    </p>
            </fieldset>
            <p>  
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" placeholder="Danos tu mensaje"></textarea>
            </p>
            <p>
                <input id="submit" name="submit" type="submit" value="Enviar">
            </p>
            <p></p>
            <p>
                <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
            </p>
        </form>
    </div>
</body>
</html>
<?php include ("footer.php") ?>

