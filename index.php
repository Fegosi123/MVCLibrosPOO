<?php
//Incluimos el FrontController
require 'core/FrontController.php';

try
{
   //Lo iniciamos con su método estático main.
   FrontController::main();
}
catch (Exception $e)
{
   echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
   <!--Silvia Fernández González - 12/05/2023 Proyecto Librería-IFCD0210 Desenvolvemento de aplicacións con tecnoloxías Web-->
</body>
</html>

