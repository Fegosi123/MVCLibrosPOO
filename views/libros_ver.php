<html>
   <head>
      <title>LIBRERIA SILVIA</title>
   </head>
   <body>
      <h1>Ver datos de un libro</h1>
      <table border="1">
         <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>DESCRIPCION</th>
            <th>NÚMERO DE PÁGINAS</th>
            <th>PRECIO</th>
         </tr>
         <tr>
            <td><?php echo $libro['isbn'] ?></td>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo $libro['descripcion'] ?></td>
            <td><?php echo $libro['n_pags'] ?></td>
            <td><?php echo number_format($libro['precio'],2) ?></td>
         </tr>
      </table>
   </body>
</html>