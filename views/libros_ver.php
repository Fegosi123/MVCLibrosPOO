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
      <h1>Datos libro</h1>
      <div>
         <table id="tablaVer" border="1">
            <tr>
               <th>ISBN</th>
               <th>TITULO</th>
               <th>DESCRIPCION</th>
               <th>NÚMERO DE PÁGINAS</th>
               <th>PRECIO</th>
               <th>PORTADA</th>
            </tr>
            <tr>
               <td><img id="imagenPequena" src="./imagenes/<?php echo $libro['foto']; ?>" alt="Portada libro"/></td>
               <td><?php echo $libro['isbn'] ?></td>
               <td><?php echo $libro['titulo'] ?></td>
               <td><?php echo $libro['descripcion'] ?></td>
               <td><?php echo $libro['n_pags'] ?></td>
               <td><?php echo number_format($libro['precio'],2) ?></td>
            </tr>
         </table>
         <p></p>
         <p>
               <input id="BotonAtras" type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">
         </p>
      </div>
   </body>
</html>
<?php include ("footer.php") ?>