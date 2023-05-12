<?php
class Libros_Model
{
   protected $db;

   public function __construct() {
      $this->db = DBManager::getInstance()->getConnection();
   }

   function getLibros()  {
      $result = $this->db->query('SELECT * FROM libros');
      $libros = $result->fetchAll();
      return $libros;
   }

   function getLibro($id) {
      $query = 'SELECT * FROM libros WHERE id = ?';
      $stmt = $this->db->prepare($query);
      $stmt->execute(array($id));
      $libro = $stmt->fetch();
      return $libro;
   }
   function nuevoLibro(){
      $query = 'INSERT INTO libros (id, isbn, titulo, descripcion , editorial, n_pags, precio, foto 
                       VALUES :id, :isbn, :titulo, :descripcion, :editorial, :n_pags, :precio, :foto)';
      $stmt = $this->db->prepare($query);
      $stmt->execute();
   }
   function guardarLibro($datos){
    /*echo "Estamos en la función guardarLibro del modelo";
    $db = getConnection();*/
    if (!isset($datos['id'])) {
      //Si el campo id está vacio se trata de crear un nuevo libro
      $miInsert =$this->db->prepare('INSERT INTO libros (isbn, titulo, descripcion, editorial, n_pags, precio, foto) 
                                            VALUES (:isbn, :titulo, :descripcion, :editorial, :n_pags, :precio, :foto)');
       
       $miInsert->execute(
          array(
              'isbn'=>$datos['isbn'],
              'titulo'=>$datos['titulo'],
              'descripcion'=>$datos['descripcion'],
              'editorial'=>$datos['editorial'],
              'n_pags'=>$datos['n_pags'],
              'precio'=>$datos['precio'],
              'foto'=>$datos['foto']
          )
      );
      echo "Datos guardados en la BD!";
     
    }else{
       //Update
       $miUpdate = $this->db->prepare('UPDATE libros 
                                       SET isbn = :isbn, titulo = :titulo, descripcion = :descripcion, editorial = :editorial, n_pags = :n_pags, precio = :precio, foto =:foto
                                       WHERE id = :id');
          //Ejecuta UPDATE con los datos
       $miUpdate->execute(
              [
                'id'=>$datos['id'],
                'isbn'=>$datos['isbn'],
                'titulo'=>$datos['titulo'],
                'descripcion'=>$datos['descripcion'],
                'editorial'=>$datos['editorial'],
                'n_pags'=>$datos['n_pags'],
                'precio'=>$datos['precio'],
                'foto'=>$datos['foto']
              ]
       );
      
    }
}
  //Función que borra un libro que coincide son el id seleccionado
  function deleteLibro($id){
    $query = 'DELETE FROM libros WHERE id = ?';
    $stmt = $this->db->prepare($query);
    $stmt->execute(array($id));
 }
}