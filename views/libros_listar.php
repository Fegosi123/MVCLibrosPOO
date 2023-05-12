<html>
 <head>
   <title>LIBRERIA SILVIA</title>
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
                  <td><img src="./imagenes/<?php echo $libro['foto']?>" width="110" height="150"></td>
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
      
</body>
</html>