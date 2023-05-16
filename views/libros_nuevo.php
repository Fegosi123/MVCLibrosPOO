<?php include ("header.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel='stylesheet' type='text/css' media='screen' href='CSS/miEstilo.css'>
        <title>Formulario datos libro</title>
    </head>
    <body>
    <div>
        <form action="index.php?controller=libros&action=guardar" enctype="multipart/form-data" method="post">
            <fieldset>
                <legend>Datos del libro</legend>
                    ISBN: <input type="text" name="isbn" title="Solo puede contener números" required><br><br>
                    Titulo: <input type="text" name="titulo"><br><br>
                    Descripcion: <input type="text" name="descripcion"><br><br>
                    Editorial: 
                            <select name="editorial" id="editorial">
                                <?php foreach ($datosEditoriales as $clave => $editorial) {
                                        ?> <option value="<?= $editorial ['id']; ?>"><?=$editorial['nombre'];?></option>;
                                        
                                        <?php }
                                ?>
                            </select><br></br>
                    Número de páginas: <input type="text" name="n_pags" title="Solo puede contener números" required pattern="[0-9]+"><br><br>
                    Precio: <input type="text" name="precio" title="Solo puede contener números" required><br><br>
                    FOTO:
                        <p>
                            <label for="file">foto</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="file_upload"><br><br>
                        </p> 
            </fieldset>
            <p>
                <input type="submit" value="Guardar">
            </p>
        </form>
    </div>
    <div>
        <p>
            <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
        </p>
    </div>
    </body>
</html>
<?php include ("footer.php") ?>