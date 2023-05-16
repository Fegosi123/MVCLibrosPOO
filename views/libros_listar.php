<?php include ("header.php") ?>
<html>
 <head>
   <title>LIBRERIA SILVIA</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
   <link rel='stylesheet' type='text/css' media='screen' href='CSS/miEstilo.css'>
 </head>
 <body>
  <h1>Libros de nuestra librería</h1>
  <a class="pepito" href="index.php?controller=libros&action=nuevo">Nuevo Libro</button></a>
  <p></p>
  
      <table border="1">
            <tr>
                  <th>ISBN</th>
                  <th>TITULO</th>
                  <th>DESCRIPCION</th>
                  <th>NÚMERO DE PÁGINAS</th>
                  <th>PRECIO</th>
                  <th>FOTO PORTADA</th>
                  <th>OPCIONES</th>
            </tr>
            <?php foreach ($libros as $libro): ?>
              <tr>
                  <td><?php echo $libro['isbn'] ?></td>
                  <td><?php echo $libro['titulo'] ?></td>
                  <td><?php echo $libro['descripcion'] ?></td>
                  <td><?php echo $libro['n_pags'] ?></td>
                  <td><?php echo number_format($libro['precio'],2) ?></td>
                  <td><img id="imagenPequena" src="./imagenes/<?php echo $libro['foto']?>"></td>
                  <td>
                        <table>
                            <p><a class="enlacebutton" href="index.php?controller=libros&action=ver&id=<?php echo $libro['id'] ?>">Ver</button></a></p>
                            <p><a class="enlacebutton" href="index.php?controller=libros&action=editar&id=<?php echo $libro['id'] ?>">Editar</button></a></p>    
                            <p><a class="enlacebutton" href="index.php?controller=libros&action=eliminar&id=<?php echo $libro['id'] ?>">Eliminar</button></a></p>
                        </table>
                  </td>
              </tr>
            <?php endforeach; ?>
      </table>
      <p></p>
      <p>
               <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
      </p>
</body>
</html>
<?php include ("footer.php") ?>