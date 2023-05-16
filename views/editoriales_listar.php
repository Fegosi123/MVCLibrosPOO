<?php include ("header.php") ?>
<html>
 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
   <link rel='stylesheet' type='text/css' media='screen' href='CSS/miEstilo.css'>
   <title>LIBRERIA SILVIA</title>
 </head>
 <body>
  <h1>Editoriales con las que trabajamos</h1>
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
      <div>
            <p></p>
      </div>
      <div>
         <p>
            <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
         </p>
      </div>
      
</body>
</html>
<?php include ("footer.php") ?>