<?php
class Libros_Controller
{
   /*
    

   
      Método que valida si el email no está vacío y además tiene un formato válido.
      
      if(empty($_POST['email']) && !preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/',$_POST['email'])){
         $errores[] = 'El campo de Email tiene un formato no válido.';
    }


    */
   function __construct()
   {
      //Creamos una instancia de nuestro mini motor de plantillas
      $this->view = new View();
   }
      
   //Función que carga la portada
   public function portada(){
            
      $this->view->show('libros_portada.php');
   }
   //Función que carga el formulario del contacto
   public function contacto(){
      include "views/libros_contacto.html";
   }
   //función que carga el apartado de infomación personal
   public function sobreMi(){
      include "views/libros_sobreMi.php";
   }

   public function listar()
   {
      //Incluye el modelo que corresponde
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pedimos al modelo todos los libros
      $libros = $Libros_model->getLibros();

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libros'] = $libros;

      //Finalmente presentamos nuestra plantilla
      $this->view->show("libros_listar.php", $variables);
   }
   

   public function ver ()
   {
      if ( !isset ( $_GET [ 'id' ] ) )
         die("No has especificado un identificador de libro.");

      $id = $_GET [ 'id' ];

      //Incluimos el modelo correspondiente
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pide al modelo el libro con id = $id
      $libro = $libros = $Libros_model->getLibro($id);

      if ($libro === null)
         die("Identificador de libro incorrecto");

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libro'] = $libro;

      //Pasamos a la vista toda la información que se desea representar
      $this->view->show('libros_ver.php', $variables);
   }
   public function nuevo(){
    //Incluimos el modelo correspondiente
    require 'models/libros_model.php';
    require 'models/editoriales_model.php';
    $editoriales_model=new Editoriales_Model();
    $datosEditoriales=$editoriales_model->getEditoriales();
    //nuevoLibro();
    //Le pide al modelo el libro con id = $id
    include('views/libros_nuevo.php');
    }

    public function guardar(){
      $errores=[];
      
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         /**
            * Comprobamos si el ISBN esta vacío.
         */
        if(empty($_POST['isbn'])){
         $errores[]= 'El campo isbn es obligatorio.';
        }
        //Comprobamos que el ISBN solo tiene números
        if(!is_numeric($_POST['isbn']) && $_POST['isbn'] != "/^[0-9]+$/"){
         $errores[]= 'El campo isbn solo puede contener números.';
        }
         /**
            * Comprobamos si el título esta vacío.
         */
         if(empty($_POST['titulo'])){
               $errores[]= 'El campo Nombre es obligatorio.';
         }
         /**
          * Comprobamos si el precio es un valor con decimales.
          */
         if(!is_float($_POST['precio'])){
            $errores[]= 'El campo Precio no tiene un formato válido.';
         }
         /**
          * Comprobamos si el número de páginas es un valor entero.
          */
         if(!is_numeric($_POST['n_pags'])){
            $errores[]= 'El campo Número de páginas no tiene un formato válido.';
         }
         if(count($errores)){
            $hayerrores= array();
            $hayerrores['hayerrores'] = $errores;
            $this->view->show('libros_errores.php',$hayerrores);
         }else{ 
            require 'models/libros_model.php';
            //Creamos una instancia de nuestro "modelo"
            $Libros_model = new Libros_Model();
            //Tratar imagen
            $config = Config::getInstance();
            $path=$config->get('IMAGENES_FOLDER');
            $dest=(isset($_POST['isbn']) ? $_POST['isbn'] : null);
            $destino=$this->isbnSoloNumeros($dest);
            $datos=$_POST;
            $datos['foto']=$destino;
            $destino=$path.$destino;
            //Sube la imagen
            $nombre_temp = $_FILES["file_upload"]["tmp_name"];
            if($nombre_temp =! ""){
                     if(move_uploaded_file($nombre_temp, $destino)){
                        $mensaje= "Archivo subido correctamente";
                        echo $mensaje;
                     }else{
                        echo $_FILES['file_upload']['error'];
                     }
               }       
            $Libros_model->guardarLibro($datos);  
            header('location:index.php');
            }
      }
    }

    //Función que elimina espacios en blanco, caracteres especiales y letras del campo isbn.
    public function isbnSoloNumeros($cadena){
      $cadena= str_replace(' ','',$cadena);
      $cadena = preg_replace('/[^0-9]/', '', $cadena).".jpg";
      return $cadena;
    } 

    function editar(){
        $idSeleccionado=$_REQUEST['id'];
        //Cargamos el modelo correspondiente y obtenemos los datos del libro seleccionado por el usuario.
        require 'models/libros_model.php';
        $Libros_model = new Libros_Model();
        $datosLibro=$Libros_model->getLibro( $idSeleccionado);
        //Cargamos el modelo correspondiente y obtenemos los datos de la editorial 
        require 'models/editoriales_model.php';
        $editoriales_model=new Editoriales_Model();
        $datosEditoriales=$editoriales_model->getEditoriales();
  
        include('views/libros_editar.php');
        
     }
     function eliminar()
    {
      if ( !isset ( $_GET [ 'id' ] ) )
         die("No has especificado un identificador de libro.");
      $id = $_GET [ 'id' ];
      //Incluimos el modelo correspondiente
      require 'models/libros_model.php';
      $Libros_model = new Libros_Model();
      $libro=$Libros_model->deleteLibro($id);
      //Le pide al modelo el libro con id = $id
      include('views/libros_eliminar.php');
   }
}
?>