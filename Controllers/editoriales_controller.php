<?php
class Editoriales_Controller
{
   function __construct()
   {
      //Creamos una instancia de nuestro mini motor de plantillas
      $this->view = new View();
   }
   public function listar()
   {
      //Incluye el modelo que corresponde
      require 'models/editoriales_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Editoriales_model = new Editoriales_Model();

      //Le pedimos al modelo todos los libros
      $editoriales = $Editoriales_model->getEditoriales();

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['editoriales'] = $editoriales;

      //Finalmente presentamos nuestra plantilla
      $this->view->show("editoriales_listar.php", $variables);
   }
}