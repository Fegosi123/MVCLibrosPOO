<html>
 <head>
   <title>LIBRERIA SILVIA</title>
 </head>
 <body>
  <h1>Ëditoriales con las que trabajamos</h1>
  <!--<a href="index.php?controller=libros&action=nuevo">Nuevo Libro</button></a>-->
  
      <table border="1">
            <tr>
                  <th>NOMBRE EDITORIAL</th>
                  <th>TELÉFONO</th>
                  </tr>
            <?php foreach ($editoriales as $editorial): ?>
              <tr>
                  <td><?php echo $editorial['nombre'] ?></td>
                  <td><?php echo $editorial['telefono'] ?></td>
              </tr>
            <?php endforeach; ?>
      </table>
      
</body>
</html>