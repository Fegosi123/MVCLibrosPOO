

<!----------------------------------------------------------------------->
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
      <title>LIBRERIA SILVIA</title>
      <!--<style>
         form[id=formuEditar], select{
	         text-align: center;
         }
      </style>-->
   </head>
   <body>
         <?php
            //Si se quiere subir una imagen
            if (isset($_POST['subir'])) {
            //Recogemos el archivo enviado por el formulario
                  $archivo = $_FILES['archivo']['name'];
            //Si el archivo contiene algo y es diferente de vacio
                if (isset($archivo) && $archivo != "") {
                     //Obtenemos algunos datos necesarios sobre el archivo
                     $tipo = $_FILES['archivo']['type'];
                     $tamano = $_FILES['archivo']['size'];
                     $temp = $_FILES['archivo']['tmp_name'];
                     //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                                  echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                                           - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                     }
                     else {
                            //Si la imagen es correcta en tamaño y tipo
                           //Se intenta subir al servidor
                           if (move_uploaded_file($temp, 'imagenes/'.$archivo)) {
                               //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                              chmod('imagenes/'.$archivo, 0777);
                               //Mostramos el mensaje de que se ha subido co éxito
                              echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                              //Mostramos la imagen subida
                              echo '<p><img src="imagenes/'.$archivo.'"></p>';
                           } else {
                                 //Si no se ha podido subir la imagen, mostramos un mensaje de error
                                 echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                              }
                     }
                  }
            }
         ?>
      <h1>Datos del libro seleccionado</h1>
      <div>
         <form action="index.php?controller=libros&action=guardar" enctype="multipart/form-data" method="post">
            <fieldset>
               <legend></legend>
                        ID: <input type="hidden" name="id" value="<?=$datosLibro['id']?>"><br><br>
                        ISBN: <input type="text" name="isbn" value="<?=$datosLibro['isbn']?>"><br><br>
                        TITULO: <input type="text" name="titulo" value="<?=$datosLibro['titulo']?>"><br><br>
                        DESCRIPCION: <input type="text" name="descripcion" value="<?=$datosLibro['descripcion']?>"><br><br>
                        EDITORIAL: 
                        <select name="editorial" id="editorial">
                                             <?php foreach ($datosEditoriales as $clave => $editorial) {
                                                      if($datosLibro['editorial']==$editorial['id']){
                                                         ?><option value="<?= $editorial ['id']; ?>" selected><?=$editorial['nombre'];?></option>;
                                                      <?php
                                                      }else{
                                                         ?> <option value="<?= $editorial ['id']; ?>"><?=$editorial['nombre'];?></option>;
                                                      
                                                      <?php }
                                                      }
                                             ?>
                                          </select><br></br>
                        Nº DE PÁGINAS: <input type="text" name="n_pags" value="<?=$datosLibro['n_pags']?>"><br><br>
                        PRECIO: <input type="text" name="precio" value="<?=$datosLibro['precio'].'€'?>"><br><br><br>
                        IMAGEN PORTADA:
                                          <p>
                                             <img id="imagenPequena" src="./imagenes/<?php echo $datosLibro['foto']; ?>" alt="Portada libro"/>
                                          </p>
                                          <p>
                                             <label for="file">foto</label>
                                             <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                             <input type="file" name="foto"><br><br>
                                          </p>
               </legend>
            </fieldset>
            <p>
               <input type="submit" value="Enviar" >
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