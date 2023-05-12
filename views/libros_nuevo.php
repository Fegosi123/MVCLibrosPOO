<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario datos libro</title>
    </head>
    <body>
    <form action="index.php?controller=libros&action=guardar" enctype="multipart/form-data" method="post">
        <fieldset>
            <legend>Datos del libro</legend>
                ISBN: <input type="text" name="isbn" title="Solo puede contener números" required ><br>
                Titulo: <input type="text" name="titulo"><br>
                Descripcion: <input type="text" name="descripcion"><br>
                Editorial: 
                        <select name="editorial" id="editorial">
                            <?php foreach ($datosEditoriales as $clave => $editorial) {
                                       ?> <option value="<?= $editorial ['id']; ?>"><?=$editorial['nombre'];?></option>;
                                    
                                    <?php }
                            ?>
                        </select><br></br>
                Número de páginas: <input type="text" name="n_pags" title="Solo puede contener números" required pattern="[0-9]+"><br>
                Precio: <input type="text" name="precio" title="Solo puede contener números" required pattern="[0-9]+"><br>
                FOTO:
                    <p>
                        <label for="file">foto</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        <input type="file" name="file_upload"><br><br>
                    </p> 
        </fieldset>
        <input type="submit" value="Guardar">
    </form>
    
    </body>
</html>