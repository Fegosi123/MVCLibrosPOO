
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
   <title>Librería Silvia</title>
</head>
<body>
<div class="container">
  <h2>Librería Silvia</h2>
                 
  <ul class="nav nav-tabs" role="tablist">
    <!--<li class="active"><a href="#">Home</a></li>
    <a href="destino.php?variable1=valor1&variable2=valor2">Mi enlace</a>-->
    
    <li><a href="index.php?controller=libros&action=listar">Libros</a></li>
    <li><a href="index.php?controller=editoriales&action=listar">Editoriales</a></li>
    <li><a href="index.php?controller=libros&action=sobreMi">Sobre mi </a></li> 
    <li><a href="index.php?controller=libros&action=contacto">Contacto</a></li>       
  </ul>
  <ul>
    <p></p>
      <img src="imagenes/imagenLibreria.jpg">
  </ul>
    
    <footer class="wrapper style1 align-center">
    <ul class="social-menu">
        <li><a href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://instagram.com/"><i class="fab fa-instagram"></i> </a></li>
        <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i> </a></li>
    </ul>
</footer>
</div>
</body>
</html>